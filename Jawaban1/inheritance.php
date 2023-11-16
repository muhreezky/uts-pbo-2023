<?php
class Person
{
  protected $gender;
  protected $name;
  protected $birthDate;

  public function __construct($name, $gender, $birthDate)
  {
    $this->name = $name;
    $this->gender = $gender;
    $this->birthDate = $birthDate;
  }
}

// Class Mahasiswa mewarisi semua property dan method dari class Person
class Mahasiswa extends Person
{
  protected $nim;
  protected $prodi;
  protected $kampus;
  protected $ipk;

  public function __construct($name, $gender, $birthDate, $nim, $prodi, $kampus)
  {
    parent::__construct($name, $gender, $birthDate);
    $this->nim = $nim;
    $this->prodi = $prodi;
    $this->kampus = $kampus;
  }

  public function setIPK($ipk)
  {
    $this->ipk = $ipk;
  }

  public function getData()
  {
    return [
      'name' => $this->name,
      'gender' => $this->gender,
      'lahir' => $this->birthDate,
      'ipk' => $this->ipk,
      'prodi' => $this->prodi,
      'kampus' => $this->kampus
    ];
  }
}

$mhs = new Mahasiswa('Rizki', 'Laki-laki', '11-01-2004', '20220801341', 'Informatika', 'Esa Unggul');
$mhs->setIPK(3.5);

echo json_encode($mhs->getData());
