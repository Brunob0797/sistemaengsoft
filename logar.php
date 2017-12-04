<link rel="stylesheet" type="text/css" href="style/style.css"></link>

<?php
include "login/conexao.php";
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

$login = $_POST['login'];
$senha = $_POST['senha'];

//Seleciona a tabela no banco
$seleciona = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
$testa = mysqli_query($conexao, $seleciona) or die("N&atilde;o foi possivel selecionar a tabela");

//Verifica se dados estão corretos
$verifica = mysqli_num_rows($testa);

if($verifica > 0){
	$linha = mysqli_fetch_array($testa);
	$id = $linha["id"];
	$login = $linha["login"];
	$senha = $linha["senha"];

	
//Inicia a Seção
session_start();
$_SESSION["id"] = $id;
$_SESSION["login"] = $login;
$_SESSION["senha"] = $senha;

//Fecha o BD
mysqli_close($conexao);
header("Location:index.php");
}

//Erro de Login
else{
mysqli_close($conexao);
echo "
<div align='center'><h1>Usu&aacute;rio e/ou senha inv&aacute;lido(s)!</h1><br />
<h3>Voc&ecirc; ser&aacute; automaticamente redirecionado em 3 segundos.</h3></div>"; 
echo "<meta http-equiv='refresh' content='3;URL=login.php'>"; 
}
?>