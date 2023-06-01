<?php

class utente {

    public $nome;
    public $cognome;
    public $registrazione;


    function __construct($_nome, $_cognome, $_registrazione){   
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->registrazione = $_registrazione;

    }
}




?>