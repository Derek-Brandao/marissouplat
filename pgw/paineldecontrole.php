<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-image: url('uauuu.jpg'); height: 100%; overflow-y:hidden; overflow-x:hidden; background-size: cover;background-repeat: no-repeat;">
    <big style="color:white;"><center><h2 style="position:relative; top: 100px;color: white;">Você está logado em:<br/>
    <?php
    session_start();
    ini_set('display_errors', 0 );
    error_reporting(0);
    if ($_SESSION["logado"] != 1) {
        $_SESSION["des"] = 1;
        header('location: projeto2.php');
    }
    $sup = $_SESSION["nm"];
    $sop = $_SESSION["nome"];
    echo $sop;
    echo $sup;
    ?>
    </big></center>
    <form action="destroi.php" style="color: white; padding: 0; border: 3px dotted white; width: 800px;border-radius: 20px; height: 230px; position: relative; top: 300;left: 550px;">
    <input type="submit" value="Deslogar e excluir conta" id="btt" style="position:relative;left:310px;top:150px;height:35px;width:180px;border-radius: 20px; border-style: solid" >
    </form>
    <br/>
    <big><big><a href="index.html" style="position:relative; top: 450px; color: white">Voltar ao Menu</a></big></big>
</body>
</html>