<?php
session_start();

//Verifica se já fez login
if(empty($_SESSION["login"]) || empty($_SESSION["senha"])){
	header("Location:login.php");
	}
?>