<?php
require_once "Player.php";

define("DB_HOST","localhost");
define("DB_NAME","players");
define("DB_USER","root");
define("DB_PASS","");

$player1 = new Player("23","gisela","cruz","giselamarcela@hotmail.com",24);
$player2 = new Player("24","oriana","cruz","orianacruz@hotmail.com",56);
$player3 = new Player("25","monica","medina","monicamedina@hotmail.com",60);
$player4 = new Player("26","jorge","cruz","jorgecruz@hotmail.com",40);
$player5 = new Player("27","hernan","cruz","hernancruz@hotmail.com",90);

$listPlayer= array();

array_push($listPlayer,$player1);
array_push($listPlayer,$player2);
array_push($listPlayer,$player3);
array_push($listPlayer,$player4);
array_push($listPlayer,$player5);
try{
    $pdo = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
 
//insert
 $insertStatement = $pdo->prepare("INSERT INTO player (codeplayer ,firstname,lastname,email,hoursplayer)
  value (:codeplayer,:firstname,:lastname,:email,:hoursplayer)"); 
  
  var_dump($listPlayer);

  foreach($listPlayer as $player){


      $codeplayer = $player->getCodePlayer();
      $firstname =$player->getFirstName();
      $lastname =$player->getLastName();
      $email= $player->getEmail();
      $hoursplayer=$player->getHoursPlayer();


      $insertStatement->bindParam(":codeplayer",$codeplayer);
      $insertStatement->bindParam(":firstname",$firstname);
      $insertStatement->bindParam(":lastname",$lastname);
      $insertStatement->bindParam(":email",$email);
      $insertStatement->bindParam(":hoursplayer",$hoursplayer);

      $insertStatement->execute();

  }

 

//getALL

$selecStatement = $pdo->prepare("SELECT codeplayer, firstname, lastname, email,hoursplayer FROM player");

$selecStatement->execute();

$result = $selecStatement->fetchAll();

echo "Showing List add:<br>";

        foreach($result as $row)
        {
    echo $row["codeplayer"]." ".$row["firstname"]. " ".$row["lastname"]." ".$row["email"]." ".$row["hoursplayer"]."<br>";
        }
//delete

$deleteStatement = $pdo->prepare(" DELETE FROM player WHERE (codeplayer = :codeplayer)");


$code = "25";

$deleteStatement->bindParam(":codeplayer",$code);


$deleteStatement->execute();


$selecStatement = $pdo->prepare("SELECT codeplayer, firstname, lastname, email,hoursplayer FROM player");

$selecStatement->execute();

$resultDelete = $selecStatement->fetchAll();



echo "Showing List delete:<br>";

        foreach($resultDelete as $row)
        {
    echo $row["codeplayer"]." ".$row["firstname"]. " ".$row["lastname"]." ".$row["email"]." ".$row["hoursplayer"]."<br>";
        }


//modify

$modifyStatement = $pdo->prepare(" UPDATE player SET firstname = :firstname WHERE codeplayer = :codeplayer");

$code ="27";

$name ="walter";
$modifyStatement->bindParam(":codeplayer",$code);
$modifyStatement->bindParam(":firstname",$name);

$modifyStatement->execute();


$selecStatement = $pdo->prepare("SELECT codeplayer, firstname, lastname, email,hoursplayer FROM player");

$selecStatement->execute();

$resultmodify = $selecStatement->fetchAll();



echo "Showing List  modify:<br>";

        foreach($resultmodify as $row)
        {
    echo $row["codeplayer"]." ".$row["firstname"]. " ".$row["lastname"]." ".$row["email"]." ".$row["hoursplayer"]."<br>";
        }







}catch(PDOException $ex){
    echo $ex->getMessage();
}
?>