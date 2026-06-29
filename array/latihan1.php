<?php
//array adalah variabel yang dapat menyimpan banyak nilai.

//cara membuat array || cara lama
$hari = array("senin","selasa","rabu");

//cara membuat array || cara baru
$bulan = ["Januari","Februari","Maret"];

//array bisa menampung atau menyimpan tipe nilai data yang berbeda sekaligus
$array1 =["satu", 2, false];

//cara menampilkan sebuah array
//vardump() || printr_r
echo "<h1>menampilkan array menggunakan var_dump()</h1>";
var_dump($hari);

echo "<h1>menampilkan array menggunakan print_r()</h1>";
print_r($bulan); echo "<br>";
print_r($array1);

echo "<h1>menampilkan array menggunakan perulangan</h1>";
$bulan2 = ["Januari","Februari","Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November","Desember"];
$i = 0;
while($i < count($bulan2)){
    echo "Isi array Bulan ke- $i " . $bulan2[$i]. "<br>";
    $i++;
}

?>