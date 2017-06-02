<?php

class Vehicle{
    private $amount;
    private $description;
    
    private function __construct($amount, $description){
        $this -> name = $amount;
        $this -> model = $description;
    }
    private function cost(){
        return $this -> $amount;
    }
    private function description(){
        return $this -> $description;
    }
    // Sending payment to the seller of the vehicle after buying
    private function sendPayment($amount){
        echo "Paying via M-Pesa: ". $amount;
    }
}

//Interface for each Adapter created
interface paymentAdapter {
    public function pay($amount);
}

?>