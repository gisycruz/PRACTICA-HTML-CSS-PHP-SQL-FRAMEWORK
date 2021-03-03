<?php 
namespace DAO;

use Models\Cellphone as Cellphone;

interface ICellphoneDB {

    function addCellphone(Cellphone $cellphone);
    function deleteCellphone($id);
    function getAllCellphone();
}

?>