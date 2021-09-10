<?php
class StartUp {
  
  public $name;
  public $logocolor;

  
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($logocolor) {
    $this->logocolor = $logocolor;
  }
  function get_color() {
    return $this->logocolor;
  }
}

$shopee = new StartUp();
$shopee->set_name('Shopee');
$shopee->set_color('Orange');
echo "Name: " . $shopee->get_name();
echo "<br>";
echo "Logo Color: " . $shopee->get_color();

?>
