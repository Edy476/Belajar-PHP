
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .angka {
            height: 30px;
            width: 30px;
            text-align: center;
            background-color: green;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 0.5s;
        }

        .clear {
            clear:both;
        }

        .angka:hover {
            background-color: lime;
            transform: rotate(360deg); 
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <?php
        $angka1 = [1,2,3,4,5,6,7,8];
        $angka2 = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];
    ?>
    <h1>array satu dimensi</h1>
    <?php foreach($angka1 as $a) :?>
        <div class="angka"><?= $a ?></div>
    <?php endforeach ;?>
    
    <br>
    <h1>array multidimensi</h1>
    <?php foreach($angka2 as $a): ?>

        <?php foreach($a as $b) : ?>
            <div class="angka"> <?= $b ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>


    <?php endforeach; ?>
</body>
</html>