<?php

include 'conexao.php';
include 'script/password.php';

$login = $_POST['login'];
$senha = $_POST['senha'];


$sql = "SELECT `login`, `password` FROM `usuarios` WHERE login = '$login'";
$buscar = mysqli_query($conexao,$sql);
echo $total = mysqli_num_rows($buscar);


if ($total > 0){
	while ($array = mysqli_fetch_array($buscar)) {
			echo $password = $array['password'];
			echo $passworddecod = md5($senha);
		if ($total == 1 && $password == $passworddecod){
				session_start();
				$_SESSION['login'] = $login;
				header('Location: listar_tarefas.php');
		}else{
			header('Location: erro_usuario.php');
		}
	}
} else {

			header('Location: erro_usuario.php');
}



?>