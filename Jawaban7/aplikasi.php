<?php
# Menginclude modul dari koneksi.php di folder Jawaban6
include __DIR__ . "/../Jawaban6/koneksi.php";

$createTable = "
  CREATE TABLE IF NOT EXISTS `users` (
    `id` INT(9) AUTO_INCREMENT PRIMARY KEY,
    `nama` VARCHAR(150) NOT NULL,
    `email` VARCHAR(150) NOT NULL,
    `password` VARCHAR(150) NOT NULL
  );
";

if ($conn->query($createTable) === TRUE) {
  echo "Tabel users Berhasil Dibuat";
} else {
  echo "Tidak dapat membuat table users";
}

$query = "INSERT INTO `users` (`nama`, `email`, `password`) VALUES ('Rizki', 'rizki@mail.com', 'test.1234');";

if ($conn->query($query) === TRUE) {
  echo "Data baru ditambahkan ke table users";
} else {
  echo "Tidak dapat insert data";
}


?>