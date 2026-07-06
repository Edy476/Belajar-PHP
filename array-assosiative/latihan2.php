<?php
    $mahasiswa = [
        ["Ahmad Kanabawi", "C030324011","Teknik Informatika","Ahmad@mahasiswa.ac.id"],
        ["Ahmad Sanjaya", "C0303240541","Teknik Informatika","Sanjaya@mahasiswa.ac.id"],
        ["Hafiz Sulaeman", "C030324067", "Teknik Informatika", "Hafiz@mahasiswa.ac.id"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahaiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <li><?php echo $mhs[0] ?></li>
            <li><?php echo $mhs[1] ?></li>
            <li><?php echo $mhs[2] ?></li>
            <li><?php echo $mhs[3] ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>