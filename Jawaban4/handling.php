<?php 

function tambah($a, $b) {
  if (!is_numeric($a) || !is_numeric($b)) {
    throw new Exception('$a dan $b harus angka');
  }
  return $a + $b;
}

try 
{
  echo tambah(1, 3) . "\n";
  echo tambah(1, "a");
} 
catch (Exception $e) 
{
  echo 'Error : ' . $e->getMessage() . "\n";
}