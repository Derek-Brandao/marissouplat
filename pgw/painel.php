<?php
session_start();
if ($_SESSION['logado']==1){
    
} else {
    header('location:errorAcesso.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body id="fiz" style="background-image: url(./img/fundo4.jpg);background-size:cover">
    <center>
	<div style="background-color: none;border: 2px white solid; height:150px; width:300px; border-radius: 20px">
<br/>
	<a style="background-color: tranparent;" class="btn1" href="inserir.html">Inserir Produto</a><br/><br/>
        <a class="btn2" href="crescente.php">Listar - Crescente de preço</a><br/><br/>
        <a class="btn3" href="decrescente.php">Listar - Decrescente de preço</a><br/><br/>
    </div>
    <a class="sair" href="sair.php">Sair</a>
</center>
</body>
</html>


