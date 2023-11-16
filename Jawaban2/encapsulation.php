<?php
  class Orang {
    private $nama;
    private $gender;

    public function __construct($nama, $gender)
    {
      $this->nama = $nama;
      $this->gender = $gender;
    }

    public function getData() {
      return [
        'nama' => $this->nama,
        'kelamin' => $this->gender
      ];
    }
  }

  $orang = new Orang('Rizki', 'L');
  
  // Kode ini berjalan dengan baik
  echo json_encode($orang->getData());

  // Kode ini akan error karena mencoba akses private property
  echo $orang->nama;
?>