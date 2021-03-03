<?php 
namespace Repository;

use Repository\IBill as IBill;
use Model\Bill as Bill;
use Model\Item as Item;

class RepositoryBill implements IBill 
{
    private $listBill = array();
    private $fileName;

    public function __construct()
    {
        $this->fileName = dirname(__DIR__)."/Data/bills.json";
    }

    public function addItem(Bill $bill ,Item $item){
        $this->RetrieveData();
        
        foreach($this->listBill as $billValue){
            if(($billValue->getNumber() == $bill->getNumber()) && ($billValue->getType() == $bill->getType())){
                $billValue->setItems($item);
                $bill = $billValue;
            }
        }

        $this->SaveData();

        return $bill;  
    }
    public function beaschNumberBill($number,$type){
        $this->RetrieveData();
        $condition = NUll;
        foreach($this->listBill as $bill){
            if (($bill->getNumber() == $number) && ($bill->getType() == $type)){
                $condition = $bill;
            }
        }
        return $condition;
    }
    public function addBill(Bill $bill){
        $this->RetrieveData();
        array_push($this->listBill,$bill);
        $this->SaveData();
    }
    public function deleteBill($number,$type){
        $this->RetrieveData();
        $billarrayEliminar = array();
        $listNewBILL = array();
        foreach($this->listBill as $bill){
            if (($bill->getNumber() == $number) && ($bill->getType() == $type)){
                array_push($billarrayEliminar,$bill);
            }else {
                array_push($listNewBILL,$bill);
            }
        }
        $this->listBill = $listNewBILL;

         $this->SaveData();

    } 

    public function getAll(){
        $this->RetrieveData();
        return $this->listBill;
    }

    private function  SaveData(){
        
        $arrayToCode = array();

        foreach($this->listBill as $bill){
             $arrayValue['date'] = $bill->getDate();
             $arrayValue['type'] =$bill->getType();
             $arrayValue['number'] = $bill->getNumber();
             $arrayValue["items"] = array();

             foreach($bill->getItems() as $item){
                 $arrayValue['items'][] = array(
                     'name' => $item->getName(),
                     'description' => $item->getDescription(),
                     'quantity' => $item->getQuantity(),
                     'price' => $item->getPrice()
                 );
             }
             array_push($arrayToCode,$arrayValue);

        }
        $jsonContent = json_encode($arrayToCode,JSON_PRETTY_PRINT);

        file_put_contents($this->fileName ,$jsonContent);
         
    }

    private function RetrieveData(){

        $this->listBill = array();

        if(file_exists($this->fileName)){

            $jsonContent = file_get_contents($this->fileName);
            
            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent,true) : array();

            foreach($arrayToDecode as $arrayValue){

                $bill = new Bill();

                $bill->setDate($arrayValue['date']);
                $bill->setType($arrayValue['type']);
                $bill->setNumber($arrayValue['number']);

                
                foreach($arrayValue['items'] as $itemValue){
                $item = new Item();
                $item->setName($itemValue["name"]);
                $item->setDescription($itemValue["description"]);
                $item->setQuantity($itemValue["quantity"]);
                $item->setPrice($itemValue["price"]);

                $bill->setItems($item);
               
                
            }
                array_push($this->listBill ,$bill);
            }
        }
    }

}



?>