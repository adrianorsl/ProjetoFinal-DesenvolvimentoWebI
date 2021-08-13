<?php

class Vinculo extends Pessoa{

    private $funcao;

    public function getFuncao(){
        return $this->funcao;
    }

    public function setFuncao($funcao){
        $this->funcao = $funcao;
    }

    public function __toString(){
        return  "Função: ".$this->funcao."<br>". 
               
    }
}