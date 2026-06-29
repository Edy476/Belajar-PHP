<?php

//perulangan pada array
//for dan foreach
$angka = [1,100,50,20,70,10,"Cahyono"];
$angka2 = [1,100,50,20,70,10,"Cahyono"];
?>

<!DOCTYPE html>
<head>
    <title>array_perulangan</title>
    <style>
        .kotak {
            height: 50px;
            width: 80px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>

<h1>Penggunaan array dengan for</h1>
<?php for($i = 0; $i < count($angka); $i++ ) { ?>

<div class="kotak"> <?php echo $angka[$i]; ?></div>

<?php } ?>

<br>
<br>
<br>

<h1>Penggunaan array dengan foreach</h1>
<?php foreach( $angka as $a ) { ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<br>
<br>
<br>

<h1>Penggunaan array dengan foreach lebih clear atau rapi</h1>

<?php foreach($angka as $a) : ?>

    <div class="kotak"><?= $a; ?></div>

<?php endforeach; ?>

</body>
</html>