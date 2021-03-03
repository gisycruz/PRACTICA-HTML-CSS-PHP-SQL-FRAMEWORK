<?php 
namespace Controllers;

use DAO\CellphoneDB as CellphoneDB;
use Models\Cellphone as Cellphone;


class CellphoneController{

    private $cellphoneDB;
   

    public function __construct()
    {
        $this->cellphoneDB = new CellphoneDB();
    }


    public function ShowViewsListCellphone($message = ""){

       
        require_once(VIEWS_PATH."validate-session.php");
        
        $listCellphone = $this->cellphoneDB->getAllCellphone();
        
        
        require_once(VIEWS_PATH ."cellphone-list.php");
    }

    public function ShowViewsAddCellphone($message = ""){

       
        require_once(VIEWS_PATH."validate-session.php");
        
        require_once(VIEWS_PATH ."add-cellphone.php");
    }

    public function add($code,$brand,$model,$price){

           $cellphone = new Cellphone();
           $cellphone->setCode($code);
           $cellphone->setBrand($brand);
           $cellphone->setModel($model);
           $cellphone->setPrice($price);

           $this->cellphoneDB->addCellphone($cellphone);

           $message = "Cellphone add!!!";

           $this->ShowViewsAddCellphone($message);
    }

    public function delete($idcellphone){

        $this->cellphoneDB->deleteCellphone($idcellphone);
       
        $message = "delete correct";

        $this->ShowViewsListCellphone($message);
    }
}

?>