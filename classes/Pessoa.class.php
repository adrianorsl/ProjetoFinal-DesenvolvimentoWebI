<?php

class Pessoa{

    private $nome;
    private $cpf;
    private $codigo;

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

    public function getCodigo(){
		return $this->codigo;
	}

	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}


    public function __toString(){
        return  "Nome: ".$this->nome."<br>". 
                "Cpf: ".$this->cpf."<br>".
                "Codigo: ".$this->codigo;
    }

    public function buildFromObj($obj){
        $obj = (array)$obj;
        $this->buildFromArray($obj);
    }

    public function buildFromArray($arr){
        $this->setNome($arr['nome']);
        $this->setCpf($arr['cpf']);
        $this->setCodigo($arr['codigo']);
    }

}

?>