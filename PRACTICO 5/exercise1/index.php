<?php 

include_once "Config/Autoload.php";

use Models\Cruiser as Cruiser;
use Models\BattleShip as BattleShip;
use Models\Airplane as Airplane;
$cruiser1 = new Cruiser();

$cruiser1->setName("Anamora");
$cruiser1->setCapacity(23);
$cruiser1->setPropelQuantity(500);
$cruiser1->setMaxKnots(600);

$cruiser2 = new Cruiser();
$cruiser2->setName("vello");
$cruiser2->setCapacity(50);
$cruiser2->setPropelQuantity(400);
$cruiser2->setMaxKnots(700);

$battleShip1 = new BattleShip();
$battleShip1->setName("bathes");
$battleShip1->setArmament("balas");
$battleShip1->setPropelQuantity(500);
$battleShip1->setMaxKnots(600);

$airPlane1 = new AirPlane();

$airPlane1->setName("gol");
$airPlane1->setEngineQuantity(500);
$airPlane1->setCapacity(600);

$airPlane2 = new AirPlane();

$airPlane2->setName("polo");
$airPlane2->setEngineQuantity(5000);
$airPlane2->setCapacity(60);

$arrayTranspot = array();
array_push($arrayTranspot,$airPlane2);
array_push($arrayTranspot,$cruiser1);
array_push($arrayTranspot,$battleShip1);
array_push($arrayTranspot,$cruiser2);
array_push($arrayTranspot,$airPlane1);

foreach($arrayTranspot as $transport){

    $transport->toString();
}
    ?>