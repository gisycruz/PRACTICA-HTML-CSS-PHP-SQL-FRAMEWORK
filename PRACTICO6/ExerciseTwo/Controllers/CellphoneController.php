<?php 
namespace Controllers;

use DAO\CellphoneDAOjson as CellphoneDAOjson;
use Models\Cellphone as Cellphone;

class CellPhoneController{

    private $cellphoneDAOjson;
    

    public function __construct()
    {
        $this->cellphoneDAOjson= new CellphoneDAOjson();
    }


     function ShowViewsList($message =""){

        $arrayCellphone = $this->cellphoneDAOjson->GetAllCellphone();

        require_once(VIEWS_PATH."cellphone-list.php");

     }
     function ShowViewsAdd($message =""){

        require_once(VIEWS_PATH."add-cellphone.php");
    }

    function add($code,$brand,$model,$price){
       
            $message = "";
            $cellphone = new Cellphone();
            $cellphone->setCode($code);
            $cellphone->setBrand($brand);
            $cellphone->setModel($model);
            $cellphone->setPrice($price);

            $this->cellphoneDAOjson->addCellphone($cellphone);

            $message = "se agrego un nuevo telefono ";
            
           $this->ShowViewsAdd($message);
    }

    function delete($id){ 

       $this->cellphoneDAOjson->deleteCellphone($id);

        $message = "sea eliminado correctamente de la lista ";

        $this->ShowViewsList($message);

    }
    

}

?>