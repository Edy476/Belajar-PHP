<?php
    $mahasiswa2 = [
        ["Edy Sukarma", "03040555" ,"Teknik Informatika", "edy067@gmail.com"],
        ["Ahmad Kurniawan", "03040675" ,"Teknik Informatika", "Kurni067@gmail.com"]
    ];
    $mahasiswa = ["amad", "123456", "Teknik Listrik","amad123@gmail.com"];

?>
<html>
<head>
    <title>Daftar Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Data Mahasiswa dengan array multidimensi</h1>
    <?php foreach($mahasiswa2 as $mhs) : ?>
    <ul>
           <li> Nama: <?= $mhs[0]; ?>  </li>
           <li> Nim: <?= $mhs[1]; ?>  </li>
           <li> Email: <?= $mhs[3]; ?>  </li>
           <li> Prodi: <?= $mhs[2]; ?>  </li>
    </ul>
    <?php endforeach; ?>

    <h1>daftar mahasiswa array biasa</h1>
    <ul>
        <li><?= $mahasiswa[0]; ?></li> 
        <li><?= $mahasiswa[1]; ?></li> 
        <li><?= $mahasiswa[2]; ?></li> 
        <li><?= $mahasiswa[3]; ?></li> 
    </ul>
</body>
</html>