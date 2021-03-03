<?php


namespace Models;

use Models\Ship as Ship;

class BattleShip extends Ship{

    private $armament;

    public function __construct()
    {
       
    }

    public function getArmament()
    {
        return $this->armament;
    }

    public function setArmament($armament)
    {
        $this->armament = $armament;
    }

    public function toString()
    {
      echo  '<br> ......transport...... <br> Name : '.$this->getName() .'<br> Maritimo:  Max Knots '. $this->getMaxKnots() .' <br> Ship : PropelQuantity  '. $this->getPropelQuantity() .'<br> BattleShip : Armament '. $this->getArmament();
    }
}
?>