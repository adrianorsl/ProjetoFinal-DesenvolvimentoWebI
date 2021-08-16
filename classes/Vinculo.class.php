<?php

require_once "autoLoad.php";

class Vinculo extends Pessoa{

    private $funcao;
    private $tipo;
    private $senha;

    public function getFuncao(){
        return $this->funcao;
    }

    public function setFuncao($funcao){
        $this->funcao = $funcao;
    }
    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function __toString(){
        return parent::__toString()." | Função: ".$this->funcao."<br>".
                "Tipo: ".$this->tipo."<br>".
                "Senha: ".$this->senha;          
    }

    public function buildFromObj($obj){
        $obj = (array)$obj;
        $this->buildFromArray($obj);
    }

    public function buildFromArray($arr){
        $this->setNome($arr['nome']);
        $this->setCpf($arr['cpf']);
        $this->setCodigo($arr['codigo']);
        $this->setFuncao($arr['funcao']);
        $this->setTipo($arr['tipo']);
        $this->setsenha($arr['senha']);

    }
}