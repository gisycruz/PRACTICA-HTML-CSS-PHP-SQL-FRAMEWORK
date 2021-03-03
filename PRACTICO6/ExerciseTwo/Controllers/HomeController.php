<?php
    namespace Controllers;

    use DAO\UserDAOjson as UserDAOjson;
    use Models\User as User;

    class HomeController
    {

        private $userDAOjson;

        public function __construct()
        {
            $this->userDAOjson = new UserDAOjson();
        }


        public function Index($message = "")
        {
            require_once(VIEWS_PATH."home.php");
        }  
        
        public function ShowViewsAddCellphone($message = "")
        {
            require_once(VIEWS_PATH."add-cellphone.php");
        }  

        public function login($name ,$password){

            $message ="";

           $user = $this->userDAOjson->getUserName($name);

           if($user == null){
              
            $message ="Incorrect Username !!";
              
            $this->Index($message);

           }
           elseif(isset($user)  && $user->getPassword() == $password)
           {
                $_SESSION['login'] = $user;

                $message = "Login successfull !!";

                $this->ShowViewsAddCellphone($message);

           }else{
                 
            $message = "incorrect password !!";

            $this->Index($message);

           }
    }


    public function signOff(){

        session_destroy();

         $message = "Closed session";

        $this->Index($message);
    }


}
?>