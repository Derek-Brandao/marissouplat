<?php
session_start();
if (!$_SESSION['usuario']){
    header("location:painel.php");
} 
else {
    header("location:projeto4.php");
}

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $estoque = $_POST["estoque"];

    $conexao = new PDO('mysql:host=localhost:3306;dbname=meubanco', 'root', '');

    $inserir = $conexao -> exec("INSERT INTO produto (nome, preco, estoque) VALUES ('$nome', '$preco', '$estoque')");


?>