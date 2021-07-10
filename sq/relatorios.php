<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tabela Gabaritos</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<body>
	<br>
		<br>
<div class="container">
	<h3>Lista de gabaritos</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Curso</th>
      <th>Relátorio</th>
    </tr>
    <tbody>
    	<td>Informações</td>
    	<td>Aluno/Surso</td>
    	<td><a href="relatorio.php" target="_blank" class="btn btn-success btn-sm">
    	Gerar</a></td>
    </tbody>
  </thead>
  
  
</table>
   <a href="Index.php">
   	<button type="button" class="btn btn-secondary">Voltar</button>
   </a>

</div>
</body>
</html>