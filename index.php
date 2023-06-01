<?php

include __DIR__ . '/Models/product.php';
include __DIR__ . '/Models/utente.php';
include __DIR__ . '/Models/giochi.php';
include __DIR__ . '/Models/accessorio.php';

// istanza utente

$gabriele = new utente('Gabriele', 'Damiani', 'si');
var_dump( $gabriele );

// istanza accessorio

$museruola = new Accessorio('cane', '2', '15€', 'museruola');
var_dump( $museruola );


// istanza gioco

$pallina_spugna = new giochi('cane', '1', '6€', 'pallina in spugna');
var_dump( $pallina_spugna );



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
    
</body>
</html>