<!DOCTYPE html>
<?php
    include_once "conf/defaut.inc.php";
    include_once "conf/conf.inc.php";
    require_once "conf/Conexao.class.php";


    $logo1 = "Img/Logo1.jpg";
    $title = "Centro de Formações Lontrense";
    $nome = (isset($_POST['nome']) ? $_POST['nome'] : '');
    $senha = (isset($_POST['senha']) ? $_POST['senha'] : '');
 
?>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
    </head>    
    <body>
        <h3> <?php echo "<img src = $logo1  />"; ?> </h3> 
        <h1> <?php echo $title; ?> </h1>

        <?php echo "Informe o nome e senha" ?>
        <form action="" method="post">
        <fieldset>
        <legend>Nome</legend>
            <label for="nome"></label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" >
        <legend>Senha</legend>
            <label for="senha"></label>
            <input type="text" name="senha" id="senha" placeholder="Digite sua senha" >
        </fieldset>
        <fieldset>
            <input type="submit" name="ok" id="ok" value="Ok" >
        </fieldset>
        </form>

       
    </body>
</html>

