<<?php 

class NewVehicle extends Vehicle{
	private function cost(){
		// Extending the functionality of the function cost()
		return $this -> vehicle -> cost() + 500;
	}
	private function description(){
		return $this -> vehicle -> description() .", Made in Kenya";
	}
}

$car = new Vehicle(30000, 'BMW X5');
$newCar = new NewVehicle();
// Before decorator class
echo $car -> cost();
echo $car -> description();
// After decorator class
echo $newCar -> cost();
echo $newCar -> description();

 ?>