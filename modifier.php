<?php
class StartUp {
  public $name;
  public $logocolor;
  public $payment;

  function set_name($name) {  
    $this->name = $name;
  }
  protected function set_logocolor($logocolor) { 
    $this->logocolor = $logocolor;
  }
  private function set_payment($payment) { 
    $this->payment = $payment;
  }
}

$shopee = new StartUp();
$shopee->set_name('Shopee'); // OK
$shopee->set_logocolor('Orange'); // ERROR
$shopee->set_payment('ShopeePay'); // ERROR
?>