<!DOCTYPE html>
<html>
<body bgcolor="azure">
  <h1>Erina Skincare</h1>
  <h2>Pricelist Skincare</h2>

<?php
  class PricelistSkincare{
  public $name;
  protected $harga;
  private $ukuran;
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
    function set_harga($harga) {
    $this->harga = $harga;
  }
  function get_harga() {
    return $this->harga;
  }

}



$Cleanser = new PricelistSkincare();
$Toner = new PricelistSkincare();
$Serum = new PricelistSkincare();
$Moisturizer = new PricelistSkincare();
$Sunscreen = new PricelistSkincare();
$Cleanser->set_name('Cleanser : '); $Cleanser->set_harga('Rp.25.000');
$Toner->set_name('Toner : '); $Toner->set_harga('Rp.100.000');
$Serum->set_name('Serum : '); $Serum->set_harga('Rp.150.000');
$Moisturizer->set_name('Moisturizer : '); $Moisturizer->set_harga('Rp.85.000');
$Sunscreen->set_name('Sunscreen : '); $Sunscreen->set_harga('Rp.65.000');

echo $Cleanser->get_name();
echo $Cleanser->get_harga();
echo "<br>";
echo $Toner->get_name();
echo $Toner->get_harga();
echo "<br>";
echo $Serum->get_name();
echo $Serum->get_harga();
echo "<br>";
echo $Moisturizer->get_name();
echo $Moisturizer->get_harga();
echo "<br>";
echo $Sunscreen->get_name();
echo $Sunscreen->get_harga();
echo "<br>";

class MakeUp extends PricelistSkincare{
  public function message(){
    echo "Erina Skincare, Care For Your Skin";
  }
}
$makeup = new MakeUp("Alat Dandan", "Affordable");  // OK. __construct() is public
$makeup->message(); // OK. message() is public
?>

<h3>Pricelist MakeUp</h3>
<?php
interface Pricelist{
public function __construct($name, $harga);

}
class PricelistMakeUp implements Pricelist {
  public $name;
  public $harga;
  public static function Order(){}
  public static $value = "Text via instagram";
  function __construct($name, $harga) {
    $this->name = $name;
    $this->harga = $harga;
  }
  function __destruct() {
    echo "{$this->name} = {$this->harga}.";
  }
}
echo $bedak = "Bedak = Rp.150.000"; echo "<br>";
echo $Lipstick = "Lipstick = Rp.80.000"; echo "<br>";
echo $Mascara = "Mascara = Rp.75.000"; echo "<br>";
echo "SILAHKAN DIPESAN"; echo "<br>";
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

?>
</body>
</html>

