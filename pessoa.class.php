<?php

class Pessoa{

    private $nome;
    private $cpf;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function __toString(){
        return  "Nome: ".$this->nome."<br>". 
                "Cpf: ".$this->cpf."<br>". 
    }

}

?>