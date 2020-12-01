<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body style="background-image: url('./img/fundo4.jpg'); background-repeat: no-repeat; background-size: cover;">
<center>
<div style="position: relative; bottom: 390px">
<?php

$conexao = new PDO('mysql:host=localhost:3306;dbname=meubanco', 'root', '');

$result = $conexao -> query("SELECT nome, preco, estoque FROM produto order by preco desc");

if($result){
	echo '<big><big><big><table border="1" style="border: white;color:white; 3px solid; position: relative; bottom: 110px"><tr><td>' . 'Produto' . '</td><td>' . 'Preco' . '</td><td>' . 'Estoque' . '</td></tr><br/></big></big></big>';
    	foreach($result as $row) {
 	echo '<big><big><big><tr><td>' . $row['nome'] . '</td><td>' . $row['preco'] . '</td><td>' . $row['estoque'] . '</td></tr><br/></big></big></big>';
	}
}

?>
</div>
</center>
</body>
</html>