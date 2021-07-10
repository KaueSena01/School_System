<?php
include 'conexao.php';
$sql = mysqli_query($conn, "SELECT * FROM questoes") or die(mysqli_error($conn));

?>