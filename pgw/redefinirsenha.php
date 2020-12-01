<html>
	<head>
	<meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" type="text/css" href="main.css">

	<head>
	<body style="background-image: url('uauuu.jpg'); height: 100%; overflow-y:hidden; overflow-x:hidden; background-size: cover;background-repeat: no-repeat; block-size: aut;">
		
		<big><center><big><form action ="validar2.php" method="post" style="color: white; padding: 0; border: 3px dotted white; width: 400;border-radius: 20px; height: 230px; position: relative; top: 300;" id="form">
		<br/>
		Nome: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<Input type="text" id="nome" name="nome" required>
			<p ></p>
			Nova senha: &nbsp;&nbsp;&nbsp;&nbsp;<input id="pass" type="password" name="senha" onchange="valide()" required>
			<p ></p>
			Confirmação: &nbsp;&nbsp;<input id ="pass2" type="password" name="pass2" onmouseout="valide()" onmouseover="valide()" onfocus="valide()" required>
			<p id="conf"></p>
			<center><input type="button" value="Enviar" id="btt" style="height:35px;width:75px;border-radius: 20px; border-style: solid" onclick="submitt()"></center>
		</form></big><center><big>
		<?php
            session_start();
            ini_set('display_errors', 0 );
            error_reporting(0);
                if ($_SESSION["erro"]==1) {
                            echo "<center><h2 style='color: white; position: relative; top: 250px'>&nbsp;&nbsp;&nbsp;Usuário ou senha incorreta.</h2></center>";
                            $_SESSION["erro"] = 0;
                        }
                        else{
                            $nick = $_POST['nome'];
                            $pass = $_POST['pass'];
                            $_SESSION["nick"] = $_POST['nome'];
                            $_SESSION["pass"] = $_POST['pass'];
                            
                        }
                ?>
		<script>
			function valide(){
				var a = document.getElementById("pass").value;
				var b = document.getElementById("pass2").value;
					if(a != b && b != a) {
						document.getElementById("conf").innerHTML = "As senhas não coincidem.";
						document.getElementById("btt").disabled = true;
					} else {
						document.getElementById("conf").innerHTML = "";
						document.getElementById("btt").disabled = false;
					}
			}
			function submitt(){
				var a = document.getElementById("pass").value;
				var b = document.getElementById("pass2").value;
				if(a == b);
					myButton = document.getElementById("btt");
					myButton.type="submit";
			}
		</script>
	</body>
	
</html>