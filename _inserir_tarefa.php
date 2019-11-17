<?php
include 'conexao.php';

$desctarefa = $_POST['desctarefa'];
$datacriacao = date("y.m.d");



$sql = "INSERT INTO `tarefas`(`desctarefa`, `datacriacao`) VALUES ('$desctarefa','$datacriacao')";

$inserir = mysqli_query($conexao,$sql);


?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px; margin-top: 20px">
	<center>
	<h4>Tarefa adicionada com sucesso!</h4>
</center>
	<div style="padding-top: 20px">
		<center>
			<a href="listar_tarefas.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
			<a href="cadastrar_tarefa.php" role="button" class="btn btn-sm btn-primary">Cadastrar nova Tarefa</a>
		</center>
	</div>
</div>