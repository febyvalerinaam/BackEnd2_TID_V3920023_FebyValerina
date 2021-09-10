<?php
class StartUp {
  public static $shopee=9.9;
  public function Promo() {
    return self::$shopee;
  }
}

$shopee = new StartUp();
echo $shopee->Promo();
?>