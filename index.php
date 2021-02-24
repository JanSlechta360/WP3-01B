<?php
require_once ('functions.php');
$cars[0]['year'] = 2004 ;
$cars[0]['SPZ'] = "FU U247" ;
$cars[0]['engine'] = 1500 ;
$cars[1]['year'] = 1987 ;
$cars[1]['SPZ'] = "UR 6AY0" ;
$cars[1]['engine'] = 1000 ;
$cars[2]['year'] = 2021 ;
$cars[2]['SPZ'] = "I APPLE" ;
$cars[2]['engine'] = 2000 ;
$cars[3]['year'] = 1969 ;
$cars[3]['SPZ'] = "STARKI" ;
$cars[3]['engine'] = 1250 ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i=0; $i < count($cars); $i++) { 
        echo $cars[$i]['SPZ'] . " : ";
        getCarInfo($cars[$i]['year']); 
        getTax($cars[$i]['engine'])
        ?>
        <br> <?php
    }
    ?>
</body>