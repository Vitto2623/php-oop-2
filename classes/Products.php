<?php 

class Products {
    protected $nome;
    protected $quantita;
    protected $prezzo;

    function __construct($nome, $quantita, $prezzo){
        $this->nome = $nome;
        $this->quantita = $quantita;
        $this->prezzo = $prezzo;
    }

    public function getNome(){
        return $this -> nome;
    }

    public function getQuantita(){
        return $this -> quantita;
    }

    public function Prezzo(){
        return $this->prezzo;
    }

    public function getPrezzo($registrato){
        if ($registrato){
            return $this->prezzo * 0.8 * $this->quantita;
        }else{
            return $this->prezzo * $this->quantita;
        }
    
    }


}





