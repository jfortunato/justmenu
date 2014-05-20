<?php namespace JustMenu\Order\Controller;

use JustMenu\Controller\BaseController;
use JustMenu\Mailer\MailerInterface;
use JustMenu\Repository\Order\OrderRepositoryInterface;
use JustMenu\Order\Presenter\OrderPresenterInterface;

class OrderController extends BaseController
{
    protected $mailer;

    protected $repository;

    protected $presenter;

    public function __construct(MailerInterface $mailer, OrderRepositoryInterface $repository, OrderPresenterInterface $presenter)
    {
        $this->mailer = $mailer;
        $this->repository = $repository;
        $this->presenter = $presenter;
    }

    public function placeOrder()
    {
        $json = array('success' => false);

        try {
            // create the order from the POST input, validating then saving
            $order = $this->repository->createFromArray($this->request->query->all());
            $this->repository->save($order);

            $json['success'] = true;
        } catch (\Exception $e) {
            $this->sendJsonResponse(json_encode($json));
            die();
        }

        $this->presenter->setOrder($order);

        // send fax order
        //$template = $this->presenter->render(__DIR__ . "/../Resources/view/fax-order.html");
        //$this->faxer->send($template);

        // send email order
        //$template = $this->presenter->render(__DIR__ . "/../Resources/view/mail-order.html");
        //$this->mailer->send($order->email, 'Order Placed', "An order has been placed. The name is {$order->name}.");

        // send confirmation to customer
        $template = $this->presenter->render(__DIR__ . "/../Resources/view/mail-confirmation.html");
        $this->mailer->send($order->email, 'orders@jfortunato.com', ucfirst($order->method) . " Order Placed", $template);

        $this->sendJsonResponse(json_encode($json));

        //$order->name                 = 'Justin';
        //$order->phone_number         = '8884747772';
        //$order->email                = 'jfortunato25@gmail.com';
        //$order->address              = '123 easy st.';
        //$order->city                 = 'pitman';
        //$order->special_instructions = '';
        //$order->method               = 'delivery';
        //$order->payment_method       = 'cash';
        //$order->order                = '[{"item_id":23,"quantity":1,"title":"Egg Roll","size":"large","price":"5.50","selected_options":[]},{"item_id":205,"quantity":1,"title":"Shrimp Chow Mein","size":"combo","price":"6.55","selected_options":[{"title":"brown rice","price":"1.5"}]}]';
        //$this->presenter->setOrder($order);
        //$template = $this->presenter->render(__DIR__ . "/../Resources/view/mail-confirmation.html");
        //echo $template;
        ////$this->mailer->send($order->email, 'orders@jfortunato.com', ucfirst($order->method)." Order Placed", $template);
        //die();
    }
}
