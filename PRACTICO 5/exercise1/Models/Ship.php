<?php 

namespace Models;

use Models\Maritime as Maritime;

 abstract class Ship extends Maritime{

    private $propelQuantity;

    
    public function getPropelQuantity()
    {
        return $this->propelQuantity;
    }

   
    public function setPropelQuantity($propelQuantity)
    {
        $this->propelQuantity = $propelQuantity;

    }

    public function toString()
    {
      echo  '<br> ......transport...... <br> Name : '.$this->getName() .'<br> Maritimo:  Max Knots '. $this->getMaxKnots() .' <br> Ship : PropelQuantity  '. $this->getPropelQuantity() .'<br> Cruiser : Capacity '. $this->getCapacity();
    }
}

?>