<?php
// Interface definition
interface StartUp {
  public function makeJargon();
}

// Class definitions
class Shopee implements StartUp {
  public function makeJargon() {
    echo " Beli Semua Di Shopee ";
  }
}

class Tokopedia implements StartUp {
  public function makeJargon() {
    echo " Tokopedia Selalu Ada, Selalu Bisa ";
  }
}

class BukaLapak implements StartUp {
  public function makeJargon() {
    echo " Jual-Beli Online Mudah dan Terpercaya ";
  }
}

// Create a list of animals
$shopee = new Shopee();
$tokopedia = new Tokopedia();
$bukalapak = new BukaLapak();
$startup = array($shopee, $tokopedia, $bukalapak);

// Tell the animals to make a sound
foreach($startup as $startup) {
  $startup->makeJargon();
}
?>