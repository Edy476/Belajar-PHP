<?php
//array assosiative
//array assosiative dengan luaran string
$mahasiswa = [
    "Array1" =>
    [
        "Nama" => "Faiz Majalengka",
        "Nim" => "C030324055",
        "Prodi" => "Teknik Informatika",
        "Email" => "faiz@mahasiswa.ac.id"
    ],
    "Array2" =>
    [
        "Nama" => "Faiz Mandalika",
        "Nim" => "C030324067",
        "Prodi" => "Teknik Informatika",
        "Email" => "Manda@mahasiswa.ac.id"
    ],
];

$mahasiswa2 = [
    [
        "Nama" => "Ibrahim",
        "Nim" => "C03032490",
        "Prodi" => "Teknik Informatika",
        "Email" => "Ibrahim@mahasiswa.ac.id"
    ],
    [
        "Nama" => "SULAEMAN",
        "Nim" => "C03032555",
        "Prodi" => "Teknik Informatika",
        "Email" => "SULAEMAN@mahasiswa.ac.id"
    ],
    [
        "Nama" => "SADDIL RAMADHANI",
        "Nim" => "C03032131",
        "Prodi" => "Teknik Informatika",
        "Email" => "SADDIL@mahasiswa.ac.id"
    ],
];

echo "<h1>ARRAY DENGAN LUARAN STRING</h1>";
echo "Nama: " . $mahasiswa["Array1"]["Nama"] . "<br>";
echo "Nama: " . $mahasiswa["Array2"]["Nama"];
echo "<br>";
echo "<br>";
echo "<h1>ARRAY DENGAN LUARAN NUMERIC</h1>";
echo "Nama: " .  $mahasiswa2[0]["Nama"] . "<br>";
echo "Nama: " .  $mahasiswa2[0]["Nim"] . "<br>";
echo "Nama: " .  $mahasiswa2[0]["Prodi"] . "<br>";
echo "Nama: " .  $mahasiswa2[0]["Email"] . "<br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY ASSOCIATIVE</title>

    <style>
        h1 {
            background-color: green;
            width: 700px;
            transition: 0.5s;
            border-radius: 10px;
            text-align: center;
        }

        h1:hover {
            background-color: lime;
            transform: rotateY(5deg);
        }
    </style>
</head>

<body>
    <h1>ARRAY ASSOSIATIF DENGAN PERULANGAN</h1>

    <div class="mhs2">
    <ul>
        <?php foreach ($mahasiswa2 as $mhs2) : ?>

            <li>Nama: <?= $mhs2["Nama"];  ?></li>
            <li>NIM: <?= $mhs2["Nim"];  ?></li>
            <li>Prodi: <?= $mhs2["Prodi"];  ?></li> 
            <li>Email: <?= $mhs2["Email"];  ?> </li> <br>

        <?php endforeach; ?>
    </ul>
    </div>
</body>

</html>