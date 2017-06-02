<?php
// Implementing the adapter pattern through the interface paymentAdapter
class MpesaAdapter implements paymentAdapter{
    private $mpesa;

    public function __construct(Vehicle $mpesa){
        $this -> mpesa = $mpesa;
    }
    public function pay($amount){
        $this -> vehicle -> sendPayment($amount);
    }
}

$car = new MpesaAdapter(new Vehicle('30000', 'BMW X5'));
$car -> pay('50000')

?>