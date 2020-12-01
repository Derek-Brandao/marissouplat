<?php
session_start();
$nome = $_POST['nome'];
$senha = base64_encode($_POST['senha']);

$conexao = new PDO('mysql:host=localhost:3306;dbname=meubanco', 'root', '');

$query = $conexao -> prepare("SELECT nome,senha FROM usuario WHERE nome='$nome' AND senha='$senha'");
$query -> execute();
$contar = $query -> rowCount();

if($contar > 0){
    $_SESSION['logado']= 1;
    header('location:painel.php');
}else{
    header('location:error.php');
}
?>