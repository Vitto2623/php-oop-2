<?php 

include_once __DIR__ . '/Products.php';

class Toy extends Products {
    protected $modello;
    protected $colore;

    function __construct($_modello, $_colore, $nome, $quantita, $prezzo){
        parent::__construct($nome, $quantita, $prezzo);
        $this->modello = $_modello;
        $this->colore = $_colore;
    }

    public function getModello(){
        return $this -> modello;
    }

    public function getColore(){
        return $this -> colore;
    }
}