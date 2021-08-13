CREATE TABLE `pessoa` (
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `funcao` varchar(11) NOT NULL,
  `senha` int(6)  NOT NULL,
  `codigo` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

CREATE TABLE `notas` (
  `aluno` varchar(45) NOT NULL,
  `nota` float(4),
  `func` varchar(11) NOT NULL,
  `cod` int(5) NOT NULL,
  FOREIGN KEY (`cod`),
  REFERENCES `pessoa`(`codigo`),
  FOREIGN KEY (`func`),
  REFERENCES `pessoa`(`funcao`),
  FOREIGN KEY (`aluno`),
  REFERENCES `pessoa`(`nome`),
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;