<!DOCTYPE html>
<html>
<head>
  <title>Sistema de Questões</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.theme.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

  <script type="text/javascript" src="jquery-ui/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="jquery-ui/jquery-ui.min.js"></script>
  <script type="text/javascript" src="funcoes.js"></script>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="Index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="tabela.php">Gabaritos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="grafico.php">Gráficos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="relatorios.php">Relatório</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle = "modal" data-target = "#meuModal">Sair</a>

         <div id="meuModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Deseja sair do sistema?</h4>
          <button type="button" class="close" data-dismiss = "modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Deseja sair do sistema?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss = "modal" >Cancelar</button>
          <a class="navbar-brand" href="../index.html">
            <button type="button" class="btn btn-danger">Sair</button>
          </a>
        </div>
      </div>
    </div>
  </div>

      </li>
    </ul>
  </div>
</nav>


 



