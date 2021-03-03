<?php 

namespace Models;

use Models\Ship as Ship;

class Cruiser extends Ship{
    
    private $capacity;

    public function __construct()
    {
        
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

    }

    public function toString()
    {
      echo  '<br> ......transport...... <br> Name : '.$this->getName() .'<br> Maritimo:  Max Knots '. $this->getMaxKnots() .' <br> Ship : PropelQuantity  '. $this->getPropelQuantity() .'<br> Cruiser : Capacity '. $this->getCapacity();
    }
}


?>