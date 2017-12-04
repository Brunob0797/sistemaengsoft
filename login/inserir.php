<?php 
// Conecta banco de dados
include("conexao.php");

//Obter valores de formulário
$login = $_POST['login'];
$senha = $_POST['senha'];

//Inserir todos os parâmetros na base de dados
//O campo id é auto increment
mysqli_query($conexao, "insert into usuarios(login, senha) values('$login','$senha')");

//Conexão com o banco Fechar
mysqli_close($conexao);
echo"<script> location = 'cadastro.php';
alert('Usuário cadastrado com sucesso')</script>"
?>