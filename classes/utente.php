<?php 
class Utente {
    private $nome;
    private $registrato;

    function __construct($_nome, $_registrato){
        $this -> nome = $_nome;
        $this -> registrato = $_registrato;
    }

    public function getNome(){
        return $this -> nome;
    }

    public function getRegistrato(){
        return $this -> registrato; 
    }
}