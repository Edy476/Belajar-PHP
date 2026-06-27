<?php
//perkondisian atau percabangan
//if else
//if else if else
//ternary
//switch

echo "<h1> perkondisian if else, else if</h1>";
$x = 20;

if ($x < 20){
    echo "x kurang dari 20";
    } elseif ($x == 20){
        echo "x sama dengan 20";
        } else {
            echo "x lebih dari 20";
            }
            
echo "<h1> perkondisian ternary</h1>";
echo "<br>";
//ternary
$t = 2;
echo ($t < 10) ? "hasil benar <br>" : "hasil salah <br>";

//ternary v2 dengan memasukkan kedalam variabel baru
$hasil = ($t < 10) ? "hasil benar <br>" : "hasil salah <br>";
echo $hasil;

echo "<h1> perkondisian switch-case </h1>";
$lampu = "merah";
echo "lampu = " . $lampu. "<br>";

switch($lampu){
    case "merah":
        echo "berhenti <br>";
        break;
    case "kuning":
        echo "bersiap-siap <br>";
        break;
    case "hijau":
        echo "silahkan jalan! <br>";
        break;
    default:
        echo "warna engga tau <br>";
        break;
}

?>
