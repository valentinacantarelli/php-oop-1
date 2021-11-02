<?php

class Movies{
    public $nome;
    public $regista;
    public $anno;
    public $casaDiProduzione;
    public $lingua;
    private $oscar = 0;

    function __construct( $nome,$regista,$anno,$casaDiProduzione,$lingua){
        $this->nome =$nome;
        $this->regista =$regista;
        $this->anno =$anno;
        $this->casaDiProduzione =$casaDiProduzione;
        $this->lingua =$lingua;
    }

    // public function setOscar($_oscar){
    //     if($this->oscar > 0){

    //     }
    // }

}

