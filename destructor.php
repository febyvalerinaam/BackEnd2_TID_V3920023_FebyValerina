<?php
class StartUp {
  public $name;
  public $logocolor;

  function __construct($name, $logocolor) {
    $this->name = $name;
    $this->logocolor = $logocolor;
  }
  function __destruct() {
    echo "Nama StartUp adalah {$this->name} dan warna logonya yaitu {$this->logocolor}.";
  }
}

$shopee = new StartUp("Shopee", "Orange");
?>