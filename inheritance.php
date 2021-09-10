<?php
class StartUp {
  public $name;
  public $logocolor;
  public function __construct($name, $logocolor) {
    $this->name = $name;
    $this->logocolor = $logocolor;
  }
  protected function intro() {
    echo "Nama StartUp adalah {$this->name} dan warna logonya yaitu {$this->logocolor}.";
  }
}

class Shopee extends StartUp {
  public function message() {
    echo "Apakah Shopee adalah StartUp?";
  }
}

// Try to call all three methods from outside class
$shopee = new Shopee("Shopee", "Orange");  // OK. __construct() is public
$shopee->message(); // OK. message() is public
$shopee->intro(); // ERROR. intro() is protected
?>
