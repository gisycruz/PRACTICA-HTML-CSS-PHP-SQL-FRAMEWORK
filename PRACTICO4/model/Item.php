<?php 
namespace model;

class Item{

    private $name;
    private $discription;
    private $price;
    private $quantity;

    public function __construct()
    {
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getDiscription()
    {
        return $this->discription;
    }
    public function setDiscription($discription)
    {
        $this->discription = $discription;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}


?>