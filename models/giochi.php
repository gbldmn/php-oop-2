<?php

class Giochi extends Product{

    public $nome_gioco;



    function __construct($tipo_animale, $quantita, $prezzo, $nome_gioco)
    {
        parent::__construct($tipo_animale, $quantita, $prezzo);

        $this->nome_gioco = $nome_gioco;
        
    }

}

?>