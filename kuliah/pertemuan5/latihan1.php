<?php

// 1. membuat array
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
$bulan = ["Januari", "Februari", "Maret"];
$mahasiswa = ["Chandra", 2.5, true];

// 2. mencetak isi array
//  Mencetak 1 elemen pada array, menggunakan index

echo $hari[2];
echo "<br>";
echo $bulan[0];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";

// mencetak seluruh isi array , digunakan khusus debugging
// var_dum() atau print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<hr>";


// 3.  memanipulasi isi array
// menambah isi array 
//di akhir array: [] atau array_push()
$hari[] = "dudung";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei", "Juni");
print_r($bulan);
echo "<br>";

// Di awal array: array_unshift()
array_unshift($mahasiswa, "233040089");
print_r($mahasiswa);
echo "<hr>";


// 4. menghapus isi array
// di akhir: array_pop()
// di awal: array_shift()

array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);
?>