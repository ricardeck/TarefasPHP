<?php

include 'conexao.php';

$id = $_GET['id'];


$sql = "DELETE FROM `tarefas` WHERE id_tarefas = $id";

$deletar = mysqli_query($conexao,$sql);


?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px; margin-top: 20px">
	<center>
	<h4>Tarefa deletada com sucesso!</h4>
</center>
	<div style="padding-top: 20px">
		<center>
			<a href="listar_tarefas.php" role="button" class="btn btn-sm btn-primary">Listar Tarefas</a>
		</center>
	</div>
</div>