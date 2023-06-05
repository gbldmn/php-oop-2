<?php

include __DIR__ . '/Models/product.php';
include __DIR__ . '/Models/utente.php';
include __DIR__ . '/Models/giochi.php';
include __DIR__ . '/Models/accessorio.php';

// istanza utente

$gabriele = new utente('Gabriele', 'Damiani', 'si', '2020');
$francesco = new utente('Francesco', 'Lorem', 'si', '2021');
$federico = new utente('Federico', 'Ipsum', 'si', '2024');
$matteo = new utente('Matteo', 'Fox', 'si', '2025');
// var_dump( $gabriele );

// istanza accessorio

$museruola = new Accessorio('2', '15€', 'museruola');
$crocchette = new Accessorio('2kg', '15€', 'crocchette');
$osso = new Accessorio('1', '10€', 'osso');
$collare = new Accessorio('2', '20€', 'collare');

// var_dump( $museruola );


// istanza gioco

$pallina_spugna = new giochi('1', '6€', 'pallina in spugna', 'cani', 'palline.jpg', 'giallo');
$peluque = new giochi('1', '6€', 'peluque', 'cani', 'crocchette.jpg', 'marrone');
$gomitolo = new giochi('1', '6€', 'gomitolo', 'gatti', 'gomitolo.jpg', 'blu');
$topolino = new giochi('1', '6€', 'topolino', 'gatti','mus.jpg', 'marrone' );
// var_dump( $pallina_spugna );

try {
   $gabriele->getSconto('si', 2020);
    } catch (Exception $e){
       $e->getMessage();
    }

try {
   $francesco->getSconto('si', 2021);
   } catch (Exception $e){
      $e->getMessage();
   }
   
try {
   $federico->getSconto('si', 2024);
   } catch (Exception $e){
      $e->getMessage();
   }
try {
   $matteo->getSconto('si', 2025);
   } catch (Exception $e){
      $e->getMessage();
   }
               
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
       <img class="two" src="img/<?php echo $pallina_spugna->img; ?>" alt="">
       <h2> Carta-Utente: <?php echo $e->getMessage() ?></h2>
       <h2> Utente: <?php echo  $gabriele->nome; ?> <?php echo  $gabriele->cognome; ?> </h2>
       <h2> Prodotti per: <?php echo  $pallina_spugna->nome_animale; ?></h2>
       <h3> Gioco: <?php echo  $pallina_spugna->nome_gioco; ?> </h3>
       <h3> Costo: <?php echo  $pallina_spugna->prezzo; ?> </h3>
       <h3> Colore: <?php echo  $pallina_spugna->colore; ?> </h3>
    </div>
    <div class="card">
       <img src="img/<?php echo $gomitolo->img; ?>" alt="">
       <h2> Carta-Utente: <?php echo $e->getMessage() ; ?></h2>
       <h2> Utente: <?php echo  $francesco->nome; ?> <?php echo  $francesco->cognome; ?> </h2>
       <h2> Prodotto per: <?php echo  $gomitolo->nome_animale; ?></h2>
       <h3> Gioco: <?php echo  $gomitolo->nome_gioco; ?> </h3>
       <h3> Costo: <?php echo  $gomitolo->prezzo; ?> </h3>
       <h3> Colore: <?php echo  $gomitolo->colore; ?> </h3>

    </div>
    <div class="card">
       <img class="two" src="img/<?php echo $peluque->img; ?>" alt="">
       <h2> Carta-Utente: <?php echo  $federico->getSconto($federico->registrazione, $federico->carta); ?></h2>
       <h2> Utente: <?php echo  $federico->nome; ?> <?php echo  $federico->cognome; ?> </h2>
       <h2> Prodotto per: <?php echo  $gomitolo->nome_animale; ?></h2>
       <h3> Cibo: <?php echo  $crocchette->nome_accessorio; ?> </h3>
       <h3> Costo: <?php echo  $crocchette->prezzo; ?> </h3>
       <h3> Colore: <?php echo  $peluque->colore; ?> </h3>

    </div>
    <div class="card">
       <img class="m" src="img/<?php echo $topolino->img; ?>" alt="">
       <h2> Carta-Utente: <?php echo  $matteo->getSconto($matteo->registrazione, $matteo->carta); ?></h2>
       <h2> Utente: <?php echo  $matteo->nome; ?> <?php echo  $matteo->cognome; ?> </h2>
       <h2> Prodotto per: <?php echo  $peluque->nome_animale; ?></h2>
       <h3> Accessorio: <?php echo  $museruola->nome_accessorio; ?> </h3>
       <h3> Costo: <?php echo  $museruola->prezzo; ?> </h3>
       <h3> colore: <?php echo  $peluque->colore; ?> </h3>
    </div>
</main>

    
</body>
</html>