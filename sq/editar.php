<?php include 'header.php' ?>
<?php
include 'conexao.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = mysqli_query($conn, "SELECT * FROM questoes WHERE id = $id ");

	$count = (is_array($sql)) ? count($sql) :1 ;
	   if ($count) {
	   	$n = mysqli_fetch_array($sql);
	   	$alternativa = $n['alternativa'];
	   	$nome = $n['nome'];
	   	$curso = $n['curso'];
	   	$data = $n['data'];
	   }
}

if (isset($_POST['editar'])) {
	$id = $_GET['id'];
	$alternativa = $_POST['alternativa'];
	$alternativa_implode = implode(",", $_POST['alternativa']);
	$nome = $_POST['nome'];
	$curso = $_POST['curso'];
	$data = $_POST['data'];

	$query = "UPDATE questoes SET alternativa = '$alternativa_implode', nome = '$nome', curso = '$curso', data = '$data'  WHERE id = $id";

	$consulta = mysqli_query($conn, $query);

	header("location: tabela.php");
}


?>
<br>
<br>
<div class="container col-md-6 offset-md-3">
	<h2 align="center">Sistema de Questões</h2>

	<form method="POST">

		<div class="row">
			<div class="col">
				<input name="nome" type="text" class="form-control" placeholder="Nome" value="<?php echo $nome?>">
			</div>
			<div class="col">
				<select class="form-control" name="curso">
					<option></option>
					<option value="Enfermagem" <?= ($curso == 'Enfermagem')? 'selected': '' ?> >Enfermagem</option>
					<option value="Informática" <?= ($curso == 'Informática')? 'selected': '' ?> >Informática</option>
					<option value="Comércio" <?= ($curso == 'Comércio')? 'selected': '' ?> >Comércio</option>
					<option value="Administração" <?= ($curso == 'Administração')? 'selected': '' ?> >Administração</option>
				</select>
			</div>
			<div class="col">
				<input name="data" type="date" class="form-control" value="<?php echo $data?>">
			</div>
		</div>

		<div id="accordion">
			<h3>Questão 1</h3>
			<div>
				<p>
					<h2>Questão 1</h2>

					<legend>Marque uma alternativa</legend>
					<label>Letra A</label>
					<input type="radio" name="alternativa[0]" value="Q1-a"><br>
					<label>Letra B</label>
					<input type="radio" name="alternativa[1]" value="Q1-b"><br>
					<label>Letra C</label>
					<input type="radio" name="alternativa[2]" value="Q1-c"><br>


				</p>
			</div>

			<h3>Questão 2</h3>
			<div>
				<p>
					<h2>Questão 2</h2>

					<legend>Marque uma alternativa</legend>
					<label>Letra A</label>
					<input type="radio" name="alternativa[3]" value="Q2-a"><br>
					<label>Letra B</label>
					<input type="radio" name="alternativa[4]" value="Q2-b"><br>
					<label>Letra C</label>
					<input type="radio" name="alternativa[5]" value="Q2-c"><br>

				</p>
			</div>

			<h3>Questão 3</h3>
			<div>
				<p>
					<h2>Questão 3</h2>

					<legend>Marque uma alternativa</legend>
					<label>Letra A</label>
					<input type="radio" name="alternativa[6]" value="Q3-a"><br>
					<label>Letra B</label>
					<input type="radio" name="alternativa[7]" value="Q3-b"><br>
					<label>Letra C</label>
					<input type="radio" name="alternativa[8]" value="Q3-c"><br>

				</p>
			</div>

			<h3>Questão 4</h3>
			<div>
				<p>
					<h2>Questão 4</h2>

					<legend>Marque uma alternativa</legend>
					<label>Letra A</label>
					<input type="radio" name="alternativa[9]" value="Q4-a"><br>
					<label>Letra B</label>
					<input type="radio" name="alternativa[10]" value="Q4-b"><br>
					<label>Letra C</label>
					<input type="radio" name="alternativa[11]" value="Q4-c"><br>

				</p>
			</div>
		</div>
		<br><br>
		<button name="editar" type="subimt" class="btn btn-primary col-md-6 offset-md-3">Atualizar</button>
		<br><br>
		<a href="tabela.php" class="btn btn-success col-md-6 offset-md-3">Cancelar</a>
	</div>
</form>
</body>
</html>
