CREATE DATABASE  IF NOT EXISTS autoEscola /*!40100 DEFAULT CHARACTER SET latin1 */;
USE autoEscola;


CREATE TABLE IF NOT EXISTS pessoa (
  nome varchar(45) NOT NULL,
  cpf varchar(11) NOT NULL,
  funcao varchar(11) NOT NULL,
  tipo int(1),
  senha varchar(45)  NOT NULL,
  codigo int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (codigo),
  UNIQUE(matricula)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS notas (
  aluno varchar(45) NOT NULL,
  nota float(4),
  cod int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (cod)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;