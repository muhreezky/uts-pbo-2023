<?php

interface Kendaraan {
  public function klakson ();
}

class Mobil implements Kendaraan {
  public function klakson() {
    echo "Tin!!!\n";
  }
}

class Motor implements Kendaraan {
  public function klakson() {
    echo "Bim!!!\n";
  }
}

$motor = new Motor();
$mobil = new Mobil();

$mobil->klakson(); // Tin!!!
$motor->klakson(); // Bim!!!