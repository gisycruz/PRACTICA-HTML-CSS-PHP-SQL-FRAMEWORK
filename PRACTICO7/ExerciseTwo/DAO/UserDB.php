<?php 
namespace DAO;

use Models\User as User;
use DAO\Connection as Connection;
use DAO\IUserDB as IUserDB;

class UserDB implements IUserDB{

    private $connection;
    private $tableName ="user";

    public function getUsersName($UserName){

        $user = null;

        $query ="SELECT username , password FROM ".$this->tableName ." WHERE (username = :username)";

        $parameters['username'] = $UserName;

        try{

        $this->connection = Connection::GetInstance();

        $results = $this->connection->Execute($query,$parameters);

        } catch (Exception $ex) {

        throw $ex;

         }

        foreach($results as $result){

            $user = new User();

            $user->setUserName($result['username']);
            $user->setPassword($result['password']);
        }

        return $user;
    }


}

?>