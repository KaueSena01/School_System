<?php
include 'conexao.php';

$id = $_GET["id"];

if (isset($_GET["id"])) {
	$sql = mysqli_query($conn, "DELETE FROM questoes WHERE id = {$id}") or die(mysqli_error($conn));

	header("location: tabela.php");
}
?>