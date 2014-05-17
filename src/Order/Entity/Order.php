<?php namespace JustMenu\Order\Entity;

use JustMenu\Menu\Entity\Entity;

class Order extends Entity
{
    protected $id;
    protected $name;
    protected $phone_number;
    protected $email;
    protected $special_instructions;
    protected $method;
    protected $payment_method;
    protected $address;
    protected $city;
}
