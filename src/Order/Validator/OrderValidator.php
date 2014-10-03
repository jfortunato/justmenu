<?php namespace JustMenu\Order\Validator;

use Valitron\Validator;
use JustMenu\Config\Config;

class OrderValidator extends Validator
{
    protected $rules = array(
        'required' => array(
            array('name'),
            array('phone'),
            array('email'),
            array('method'),
            array('paymentmethod'),
            array('contents'),
            array('total'),
        ),
        'in' => array(
            array('method', array('pickup', 'delivery')),
            array('paymentmethod', array('cash', 'credit card')),
        ),
        'email' => array(
            array('email'),
        ),
    );

    protected $config;

    /**
     * Sets the value of config
     *
     * @param Config $config description
     *
     * @return OrderValidator
     */
    public function setConfig(Config $config)
    {
        $this->config = $config;
        return $this;
    }

    public function validate()
    {
        $this->rules($this->rules);

        $data = $this->data();
        $method = isset($data['method']) ? $data['method']:'';

        if ($method === 'delivery')
        {
            $this->rule('required', array('address', 'city'));
            $this->rule('min', 'total', $this->config->get('parameters.minimum_for_delivery'));

            if ($data['total'] < $this->config->get('parameters.minimum_for_delivery_charge'))
            {
                $this->rule('required', 'delivery_charge');
            }
        }

        return parent::validate();
    }
}
