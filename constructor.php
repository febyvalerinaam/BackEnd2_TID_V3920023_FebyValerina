<?php
class StartUp {
  public $name;
  public $logocolor;

  function __construct($name, $logocolor) {
    $this->name = $name;
    $this->logocolor = $logocolor;
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->logocolor;
  }
}

$shopee = new StartUp("Shopee", "Orange");
echo $shopee->get_name();
echo "<br>";
echo $shopee->get_color();
?>
