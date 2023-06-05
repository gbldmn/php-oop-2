<?php
 require_once __DIR__ . '/../traits/expiration.php';


class Giochi extends Product{

    use Expiration;

    public $nome_gioco;
    public $nome_animale;
    public $img;



    function __construct($quantita, $prezzo, $nome_gioco, $nome_animale, $img, $colore)
    {
        parent::__construct($quantita, $prezzo);

        $this->nome_gioco = $nome_gioco;
        $this->nome_animale = $nome_animale;
        $this->img = $img;
        $this->colore = $colore;
        
    }

}

?>