<?php

class Accessorio extends Product{

    public $nome_accessorio;


    function __construct($tipo_animale, $quantita, $prezzo, $nome_accessorio)
    {
        parent::__construct($tipo_animale, $quantita, $prezzo);

        $this->nome_accessorio = $nome_accessorio;
    }
}

?>