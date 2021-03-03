<?php 
namespace DAO;

use Models\Cellphone as Cellphone;
use DAO\ICellphone as ICellphone;

class CellphoneDAOjson implements ICellphone{

    private $fileName;
    private $listCellphone = array();
    

    public function __construct()
    {
        $this->fileName = ROOT ."Data/Cellphone.json";
    }

    private function GetNextId()
    {
        $id = 0;

        foreach($this->listCellphone as $cellphone)
        {
            $id = ($cellphone->getId() > $id) ? $cellphone->getId() : $id;
        }

        return $id + 1;
    }

    public function addCellphone(Cellphone $cellphone){

        $this->RetrieveData();

     $cellphone->setId($this->GetNextId());

        array_push($this->listCellphone,$cellphone);

        $this->SaveData();
    }

    public function GetAllCellphone(){

        $this->RetrieveData();

        return $this->listCellphone;
    }

    public function deleteCellphone($id){

        $this->RetrieveData();

		$newList = array();

		foreach($this->listCellphone as $cellphone ) {
			if( $cellphone->getId() != $id){
				array_push($newList,$cellphone);
			}
		}
		$this->listCellphone = $newList;

		$this->SaveData();
    }

    function modifyCellphone($id,$code,$brand,$model,$price){

        $this->RetrieveData();

		$newList = array();

		foreach($this->listCellphone as $cellphone){

			if($cellphone->getId()!= $id){

				array_push($newList,$cellphone);

            }else{
                $cellphone->setCode($code);
                $cellphone->setBrand($brand);
                $cellphone->setModel($model);
                $cellphone->setPrice($price);
                
                array_push($newList,$cellphone);
            }
		}

		$this->listCellphone = $newList;

		$this->SaveData();
    }
    
 private function SaveData()
    {
        $arrayToEncode = array();

        foreach($this->listCellphone as $cellphone)
        {
            $valuesArray["id"] = $cellphone->getId();
            $valuesArray["code"] = $cellphone->getCode();
            $valuesArray["brand"] = $cellphone->getBrand();
            $valuesArray["model"] = $cellphone->getModel();
            $valuesArray["price"] = $cellphone->getPrice();
        

            array_push($arrayToEncode, $valuesArray);
        }

        $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
        
        file_put_contents($this->fileName, $jsonContent);
    }

    private function RetrieveData()
    {
        $this->listCellphone = array();

        if(file_exists($this->fileName))
        {
            $jsonContent = file_get_contents($this->fileName);

            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

            foreach($arrayToDecode as $valuesArray)
            {
                $cellphone = new Cellphone();
                $cellphone->setId($valuesArray["id"]);
                $cellphone->setCode($valuesArray["code"]);
                $cellphone->setBrand($valuesArray["brand"]);
                $cellphone->setModel($valuesArray["model"]);
                $cellphone->setPrice($valuesArray["price"]);
               

                array_push($this->listCellphone,$cellphone);
            }
        }
    }
       
}

?>