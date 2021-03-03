<?php 
namespace Repository;

use Model\Client as Client;

interface IClient{
    function addClient(Client $client);
    function getAllClient();

}
?>