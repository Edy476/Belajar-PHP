<?php
date_default_timezone_set("Asia/Jakarta");
echo "<h1>FUNCTION DATE</h1>";
echo "today is " . date("l, d-m-Y");

echo "<h1>FUNCTION TIME</h1>";
echo "Time Today is ". date("H:i:s");
?>

<?php

function salam(){
    $waktu = (int)date("G");
    if($waktu >= 6 && $waktu <= 11){
        return "Selamat Pagi";
    } elseif ($waktu >= 12 && $waktu <= 15){
        return "Selamat Siang";
    } else if ($waktu >= 16 && $waktu <= 18) {
        return "Selamat Sore";
    } else {
        return "Selamat Malam";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo salam(); ?> Admin</h1>

</body>
</html>