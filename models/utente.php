<?php

class utente {

    public $nome;
    public $cognome;
    public $registrazione;
    public $carta;


    function __construct($_nome, $_cognome, $_registrazione, $_carta){   
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->registrazione = $_registrazione;
    $this->carta = $_carta;
    }

    public function getSconto($registrazione, $carta)
    {
  if ($registrazione == 'si' && $carta > 2023) {
    return 'hai diritto ad uno sconto del 20%';
    } else{
    throw new Exception('non hai diritto a sconti');
    }

        
    }

}




?>

<!-- altro metodo -->

        <!-- if ($registrazione == 'si' && $carta > 2023) {
            throw new Exception('non hai diritto al 20% di sconti');
        } 
          return  'hai diritto allo sconto';
         -->

          