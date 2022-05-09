<?php 
include_once __DIR__ . '/Products.php';

class Food extends Products {
    protected $gusto;
    protected $tipologia;

    function __construct($_gusto, $_tipologia, $nome, $quantita, $prezzo){
        parent:: __construct($nome, $quantita, $prezzo);
        $this -> gusto = $_gusto;
        $this -> tipologia = $_tipologia;
    }

    public function getGusto(){
        return $this -> gusto;
    }

    public function getTipologia(){
        return $this -> tipologia;
    }
}