<?php include 'header.php' ?>
<?php include 'conexao.php';  ?>
<?php include 'listar.php'  ?>
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
      <th>Id</th>
      <th>Alternativa</th>
      <th>Nome</th>
      <th>Curso</th>
      <th>Data</th>
      <th>Ações</th>
    </tr>
  </thead>
   <?php while($questoes = mysqli_fetch_assoc($sql)) { ?>
  <tbody>
  <tr>
  	<th><?php echo $questoes['id'];  ?></th>
  	<td><?php echo $questoes['alternativa'];  ?></td>
  	<td><?php echo $questoes['nome'];  ?></td>
  	<td><?php echo $questoes['curso'];  ?></td>
  	<td><?php echo $questoes['data'];  ?></td>
  	<td>
  		<a href="editar.php?id=<?php echo $questoes['id']; ?>"
  			class="btn btn-success btn-sm">Editar
  		</a>
  		<a href="deletar.php?id=<?php echo $questoes['id']; ?>" 
  			class="btn btn-danger btn-sm">Excluir
  		</a>
  	</td>
  </tr>
  </tbody>
<?php } ?>
</table>
   <a href="Index.php">
   	<button type="button" class="btn btn-secondary">Voltar</button>
   </a>

</div>
</body>
</html>