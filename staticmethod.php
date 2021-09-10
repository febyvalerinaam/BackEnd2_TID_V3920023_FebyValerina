<?php
class StartUp {
  public static function introduction() {
    echo "Halo Gen Z!";
  }

  public function __construct() {
    self::introduction();
  }
}

new StartUp();
?>