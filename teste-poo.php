<?php

require_once "autoLoad.php";

$pessoa = new Vinculo;

$pessoa->setCodigo(1);
$pessoa->setNome("Adriano");
$pessoa->setCpf("11111111111");
$pessoa->setFuncao("Adm");
$pessoa->setTipo(1);
$pessoa->setSenha("123456");


echo "-->pessoa 1 <br>";
echo $pessoa;

echo "<br><br>";

$pessoa2 = new Vinculo;

$pessoa2->setCodigo(2);
$pessoa2->setNome("Jamile");
$pessoa2->setCpf("22222222222");
$pessoa2->setFuncao("Aluno");
$pessoa2->setTipo(3);
$pessoa2->setSenha("453");

echo "-->pessoa 2<br>";
echo $pessoa2;

?>
