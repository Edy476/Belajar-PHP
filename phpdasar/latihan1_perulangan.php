<?php
//pengulangan
//for  
//while  
//do.. while  
//foreach : pengulangan khusus untuk array  

echo "<h1> pengulangan for </h1>";
for($i = 0; $i < 5; $i++ ){
    echo "hello ini i for yang ke-$i <br>";
    }
    
echo "<h1> pengulangan while </h1>";
$i_while = 0;
while($i_while < 5){
    echo "Halo ini i while ke-$i_while <br>";
    $i_while++;
    }
    
echo "<h1> pengulangan do-while </h1>";
$i_do = 0;
do{
    echo "halo ini i do-while ke-$i_do <br>";
$i_do++;
} while($i_do < 5)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Pengulangan dalam bentuk tabel</h1>
        <table border="1" cellpading="10" cellspacing = "0">
            <?php
            for($i = 0; $i < 3; $i++){
                echo "<tr>";
                for($j = 0; $j < 5; $j++){
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
</body>
</html>