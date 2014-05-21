<?php namespace JustMenu\Order\Validator;

use Valitron\Validator;

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
        ),
        'in' => array(
            array('method', array('pickup', 'delivery')),
            array('paymentmethod', array('cash', 'credit card')),
        ),
        'email' => array(
            array('email'),
        ),
    );

    public function validate()
    {
        $this->rules($this->rules);

        $data = $this->data();
        $method = isset($data['method']) ? $data['method']:'';

        if ($method === 'delivery') {
            $this->rule('required', array('address', 'city'));
        }

        return parent::validate();
    }
}
