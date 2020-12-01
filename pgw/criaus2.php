<?php
session_start();
$_SESSION["nm"] = $_POST['nome'];
$_SESSION["ps"] = $_POST['pass'];
$_SESSION["em"] = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['pass'];
$email = $_POST['email'];
$name = md5($nome);
$pass = md5($senha);
$conexao = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexao, "meubanco");
mysqli_query($conexao,"INSERT INTO usuario (nome, senha, email) VALUES ('$name', '$pass', '$email')");
header('location: projeto3.php');
?>