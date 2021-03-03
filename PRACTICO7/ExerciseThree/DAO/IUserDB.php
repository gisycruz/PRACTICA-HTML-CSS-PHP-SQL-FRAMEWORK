<?php 
namespace DAO;

use Models\User as User;

interface IUserDB{

    function getUsersName($UserName);
}
?>