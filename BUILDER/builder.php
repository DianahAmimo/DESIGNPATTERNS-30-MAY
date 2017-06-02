<?php 

class Vehicle{
    private $name;
    private $model;
    private $date_purchased;
    private $price;

    private function __construct($name, $model, $date_purchased, $price){
        $this -> name = $name;
        $this -> model = $model;
        $this -> date_purchased = $date_purchased;
        $this -> price = $price;
    }

    public function getName(){
        return $this -> $name;
    }
    
    public function getModel(){
        return $this -> $model;
    }
    
    public function getDate(){
        return $this -> $date_purchased;
    }
    
    public function getPrice(){
        return $this -> $price;
    }

    public function getVehicleDetails(){
        return "Vehicle Deatails
            <br/>Name :" .$this -> getName() .
            "<br/>Model :" .$this -> getModel() .
            "<br/>Purchase Date :" .$this -> getDate() .
            "<br/>Price :" .$this -> getPrice() ;
    }
}

?>