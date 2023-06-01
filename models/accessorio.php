<?php

class Accessorio extends Product{

    public $nome_accessorio;


    function __construct($quantita, $prezzo, $nome_accessorio)
    {
        parent::__construct($quantita, $prezzo);

        $this->nome_accessorio = $nome_accessorio;
    }
}

?>