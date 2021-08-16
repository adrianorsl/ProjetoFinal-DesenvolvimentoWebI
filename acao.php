<!DOCTYPE html>
<?php
    require_once "conf/Conexao.class.php";  
    require_once "conf/Crud.class.php"; 
    require_once "autoLoad.php";
    include_once "conf/defaut.inc.php";

    $acao='';
    $codigo='';
    switch($_SERVER['REQUEST_METHOD']){
        case 'GET': {
                    $acao = isset($_GET['acao']) ? $_GET['acao'] : "";
                    $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : 0;
                    } 
                    break;
        case 'POST': {
                    $acao = isset($_POST['acao']) ? $_POST['acao'] : "";
                    $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : ""; 
                    }
                    break;
    }

    if ($acao == "excluir"){
        excluir($codigo);
    }elseif ($acao == "salvar"){
        if ($codigo == 0)
            inserir($codigo);
        else
            editar($codigo);
    }

    // Métodos para cada operação
    function inserir($codigo){
        $pdo = Conexao::getInstance(); 
        $crud = Crud::getInstance($pdo, 'pessoa'); 
        $pessoa = dadosForm();
        
        // Inseri os dados do usuário
        $arrayUser = array('nome' => $pessoa->getNome(), 'cpf' => $pessoa->getCpf(), 'funcao' => $pessoa->getFuncao(), 'tipo' => $pessoa->getTipo(), 'senha' => $pessoa->getSenha());  
        $retorno   = $crud->insert($arrayUser);  

        header("location:cad.php");
    }

    function inserirNota($codigo){
        $pdo = Conexao::getInstance(); 
        $crud = Crud::getInstance($pdo, 'notas'); 
        $aluno = dadosFormNota();
        $arrayUser2 = array('aluno' => $aluno->getAluno(), 'nota' => $aluno->getNota());  
        $retorno2   = $crud->insert($arrayUser2);  

    }

    function editar($codigo){
        $pdo = Conexao::getInstance(); 
        $crud = Crud::getInstance($pdo, 'pessoa'); 
        $pessoa = dadosForm();

        $arrayUser = array('nome' => $pessoa->getNome(), 'cpf' => $pessoa->getCpf(), 'funcao' => $pessoa->getFuncao(), 'tipo' => $pessoa->getTipo(), 'senha' => $pessoa->getSenha());    
        $arrayCond = array('codigo=' => $codigo);  
        $retorno   = $crud->update($arrayUser, $arrayCond);  
        header("location:adm.php");
    }

    function excluir($codigo){
        $pdo = Conexao::getInstance(); 
        $crud = Crud::getInstance($pdo, 'pessoa');

        $arrayCond = array('codigo=' => $codigo);  
        $retorno   = $crud->delete($arrayCond); 
        header("location:adm.php");
    }

    function show($id){
        $pdo = Conexao::getInstance(); 
        $crud = Crud::getInstance($pdo, 'pessoa');  

        $sql        = "SELECT * FROM pessoa WHERE codigo = ?";  
        $arrayParam = array($id);  
        $dados = $crud->getSQLGeneric($sql, $arrayParam, FALSE);  
        $pessoa = new Vinculo;
        $pessoa->buildFromObj($dados);
        return $pessoa;
    }

    // Busca as informações digitadas no form
    function dadosForm(){
        $pessoa = new Vinculo;
        $dados = array();
        $dados['codigo'] = $_POST['codigo'];
        $dados['nome'] = $_POST['nome'];
        $dados['cpf'] = $_POST['cpf'];
        $dados['funcao'] = $_POST['funcao'];
        $dados['tipo'] = $_POST['tipo'];
        $dados['senha'] = $_POST['senha'];
        $pessoa->buildFromArray($dados);
        return $pessoa;
    }

    function dadosFormNota(){
        $aluno = new Nota;
        $dados2 = array();
        $dados2['cod'] = $_POST['cod'];
        $dados2['aluno'] = $_POST['aluno'];
        $dados2['nota'] = $_POST['nota'];
        $aluno->buildFromArray($dados2);
        return $aluno;
    }
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