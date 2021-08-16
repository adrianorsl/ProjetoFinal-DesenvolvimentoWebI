<!DOCTYPE html>
<?php 
require_once "conf/Conexao.class.php";  
require_once "conf/Crud.class.php"; 
require_once "autoLoad.php";
include_once "conf/conf.inc.php";
include_once "conf/defaut.inc.php";
$title = "Lista de Pessoas";
$consulta = isset($_POST['consulta']) ? $_POST['consulta'] : "";

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title   >
    <link rel="stylesheet" href="css/estilo.css">
    <script>
        function excluirRegistro(url) {
            if (confirm("Confirmar Exclusão?"))
                location.href = url; 
        }
    </script>
</head>
<body>
    <br>
    <a href="cad.php"><button>Novo</button></a>
    <br><br>
    <form method="post">
    <input type="text" name="consulta" id="consulta" value="<? echo $consulta; ?>">
    <input type="submit" value="Pesquisar">
    </form>
    
    <br>
    <table border="1">
       <tr><th>Código</th>
        <th>Nome</th> 
        <th>Cpf</th> 
        <th>funçao</th> 
        <th>Senha</th> 
        <th>Detalhes</th> 
        <th>Alterar</th> 
        <th>Excluir</th> 
    </tr>
    <?php 
    $pdo = Conexao::getInstance();
    $consulta = $pdo->query("SELECT * FROM pessoa 
                             WHERE nome 
                             LIKE '$consulta%'");
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {  
        $pessoa = new Vinculo;
        $pessoa->buildFromArray($linha);
        ?>
        <tr><td><?php echo $pessoa->getCodigo();?></td>
            <td><?php echo $pessoa->getNome();?></td>
            <td><?php echo $pessoa->getCpf();?></td>
            <td><?php echo $pessoa->getfuncao();?></td>
            <td><?php echo $pessoa->getSenha();?></td>
            <td><a href='show.php?id=<?php echo $pessoa->getCodigo();?>'> <img class="icon" src="img/show.png" alt=""> </a></td>
            <td><a href='cad.php?acao=editar&codigo=<?php echo $pessoa->getCodigo();?>'><img class="icon" src="img/edit.png" alt=""></a></td>
            <td><a href="javascript:excluirRegistro('acao.php?acao=excluir&codigo=<?php echo $pessoa->getCodigo();?>')"><img class="icon" src="img/delete.png" alt=""></a></td>
        </tr>
    <?php } ?>       
    </table>
    
</body>
</html>
