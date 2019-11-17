<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1.0, user-scable=no">
		<title>Tela de Login</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<style type="text/css">
			#tamContainer{
				width: 500px;
				margin-top: 100px;
				-webkit-box-shadow: 10px 10px 29px 0px rgba(197,200,240,1);
				-moz-box-shadow: 10px 10px 29px 0px rgba(197,200,240,1);
				box-shadow: 10px 10px 29px 0px rgba(197,200,240,1);
			}
		</style>
	</head>
	<body>
		<div class="container" id="tamContainer" style="border-radius: 15px; border: 2px solid #f3f3f3">
			<div style="padding: 10px">
				<center>
					<img src="images/login.png" width="125px" height="125px">
				</center>
				<form action="index1.php" method="post" style="margin-top: 20px">
				  <div class="form-group">
				    <input type="text" class="form-control" name="login" placeholder="Login" autocomplete="off" required>
				  </div>
				  <div class="form-group">
				    <input type="password" class="form-control" name="senha" placeholder="Password" autocomplete="off" required>
				  </div>
				  <dir style="text-align: right;">
				  	<button type="submit" class="btn btn-primary mb-2" >Login</button>
				  </dir>
				</form>
			</div>
		</div>
		<div style="margin-top: 10px">
			<center>
				<small>Novo por aqui? <a href="cadastro_usuario.php">Cadastre-se</a></small>
			</center>
		</div>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</body>
</html>