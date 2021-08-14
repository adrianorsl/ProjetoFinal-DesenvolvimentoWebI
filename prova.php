<!DOCTYPE html>
<?php
    $title = "Prova";
    $questao1 = (isset($_POST["letra"]) ? $_POST["letra"] : '');
    $questao2 = (isset($_POST["letra2"]) ? $_POST["letra2"] : '');
    $questao3 = (isset($_POST["letra3"]) ? $_POST["letra3"] : '');
    $questao4 = (isset($_POST["letra4"]) ? $_POST["letra4"] : '');
    $questao5 = (isset($_POST["letra5"]) ? $_POST["letra5"] : '');
    $valor = 0;

?>
<?php 
    function nota($valorNota){
        return ($valorNota / 5) * 10;
    }
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
</head>
    <body>
    <h1> <?php echo $title; ?> </h1>
    <h1> Questão 1 </h1>
    <form method="post" action=""> 
        <label>Selecione a alternativa correta</label>
        <input type="radio" name="letra" value="A"
            <?php if ( $questao1 == "A") echo "checked";?>>A
        <input type="radio" name="letra" value="B"
            <?php if ( $questao1 == "B") echo "checked";?>>B
        <input type="radio" name="letra" value="C"
            <?php if ( $questao1 == "C") echo "checked";?>>C
        <input type="radio" name="letra" value="D"
            <?php if ( $questao1 == "D") echo "checked";?>>D
        
     
        <?php
            if ( $questao1 == "A") $valor = $valor + 1;
        ?>
        <h1> Questão 2 </h1>
         
        <label>Selecione a alternativa correta</label>
        <input type="radio" name="letra2" value="A"
            <?php if ($questao2 == "A") echo "checked";?>>A
        <input type="radio" name="letra2" value="B"
            <?php if ($questao2== "B") echo "checked";?>>B
        <input type="radio" name="letra2" value="C"
            <?php if ($questao2 == "C") echo "checked";?>>C
        <input type="radio" name="letra2" value="D"
            <?php if ($questao2 == "D") echo "checked";?>>D
        
    
        <?php
            if ($questao2 == "A") $valor = $valor + 1;
        ?>
        <h1> Questão 3 </h1>
        
        <label>Selecione a alternativa correta</label>
        <input type="radio" name="letra3" value="A"
            <?php if ($questao3 == "A") echo "checked";?>>A
        <input type="radio" name="letra3" value="B"
            <?php if ($questao3 == "B") echo "checked";?>>B
        <input type="radio" name="letra3" value="C"
            <?php if ($questao3 == "C") echo "checked";?>>C
        <input type="radio" name="letra3" value="D"
            <?php if ($questao3 == "D") echo "checked";?>>D
      
   
        <?php
            if ($questao3 == "A") $valor = $valor + 1;
        ?>
         <h1> Questão 4 </h1>
      
        <label>Selecione a alternativa correta</label>
        <input type="radio" name="letra4" value="A"
            <?php if ($questao4 == "A") echo "checked";?>>A
        <input type="radio" name="letra4" value="B"
            <?php if ($questao4 == "B") echo "checked";?>>B
        <input type="radio" name="letra4" value="C"
            <?php if ($questao4 == "C") echo "checked";?>>C
        <input type="radio" name="letra4" value="D"
            <?php if ($questao4 == "D") echo "checked";?>>D
        
     
        <?php
            if ($questao4 == "A") $valor = $valor + 1;
        ?>
         <h1> Questão 5 </h1>
    
        <label>Selecione a alternativa correta</label>
        <input type="radio" name="letra5" value="A"
            <?php if ($questao5 == "A") echo "checked";?>>A
        <input type="radio" name="letra5" value="B"
            <?php if ($questao5 == "B") echo "checked";?>>B
        <input type="radio" name="letra5" value="C"
            <?php if ($questao5 == "C") echo "checked";?>>C
        <input type="radio" name="letra5" value="D"
            <?php if ($questao5 == "D") echo "checked";?>>D
        <br>
        <input type="submit" name="Enviar" id="Enviar" value="Enviar">
    </form>
        <?php
            if ($questao5 == "A") $valor = $valor + 1;
        ?>
        <h1> <?php echo $valor ?> </h1><br>
        <h1> <?php echo nota($valor) ?> </h1>

    </body>
</html>