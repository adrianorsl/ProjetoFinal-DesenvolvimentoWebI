<?php

class Nota{

    private $aluno;
    private $nota;
    private $cod;

    public function getAluno(){
        return $this->aluno;
    }

    public function setNome($aluno){
        $this->aluno = $aluno;
    }

    public function getNota(){
        return $this->nota;
    }

    public function setCpf($nota){
        $this->nota = $nota;
    }

    public function getCod(){
		return $this->cod;
	}

	public function setCodigo($cod){
		$this->cod = $cod;
	}

    public function __toString(){
        return  "Aluno: ".$this->aluno."<br>". 
                "Nota: ".$this->nota."<br>".
                "Cod: ".$this->cod;
    }

    public function buildFromObj($obj){
        $obj = (array)$obj;
        $this->buildFromArray($obj);
    }

    public function buildFromArray($arr){
        $this->setAluno($arr['aluno']);
        $this->setNota($arr['nota']);
        $this->setCod($arr['cod']);
    }

} 


?>