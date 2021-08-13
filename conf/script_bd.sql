CREATE TABLE `pessoa` (
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `funcao` varchar(11) NOT NULL,
  `senha` int(6)  NOT NULL,
  `codigo` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;