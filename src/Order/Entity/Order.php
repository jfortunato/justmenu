<?php namespace JustMenu\Order\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 */
class Order
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $phone_number;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $special_instructions;

    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $paymentmethod;

    /**
     * @var array
     */
    private $contents;


    public function total()
    {
        $subtotal = $total = 0;

        foreach (json_decode($this->contents) as $item) {
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

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Order
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set phone_number
     *
     * @param string $phoneNumber
     * @return Order
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phone_number = $phoneNumber;

        return $this;
    }

    /**
     * Get phone_number
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Order
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Order
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Order
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set special_instructions
     *
     * @param string $specialInstructions
     * @return Order
     */
    public function setSpecialInstructions($specialInstructions)
    {
        $this->special_instructions = $specialInstructions;

        return $this;
    }

    /**
     * Get special_instructions
     *
     * @return string 
     */
    public function getSpecialInstructions()
    {
        return $this->special_instructions;
    }

    /**
     * Set method
     *
     * @param string $method
     * @return Order
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return string 
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set paymentmethod
     *
     * @param string $paymentmethod
     * @return Order
     */
    public function setPaymentmethod($paymentmethod)
    {
        $this->paymentmethod = $paymentmethod;

        return $this;
    }

    /**
     * Get paymentmethod
     *
     * @return string 
     */
    public function getPaymentmethod()
    {
        return $this->paymentmethod;
    }

    /**
     * Set contents
     *
     * @param array $contents
     * @return Order
     */
    public function setContents($contents)
    {
        $this->contents = $contents;

        return $this;
    }

    /**
     * Get contents
     *
     * @return array 
     */
    public function getContents()
    {
        return $this->contents;
    }
}
