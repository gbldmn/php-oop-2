<?php

include __DIR__ . '/Models/product.php';
include __DIR__ . '/Models/utente.php';
include __DIR__ . '/Models/giochi.php';
include __DIR__ . '/Models/accessorio.php';

// istanza utente

$gabriele = new utente('Gabriele', 'Damiani', 'si');
$francesco = new utente('Francesco', 'Lorem', 'no');
$federico = new utente('Federico', 'Ipsum', 'si');
$matteo = new utente('Matteo', 'Fox', 'si');
// var_dump( $gabriele );

// istanza accessorio

$museruola = new Accessorio('2', '15€', 'museruola');
$crocchette = new Accessorio('2kg', '15€', 'crocchette');
$osso = new Accessorio('1', '10€', 'osso');
$collare = new Accessorio('2', '20€', 'collare');

// var_dump( $museruola );


// istanza gioco

$pallina_spugna = new giochi('1', '6€', 'pallina in spugna', 'cane');
$peluque = new giochi('1', '6€', 'peluque', 'cane');
$gomitolo = new giochi('1', '6€', 'gomitolo', 'gatto');
$topolino = new giochi('1', '6€', 'topolino', 'gatto');
// var_dump( $pallina_spugna );



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="file.css/style.css">
    <title>Document</title>
</head>
<body>


<main>
    <div class="card">
       <h2> utente: <?php echo  $gabriele->nome; ?> <?php echo  $gabriele->cognome; ?> </h2>
       <h2> prodotto per: <?php echo  $pallina_spugna->nome_animale; ?></h2>
       <h3> gioco: <?php echo  $pallina_spugna->nome_gioco; ?> </h3>
       <h3> costo: <?php echo  $pallina_spugna->prezzo; ?> </h3>
    </div>
    <div class="card">
       <h2> utente: <?php echo  $francesco->nome; ?> <?php echo  $francesco->cognome; ?> </h2>
       <h2> prodotto per: <?php echo  $gomitolo->nome_animale; ?></h2>
       <h3> gioco: <?php echo  $gomitolo->nome_gioco; ?> </h3>
       <h3> costo: <?php echo  $gomitolo->prezzo; ?> </h3>

    </div>
    <div class="card">
       <h2> utente: <?php echo  $federico->nome; ?> <?php echo  $federico->cognome; ?> </h2>
       <h2> prodotto per: <?php echo  $gomitolo->nome_animale; ?></h2>
       <h3> cibo: <?php echo  $crocchette->nome_accessorio; ?> </h3>
       <h3> costo: <?php echo  $crocchette->prezzo; ?> </h3>

    </div>
    <div class="card">
       <h2> utente: <?php echo  $matteo->nome; ?> <?php echo  $matteo->cognome; ?> </h2>
       <h2> prodotto per: <?php echo  $peluque->nome_animale; ?></h2>
       <h3> accessorio: <?php echo  $museruola->nome_accessorio; ?> </h3>
       <h3> costo: <?php echo  $museruola->prezzo; ?> </h3>
    </div>
</main>

    
</body>
</html>