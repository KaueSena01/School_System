<?php
 include 'header.php';
 ?>
<br>
<br>

		<div class="container col-md-6 offset-md-3">
			<h2 align="center">Sistema de Questões</h2><br>

			<form method="POST" action="salvar.php">

	<div class="row">
    <div class="col">
      <input name="nome" type="text" class="form-control" placeholder="Nome">
    </div>
    <div class="col">
      <select class="form-control" name="curso">
      <option></option>
      <option>Enfermagem</option>
      <option>Informática</option>
      <option>Comércio</option>
      <option>Administração</option>
      </select>
    </div>
    <div class="col">
      <input name="data" type="date" class="form-control">
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
		<button type="subimt" class="btn btn-primary col-md-6 offset-md-3">Cadastrar</button>
</div>
</form>
</body>
</html>

	