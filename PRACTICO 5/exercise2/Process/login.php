<?php  
namespace process;
include_once "../Config/Autoload.php";
use Models\User as User;

$arrayUser = array();

	$user1 = new User("SSoler", "cosme1234","Sebastian", "Soler","sebastian@utn.com");
	$user2 = new User("AzarJ","alAzar123","Juan","Azar","juan_azar@utn.com");
	$user3 = new User("Mari123","123456Mari","Maria","Perez","mariap@utn.com");

array_push($arrayUser,$user1);
array_push($arrayUser,$user2);
array_push($arrayUser,$user3);


if($_POST){
	$username = $_POST['name'];
	$password =$_POST['password'];


 $loginUser = NULL;
	foreach($arrayUser as $user){
       if($user->getUserName() == $username &&  $user->getPassword() == $password){
           $loginUser = $user;
		   
	   }
			  
	}
   
	if($loginUser != NULL){
		
		session_start();

		$_SESSION['loggin'] = $loginUser;

		header("location:../welcomeUser.php");
	}else{
		
		header("location:../index.php");
		
	}
}
?>