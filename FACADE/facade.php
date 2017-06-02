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

    public function details(){
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

    public function operations($customer, $lending_fee, $partner_name, $parking_place, $parking_fee){
        $this -> business -> lend($customer, $lending_fee);
        $this -> partnership -> parking($partner_name, $parking_place, $parking_fee);
    }
}

?>