<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuário</title>
	<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
	<div class="container" style="width: 400px; margin-top: 40px">
		<form action="_insert_usuario.php" method="post">
			<div class="form-group">
				<label>Login</label>
				<input type="text" name="login" class="form-control" required autocomplete="off" placeholder="Login">
				<label>Password</label>
				<input id="senha" type="Password" name="password" class="form-control" required autocomplete="off" placeholder="Password">
				<label>Repeat Password</label>
				<input type="Password" name="password2" class="form-control" required autocomplete="off" placeholder="Repeat Password" oninput="validaSenha(this)">
			</div>
			<div style="text-align: right;">
				<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
				<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
			</div>
			
		</form>


	</div>
</body>
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script>
		function validaSenha (input){ 
			if (input.value != document.getElementById('senha').value) {
		    input.setCustomValidity('Senhas não conferem');
		  } else {
		    input.setCustomValidity('');
		  }
		} 
	</script>
</html>