<html>
	<head>
	<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" type="text/css" href="main.css">

	<head>
	<body id="princi" style="background-image: url('beach.jpg');background-size: cover;overflow-y:hidden;">
		<big><form action ="valida.php" method="post" style="background-color:black;border-radius:20px;color: white;width: 370px;border: 1px solid white; height: 200px;position:relative; left: 775px; top: 300px" id="form">
			Nome: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<Input type="text" name="nome" required>
			<p></p>
			Data de nascimento: <input type="text" name="data" required>
			<p></p>
			Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="email" type="email" name="email" onmouseout="valide()" onmouseover="valide()" required>
			<p ></p>
			Confirmação: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id ="email2" type="text" name="email2" onmouseout="valide()" onmouseover="valide()" required>
			<p id="conf"></p>
			<input type="button" value="Enviar" id="btt" onclick="submitt()">
		</form></big>
		<big><big><a href="index.html" style="padding-top: 800px; color: black;position:relative; top: 610px">Voltar ao Menu</a></big></big>
		<script>
			function valide(){
				var a = document.getElementById("email").value;
				var b = document.getElementById("email2").value;
					if(a != b && b != a) {
						document.getElementById("conf").innerHTML = "Os emails não coincidem.";
						document.getElementById("btt").disabled = true;
					} else {
						document.getElementById("conf").innerHTML = "";
						document.getElementById("btt").disabled = false;
					}
			}
			function submitt(){
				var a = document.getElementById("email").value;
				var b = document.getElementById("email2").value;
				if(a == b);
					myButton = document.getElementById("btt");
					myButton.type="submit";
			}
		</script>
	</body>
	
</html>