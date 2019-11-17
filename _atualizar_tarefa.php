<?php

include 'conexao.php';

$id = $_POST['id'];
$desctarefa = $_POST['desctarefa'];

$sql = "UPDATE `tarefas` SET `desctarefa`='$desctarefa'WHERE id_tarefas = $id";


$atualizar = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px; margin-top: 20px">
	<center>
	<h4>Tarefa atualizada com sucesso!</h4>
</center>
	<div style="padding-top: 20px">
		<center>
			<a href="listar_tarefas.php" role="button" class="btn btn-sm btn-primary">Listar Tarefas</a>
		</center>
	</div>
</div>
