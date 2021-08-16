<!DOCTYPE html>
<?php

    $menu = (isset($_POST['menu']) ? $_POST['menu'] : "");
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
    <h2> Questão 1 </h2>

    <h2> Quando o condutor estacionar o veículo nos viadutos, pontes e túneis será punido com:</h2>

    <form method="post" action=""> 
        <label>Selecione a alternativa correta</label><br><br>
        
        <input type="radio" name="letra" value="A"
            <?php if ( $questao1 == "A") echo "checked";?>>A) 
        <label> Retenção do veículo.</label><br>
        <input type="radio" name="letra" value="B"
            <?php if ( $questao1 == "B") echo "checked";?>>B)
        <label> Remoção do veículo e multa.</label><br>
        <input type="radio" name="letra" value="C"
            <?php if ( $questao1 == "C") echo "checked";?>>C)
        <label> Multa, apenas.</label><br>
        <input type="radio" name="letra" value="D"
            <?php if ( $questao1 == "D") echo "checked";?>>D)
        <label> Recolhimento do CRV e multa.</label><br>
        
     
        <?php
            if ( $questao1 == "B") $valor = $valor + 1;
        ?>
        <h2> Questão 2 </h2>
  
        <h2> Qual é a concentração de álcool no SANGUE, comprovado por exames, que é considerado crime de trânsito?</h2>
        <label>Selecione a alternativa correta</label><br><br>
         
        <input type="radio" name="letra2" value="A"
            <?php if ( $questao2 == "A") echo "checked";?>>A) 
        <label> 5 dc/L de sangue.</label><br>
        <input type="radio" name="letra2" value="B"
            <?php if ( $questao2 == "B") echo "checked";?>>B)
        <label> 6 dc/L de sangue.</label><br>
        <input type="radio" name="letra2" value="C"
            <?php if ( $questao2 == "C") echo "checked";?>>C)
        <label> 2 dc/L de sangue.</label><br>
        <input type="radio" name="letra2" value="D"
            <?php if ( $questao2 == "D") echo "checked";?>>D)
        <label> 0,34 ml/L de ar.</label><br>
        
    
        <?php
            if ($questao2 == "D") $valor = $valor + 1;
        ?>
        <h2> Questão 3 </h2>

        <h2> De acordo com os sinais sonoros abaixo relacionados, marque a resposta que corresponda a determinação do agente em parar o veículo:</h2>
        <label>Selecione a alternativa correta</label><br><br>
        
        <input type="radio" name="letra3" value="A"
            <?php if ( $questao3 == "A") echo "checked";?>>A) 
        <label> Um silvo breve.</label><br>
        <input type="radio" name="letra3" value="B"
            <?php if ( $questao3 == "B") echo "checked";?>>B)
        <label> Três silvos breves.</label><br>
        <input type="radio" name="letra3" value="C"
            <?php if ( $questao3 == "C") echo "checked";?>>C)
        <label> Dois silvos breves.</label><br>
        <input type="radio" name="letra3" value="D"
            <?php if ( $questao3 == "D") echo "checked";?>>D)
        <label> Um silvo longo.</label><br>
        
   
        <?php
            if ($questao3 == "C") $valor = $valor + 1;
        ?>
        <h2> Questão 4 </h2>

        <h2> É dever de todo condutor de veículo:</h2>
        <label>Selecione a alternativa correta</label><br><br>

        <input type="radio" name="letra4" value="A"
            <?php if ( $questao4 == "A") echo "checked";?>>A) 
        <label> Ultrapassar outro veículo em interseções.</label><br>
        <input type="radio" name="letra4" value="B"
            <?php if ( $questao4 == "B") echo "checked";?>>B)
        <label> Acionar dispositivo luminoso indicador (luz de seta), antes de mudar de direção.</label><br>
        <input type="radio" name="letra4" value="C"
            <?php if ( $questao4 == "C") echo "checked";?>>C)
        <label> Ultrapassar outro veículo.</label><br>
        <input type="radio" name="letra4" value="D"
            <?php if ( $questao4 == "D") echo "checked";?>>D)
        <label> Quando se tratar de transporte coletivo, parar o veículo para atender ao sinal de passageiro em qualquer local.</label><br>
        
     
        <?php
            if ($questao4 == "B") $valor = $valor + 1;
        ?>
        <h2> Questão 5 </h2>

        <h2> Dirigir com apenas uma das mãos é:</h2>
        <label>Selecione a alternativa correta</label><br><br>

        <input type="radio" name="letra5" value="A"
            <?php if ( $questao5 == "A") echo "checked";?>>A) 
        <label> Permitido em qualquer situação.</label><br>
        <input type="radio" name="letra5" value="B"
            <?php if ( $questao5 == "B") echo "checked";?>>B)
        <label> Proibido em qualquer situação.</label><br>
        <input type="radio" name="letra5" value="C"
            <?php if ( $questao5 == "C") echo "checked";?>>C)
        <label> Permitido quando o condutor já tem experiência.</label><br>
        <input type="radio" name="letra5" value="D"
            <?php if ( $questao5 == "D") echo "checked";?>>D)
        <label> Permitido quando o condutor faz sinais de braço, acionar acessórios ou comandos ou realizar mudanças de marchas.</label><br>

        <input type="submit" name="Enviar" id="Enviar" value="Enviar">
    
        <?php
            if ($questao5 == "D") $valor = $valor + 1;
        ?>
    </form>
        <h1> <?php echo $valor ?> </h1><br>
        <h1> <?php echo nota($valor) ?> </h1>




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
    </form>
</body>
</html>