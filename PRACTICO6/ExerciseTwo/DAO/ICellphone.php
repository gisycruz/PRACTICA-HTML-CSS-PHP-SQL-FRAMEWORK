<?php 
namespace DAO;

use Models\Cellphone as Cellphone;

interface ICellphone{

    function addCellphone(Cellphone $cellphone);
    function GetAllCellphone();
    function deleteCellphone($id);
    function modifyCellphone($id,$code,$brand,$model,$price);

}
?>