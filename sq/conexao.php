<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "prova";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
	die('Não conectado' .mysqli_error());
}
?>