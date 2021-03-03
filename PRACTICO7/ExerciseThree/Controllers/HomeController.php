<?php
    namespace Controllers;

    use DAO\UserDB as UserDB;
    use Models\User as User;

    class HomeController
    {
        private $userDB;

        public function __construct()
        {
           $this->userDB = new UserDB();
        }

        public function Index($message = "")
        {
            require_once(VIEWS_PATH."home.php");
        }


        public function ShowViewsAddCellphone($message =""){
            
            require_once(VIEWS_PATH."validate-session.php");
            
            require_once(VIEWS_PATH."add-cellphone.php");
            

        }


        public function login($username , $password){
            

           $userNew = $this->userDB->getUsersName($username);

           if($userNew != null ){

                 if($userNew->getPassword() === $password){

                    $_SESSION['login'] = $userNew;
                   
                    $message = "welcome, add cellphone!!";

                    $this->ShowViewsAddCellphone($message);


                 }else{
                     $message = "Incorrect Password";

                     $this->Index($message);
                 }

           }else{

            $message = "Incorrect UserName";
            
            $this->Index($message);
           }
        }

        public function SingLogin(){

            session_destroy();

            $message = "Close session ";

            $this->Index($message);
        }
    }
?>