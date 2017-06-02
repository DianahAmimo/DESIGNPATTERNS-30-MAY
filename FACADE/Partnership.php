<?php 

class Partnership{
    function parking($partner_name, $parking_place, $parking_fee){
        return $this -> $partner_name ."-". $this -> $parking_place ."-". $this -> $parking_fee;
}

$business = new Business();
$partnership = new Partnership();

$car = new Vehicle('X5', 'BMW', '01-06-2017', 30000);
echo $car -> getVehicleDetails();
// Hiding the complexity of the system by calling the operations function
$car -> operations('Kalembe', 30000, 'John', 'City Square', 1500);

?>