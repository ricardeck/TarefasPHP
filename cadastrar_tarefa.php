<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tarefas</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<style type="text/css">
			#tamContainer{
				width: 500px;
				margin-top: 40px;
			}
		</style>
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
		<div class="container" id="tamContainer">
			<div style="text-align: center;">
				<h4>Cadastrar Tarefa</h4>
			</div>
			<form action="_inserir_tarefa.php" method="post" style="margin-top: 20px">
			  <div class="form-group">
			    <label>Descrição</label>
			    <input name="desctarefa" type="texto" class="form-control" placeholder="Adicione o texto da sua tarefa." autocomplete="off" required>
			</div>
			  <div style="text-align: right;">
				<a href="listar_tarefas.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
			  	<button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
			  </div>
			</form>
		</div>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</body>
</html>