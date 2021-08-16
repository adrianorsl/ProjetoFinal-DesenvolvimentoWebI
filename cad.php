<!DOCTYPE html>
<?php
include_once "acao.php";
$acao = isset($_GET['acao']) ? $_GET['acao'] : "";
$obj;
if ($acao == 'editar'){
    $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";
    if ($codigo > 0)
        $obj = show($codigo);
}
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br>
<a href="adm.php"><button>Listar</button></a>
<a href="cad.php"><button>Novo</button></a>
<br><br>
<form action="acao.php" method="post">
    <input readonly  type="text" name="codigo" id="codigo" value="<?php if ($acao == "editar") echo $obj->getCodigo(); else echo 0; ?>"><br>
    <input required=true   type="text" name="nome" id="nome" value="<?php if ($acao == "editar") echo $obj->getNome(); ?>"> Nome <br>
    <input required=true   type="text" name="cpf" id="cpf" value="<?php if ($acao == "editar") echo $obj->getCpf(); ?>"> CPF <br>   
    <input required=true   type="text" name="funcao" id="funcao" value="<?php if ($acao == "editar") echo $obj->getFuncao(); ?>"> Função <br>
    <input required=true   type="text" name="tipo" id="tipo" value="<?php if ($acao == "editar") echo $obj->getTipo(); ?>"> Tipo <br>
    <input required=true   type="text" name="senha" id="senha" value="<?php if ($acao == "editar") echo $obj->sha1(getSenha()); ?>"> Senha <br>
    <br><button type="submit" name="acao" id="acao" value="salvar">Salvar</button>
</form>
</body>
</html>