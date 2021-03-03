<?php 
namespace model;
use Model\Item as Item;
class Bill{

    private $date;
    private $type;
    private $number;
    private $items;

    public function __construct()
    {
        $this->items = array();
    }
    
    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;

       
    }
    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type; 
    }
    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
       
    }


    public function getItems()
    {
        return $this->items;
    }


    public function setItems($item)
    {
        if(isset($item)){
            array_push($this->items,$item);
        }

    }

    public function TotalBill(){
        $total = 0.0;
        if(!empty($this->getItems())){
            foreach($this->getItems() as $item){
                 $total = $total + $item->subTotal();
                
            }
        }
        return $total;
    }
    
}


?>