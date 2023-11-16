<?php
class Bapak {
  public function foo () {
    echo "Hallo";
  }
}

class Anak extends Bapak {
  public function bar () {
    echo "Saya adalah turunan class Bapak";
  }
}

$anak = new Anak();
$anak->bar();

?>