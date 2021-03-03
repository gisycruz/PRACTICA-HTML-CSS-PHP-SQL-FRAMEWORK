<?php 
namespace Repository;

use Model\Bill as Bill;
use Model\Item as Item;
interface IBill{

    function addBill(Bill $bill);
    function addItem(Bill $bill ,Item $item);
    function deleteBill($number,$type);
    function getAll();
}



?>