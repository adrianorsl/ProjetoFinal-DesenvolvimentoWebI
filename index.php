<!DOCTYPE html>
<?php
    include_once "conf/default.inc.php";
    require_once "conf/Conexao.php";
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
       
    </body>
</html>

