<?php namespace JustMenu\Order\Entity;

use JustMenu\Menu\Entity\Entity;

class Order extends Entity
{
    protected $id;
    protected $name;
    protected $phone_number;
    protected $email;
    protected $address;
    protected $city;
    protected $special_instructions;
    protected $method;
    protected $payment_method;
    protected $order;

    public function total()
    {
        $subtotal = $total = 0;

        foreach (json_decode($this->order) as $item) {
            $price = $item->price;

            foreach ($item->selected_options as $option) {
                $price += $option->price;
            }

            $price *= $item->quantity;
            $subtotal += $price;
        }

        $tax = 0.00;
        $total = $subtotal + $tax;

        return money_format('$%i', $total);
    }
}
