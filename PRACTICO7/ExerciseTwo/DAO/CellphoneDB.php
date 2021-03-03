<?php 
namespace DAO;

use DAO\ICellphoneDB as ICellphoneDB;
use DAO\Connection as Connection;
use Models\Cellphone as Cellphone;

class CellphoneDB implements ICellphoneDB{

    private $connection;
    private $tableName ="cellphone";
   

    public function addCellphone(Cellphone $cellphone){

        $query ="INSERT INTO ".$this->tableName ." (code , brand , model , price ) value (:code,:brand,:model,:price)";

        $parameters['code'] = $cellphone->getCode();
        $parameters['brand'] = $cellphone->getBrand();
        $parameters['model'] = $cellphone->getModel();
        $parameters['price'] =$cellphone->getPrice();

        try{

            $this->connection = Connection::GetInstance();

           return  $this->connection->ExecuteNonQuery($query, $parameters);

        }catch(Exception $ex){
            
            throw $ex;
        }

    }
    
    public function getAllCellphone(){

        $listCellphone = array();

        $query = "SELECT idcellphone ,code ,brand,model,price FROM " . $this->tableName ;

        try {

            $this->connection = Connection::GetInstance();

            $result = $this->connection->Execute($query);

        } catch (Exception $ex) {
            throw $ex;
        }

            foreach($result as $p){
          
           $cellphone = new Cellphone();
            $cellphone->setId($p['idcellphone']);
            $cellphone->setCode($p['code']);
            $cellphone->setBrand($p['brand']);
            $cellphone->setModel($p['model']);
            $cellphone->setPrice($p['price']);

           array_push($listCellphone,$cellphone);
            }

        return $listCellphone;

    }
    function deleteCellphone($id){

        $query = "DELETE FROM ".$this->tableName . " WHERE (idcellphone = :id)";

        $parameters['id'] = $id;

        try{

            $this->connection = Connection::GetInstance();

           return  $this->connection->ExecuteNonQuery($query, $parameters);

        }catch(Exception $ex){
            
            throw $ex;
        }

        
    }

}
?>