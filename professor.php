<!DOCTYPE html>

<?php
    $menu = (isset($_POST['menu']) ? $_POST['menu'] : "");

?>







<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checar</title>
</head>
<body>

<form action="" method="post">
    <h1> Menu </h1>
    <select name="menu" id="menu">
        <option value=""></option>
        <option value="professor"> Professor</option>
        <option value="aluno"> Prova</option>
        <option value="administrador"> Administrador</option>
        <fieldset>
            <input type="submit" name="ok" id="ok" value="ok" >
        </fieldset>
    </select>
    <?php
        if ($menu == "administrador"){
            header('Location: adm.php');
            exit;
        }else if ($menu == "aluno"){
            header('Location: prova.php');
            exit;
        }else if ($menu == "professor"){
            header('Location: professor.php');
            exit;
        }else{

        }
    ?>
</body>
</html>