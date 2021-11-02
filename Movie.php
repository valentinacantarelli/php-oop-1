<?php

class Movies{
    public $nome;
    public $regista;
    public $anno;
    public $casaDiProduzione;
    public $lingua;
    public $rating =0;
    

    function __construct( $nome,$regista,$anno,$casaDiProduzione,$lingua){
        $this->nome =$nome;
        $this->regista =$regista;
        $this->anno =$anno;
        $this->casaDiProduzione =$casaDiProduzione;
        $this->lingua =$lingua;
        
    }

    public function setVoto($_voto){
         $this->rating =$_voto/2;
          
        }
     
     public function getVoto(){
        return $this ->rating;
     }
}

