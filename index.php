<?php
//mengoutpukan string ke layar
echo "Hello, World";

//deklrasi variabel dalam php
$nama =  "Amat Temola";
$nama2 =  "Amax Jamping";



echo "<br>"; //break
//menampilkan tipe data dan isi dari variabel
var_dump($nama);

echo "<br>"; //break

//menggabungkan variabel dengan string
echo "hello ". $nama . " dan " . $nama2; 

?>

<!-- html di dalam php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php day-1</title>
</head>
<body>
<!-- memanggil variabel php di dalam html -->
    <h1> Selamat datang di web sederhana</h1>
    <h1> Halo <?php echo $nama; ?></h1>
</body>
</html>