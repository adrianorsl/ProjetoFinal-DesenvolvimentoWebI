<!DOCTYPE html>
<?php
include_once "acao.php";
$acao = isset($_GET['acao']) ? $_GET['acao'] : "";
$obj;
if ($acao == 'ok'){
    $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";
    if ($codigo > 0)
        $obj = showNotas($codigo);
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
    <input required=true   type="text" name="aluno" id="aluno" value="<?php if ($acao == "editar") echo $obj->getAluno(); ?>"> Aluno <br>
    <input required=true   type="text" name="nota" id="nota" value= "<?php if ($acao == "editar") echo $obj->getNota(); else $valor ?>"> Nota<br>   
    <br><button type="submit" name="acao" id="acao" value="Enviar">Enviar</button>
</form>
</body>
</html>