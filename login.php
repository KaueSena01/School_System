<?php
session_start();
include ('banco_conect/conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
	# code...
	header('location: index.html');
	exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}') ";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
	# code...
	$_SESSION['usuario'] = $usuario;
	header('location: sq/Index.php');
	exit();
}  else {
	$_SESSION['Não Autenticado9'] = true;
	header('location: index.html');
	exit();
}

?>