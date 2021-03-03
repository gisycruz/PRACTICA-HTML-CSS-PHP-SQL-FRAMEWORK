<?php 
namespace model;

class Item{

    
    private $name;
    private $description;
    private $price;
    private $quantity;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
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

    public function subTotal(){
        
        $subtotal = 0.0;
        $subtotal = $this->getPrice() * $this->getQuantity();
  
        return $subtotal;
      }

     
}


?>