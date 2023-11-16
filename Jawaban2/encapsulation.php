<?php
  class Buku {
    /**
     * Dalam class, kita dapat mengatur akses terhadap data dan method
     * Inilah yang disebut sebagai encapsulation
     * Di dalam class, property dan method yang dapat diakses adalah yang bersifat public
     * Property dan method yang bersifat private, tidak bisa diakses langsung dari luar class
     */
    private $isbn;
    private $judul;
    private $harga;

    public function __construct($judul, $harga, $isbn)
    {
      $this->judul = $judul;
      $this->harga = $harga;
      $this->isbn = $isbn;
    }

    public function getBookData() {
      return [
        'Judul' => $this->judul,
        'Harga' => $this->harga,
        'ISBN' => $this->isbn
      ];
    }

    public function getHarga() {
      return 'Harga = ' . $this->harga;
    }
  }

  $buku = new Buku('Laskar Pelangi', '35000', '123958276301');

  // Code ini berjalan dengan baik karena memanggil method public
  echo $buku->getHarga();

  // Ini akan menghasilkan error karena mencoba akses properti private
  echo $buku->harga; 
?>