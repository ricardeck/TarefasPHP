<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Tarefas</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="https://kit.fontawesome.com/8786c39b09.js"></script>
</head>
<body>
	<?php

	session_start();

	$usuario = $_SESSION['login'];

	if(!isset($_SESSION['login'])){
		header('Location: index.php');
	}

	?>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container">
    <li class="nav-item">
      <a class="navbar-brand" href="listar_tarefas.php">Todas</a>
      <a class="navbar-brand" href="listar_tarefas_realizadas.php">Realizadas</a>
      <a class="navbar-brand" href="listar_tarefas_nao_realizadas.php">Não Realizadas</a>
      <a class="navbar-brand" href="cadastrar_tarefa.php">Cadastrar</a>
    </li>
  </div>
</nav>
<div class="container" style="margin-top: 40px">
	<h3>Lista de Tarefas</h3>
	<br>
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Descrição Tarefa</th>
      <th scope="col">Data da Criação</th>
      <th scope="col">Data de Execução</th>
      <th scope="col">Ação</th>


    </tr>
  </thead>
    	<?php
    		include 'conexao.php';
    		$sql = "SELECT * FROM `tarefas`";
    		$busca = mysqli_query($conexao,$sql);

    		while ($array = mysqli_fetch_array($busca)) {
    			
    			$id_tarefas = $array['id_tarefas'];
    			$desctarefa = $array['desctarefa'];
    			$datacriacao = $array['datacriacao'];
    			$dataexectarefa = $array['dataexectarefa'];
    	?>
    <tr>
      <td><?php echo $desctarefa ?></td>
      <td><?php echo $datacriacao ?></td>
      <td><?php echo $dataexectarefa ?></td>
      <td>
      	<a class="btn btn-sm btn-primary" href="realizar_tarefa.php?id=<?php echo $id_tarefas ?>" role="button"><i class="far fa-check-circle" title="Realizada"></i></a>

      	<a class="btn btn-sm btn-warning" href="editar_tarefa.php?id=<?php echo $id_tarefas ?>" role="button"><i class="far fa-edit" title="Editar"></i></a>

      	<a class="btn btn-sm btn-danger" href="deletar_tarefa.php?id=<?php echo $id_tarefas ?>" role="button"><i class="far fa-trash-alt" title="Deletar"></i></a>
      </td>

    </tr>
<?php 
}
?>

    </tr>
</table>
<div style="text-align: right;">
	<a href="cadastrar_tarefa.php" role="button" class="btn btn-sm btn-primary">Cadastrar Tarefa</a>
</div>
</div>

	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>