<?php
	include 'connect/connect.php';
	
	$acao = '';
	if (isset($_GET["acao"]))
		  $acao = $_GET["acao"];
	
	if ($acao == "logoff"){
		session_start();
		session_destroy();
		header("location:login.php");	
	}else{
		if (isset($_POST["acao"])){
			$acao = $_POST["acao"];
			if ($acao == "login"){
				$user = $_POST['user'];
				$senha = $_POST['pass'];
				logar($user,$senha);
			}
		}
	}
	
	function logar($user,$senha, $tipo){
		$sql = "SELECT * FROM ".$GLOBALS['tb_login'].
		       " WHERE nome = '$user'";
		$result = mysqli_query($GLOBALS['conexao'],$sql);
		$senhaBD = "";
		$usuario = "";
		$nome = "";
        $tipo = 0;

		while ($row = mysqli_fetch_array($result)){
			$senhaBD = $row['senha'];
			$usuario = $row['nome'];
			$nome = $row['nome'];
            $tipo = $row['tipo'];
		}
		
		if ($senha == $senhaBD){
			session_start();
			$_SESSION['nome'] = $usuario;
			$_SESSION['nome'] = $nome;
            if ($tipo == 1){
                header("location:adm.php");	
            }elseif ($tipo == 2){
                header("location:professor.php");	
            }else
			header("location:prova.php");	
		}else 
			header("location:index.php");						
	}
?>	
