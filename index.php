<!Doctype html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="login.css">
</head>

<body>
		<div id="formulario">
			<form action="valida_login.php" method="post">
				<h2>Login</h2>
				<input type="text" name="usuario" placeholder="Usuario" required>
				<input type="password" name="password" placeholder="********" required>
				<input class="boton" type="submit" name="entrar" value="Entrar">
				
			</form>
			<form action="registro.php">
				<input class="boton" type="submit" name="registrar" value="Registrate">
			</form>
		</div>

</body>
</html>
