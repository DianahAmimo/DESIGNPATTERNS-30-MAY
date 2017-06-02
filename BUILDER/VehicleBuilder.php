<?php

class VehicleBuilder extends Vehicle{
	private $no_of_wheels;
	private $origin;
	private $destination;

	private function __construct($no_of_wheels, $origin, $destination){
        $this -> no_of_wheels = $no_of_wheels;
        $this -> origin = $origin;
        $this -> destination = $destination;
    }

	function addWheels($no_of_wheels){
		return $this -> $no_of_wheels;
	}
	function addRoute($origin, $destination){
		return "The Journey is from " .$this -> $origin ."to" .$this -> $destination;
	}
	function addVehicleDetails(){
		"No of Wheels :" .$this -> addWheels($no_of_wheels) .$this -> addRoute($origin, $destination);
	}
	// Implementing the construct of the class Vehicle
	function VehicleDetails(){
		parent::getVehicleDetails();
		$this -> addVehicleDetails();
	}
}

$car = new Vehicle('X5', 'BMW', '01-06-2017', 30000);

echo $car -> getVehicleDetails();

$boosted_car = new VehicleBuilder();
$boosted_car -> addWheels(4);
$boosted_car -> addRoute('MSA', 'NRB');

echo $boosted_car -> $VehicleDetails();

?>