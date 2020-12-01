<?php
session_start();
$_SESSION["nm"] = $_POST['nome'];
$_SESSION["ps"] = $_POST['pass'];
header('location: projeto2.php');
?>