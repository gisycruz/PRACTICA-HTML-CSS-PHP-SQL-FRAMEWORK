<?php 

namespace Models;

use Models\Aerial as Aerial;

class Airplane extends Aerial{

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
      echo  '<br> ......transport...... <br> Name : '. $this->getName() .'<br> Aerial:  engineQuantity '. $this->getEngineQuantity() . "<br> Airplane : Capacity " . $this->getCapacity() ."<br>";
    }
}
?>