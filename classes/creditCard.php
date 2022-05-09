<?php 

class creditCard {
    protected $nome;
    protected $expire;

    function __construct($_nome, $_expire){
        $this->nome = $_nome;
        $this->expire = $_expire;
    }

    public function getNomeCarta(){
        return $this->nome;
    }

    public function getDate(){
        return $this->expire;
    }
    
    public function controlloCarta($expire){
        if($expire){
            echo "Pagamento Avvenuto";
        }else{
            echo "Carta Scaduta, il pagamento non è stato effettuato";
        }
    }
}