<?php

class Product {

    public $quantita;
    public $prezzo;

    function __construct($quantita, $prezzo)
    {
        $this->quantita = $quantita;
        $this->prezzo = $prezzo;
    }

}

?>