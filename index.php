<!Doctype html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="login.css">
</head>

<body>
		<div id="formulario">
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<h2>Login</h2>
				<input type="text" name="usuario" placeholder="Usuario" required>
				<input type="password" name="password" placeholder="********" required>
				<input class="boton" type="submit" name="entrar" value="Entrar">
		</div>

		<?php
			if(isset($_POST['entrar'])){
				$usuario = $_POST['usuario'];
				$password = $_POST['password'];
				
				if ($usuario == 'alan' and $password == '12345') {
					header("location:main.php");
				}
				else{
					header("location:index.php");
				}
				
			}
		?>
</body>
</html>