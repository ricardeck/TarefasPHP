<?php

include 'conexao.php';
include 'script/password.php';


$login = $_POST['login'];
$senha = $_POST['password'];


$sql = "INSERT INTO `usuarios`(`login`, `password`) VALUES ('$login',md5('$senha'))";

$INSERIR = mysqli_query($conexao,$sql);


?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px; margin-top: 20px">
	<center>
	<h4>Usuário cadastrado com sucesso!</h4>
</center>
	<div style="padding-top: 20px">
		<center>
			<a href="index.php" role="button" class="btn btn-sm btn-primary">Tela de Login</a>
		</center>
	</div>
</div>