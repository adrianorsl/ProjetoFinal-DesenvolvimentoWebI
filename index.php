<!DOCTYPE html>
<?php
    include_once "conf/defaut.inc.php";
    include_once "conf/conf.inc.php";
    require_once "conf/Conexao.class.php";


    $logo1 = "Img/Logo1.jpg";
    $title = "Centro de Formações Lontrense";
    



    
 
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

        <form action="acaoLogin.php" id="form" method="post">
            <fieldset>
                <legend>Autenticação</legend>
                <label for="user">Usuário</label>
                    <input type="text" name="user" id="user" value=""><br/><br/>
                <label for="pass">Senha</label>
                    <input type="password" name="pass" id="pass" value=""><br/><br/>
                <button name="acao" value="login" id="login" type="submit">
                Entrar
                </button>
            </fieldset>
        </form>
     
       
    </body>
</html>

