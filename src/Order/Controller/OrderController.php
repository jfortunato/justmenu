<?php namespace JustMenu\Order\Controller;

use JustMenu\Controller\BaseController;
use JustMenu\Mailer\MailerInterface;
use JustMenu\Repository\Order\OrderRepositoryInterface;
use JustMenu\Order\Presenter\OrderPresenterInterface;
use Valitron\Validator;
use JustMenu\Order\Validator\OrderValidator;
use JustMenu\Config\Config;

class OrderController extends BaseController
{
    protected $mailer;

    protected $repository;

    protected $presenter;

    protected $config;

    protected $json_response = array(
        'success' => true,
        'data'    => '',
        'errors'    => '',
    );

    public function __construct(MailerInterface $mailer, OrderRepositoryInterface $repository, OrderPresenterInterface $presenter, Config $config)
    {
        $this->mailer = $mailer;
        $this->repository = $repository;
        $this->presenter = $presenter;
        $this->config = $config;
    }

    public function placeOrder()
    {
        $validator = new OrderValidator($this->request->request->all());
        $validator->setConfig($this->config);
        if(!$validator->validate()) {
            $this->json_response['success'] = false;
            $this->json_response['errors'] = $validator->errors();

            return $this->sendJsonResponse(json_encode($this->json_response));
        }

        // create the order from the POST input the save
        $order = $this->repository->createFromArray($this->request->request->all());

        $manager = $this->repository->getEntityManager();
        $manager->persist($order);
        $manager->flush();

        $this->presenter->setOrder($order);

        // send fax order
        if ($this->config->get('fax.send_fax_order')) {
            $template = $this->presenter->render(__DIR__ . "/../Resources/view/fax-order.html");
            $this->faxer->send($template);
        }

        // send email order
        if ($this->config->get('email.send_email_order')) {
            $template = $this->presenter->render(__DIR__ . "/../Resources/view/mail-order.html");
            foreach ($this->config->get('email.order_emails') as $email) {
                $this->mailer->send($email, $config->get('email.reply_email'), ucfirst($order->getMethod()) . " Order Placed", $template);
            }
        }

        // send confirmation to customer
        if ($this->config->get('email.send_confirmation')) {
            $template = $this->presenter->render(__DIR__ . "/../Resources/view/mail-confirmation.html");
            $this->mailer->send($order->getEmail(), $config->get('email.reply_email'), ucfirst($order->getMethod()) . " Order Placed", $template);
        }

        $this->sendJsonResponse(json_encode($this->json_response));
    }
}
