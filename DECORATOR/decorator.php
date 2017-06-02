<?php

class Vehicle{
	private $price;
    private $description;
    
	private function __construct($price, $description){
        $this -> name = $price;
        $this -> model = $description;
    }
	private function cost(){
		return $this -> $price;
	}
	private function description(){
		return $this -> $description;
	}
}

?>
