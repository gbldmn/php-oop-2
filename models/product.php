<?php

class Product {

    public $tipo_animale;
    public $quantita;
    public $prezzo;

    function __construct($tipo_animale, $quantita, $prezzo)
    {
        $this->tipo_animale = $tipo_animale;
        $this->quantita = $quantita;
        $this->prezzo = $prezzo;
    }

}

?>