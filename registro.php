<!Doctype html>
<html>
<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/registro.css">
	<script src="valida_registro.js"></script>
</head>

<body>
		<h1>Registro</h1>
		<form action="valida_registro.php" method="post" onsubmit="return validar();">
			<h2  id="titulo">Ingrese sus datos</h2>
			<div id="formulario">
				<input class="input" id="nombre" type="text" name="nombre" placeholder="Nombre" required>
				<input class="input" id="apellido" type="text" name="apellido" placeholder="Apellido" required>
				<input class="input" id="usuario" type="text" name="usuario" placeholder="Usuario" required>
				<input class="input" id="password" type="password" name="password" placeholder="Contraseña" required>
				<input class="boton" type="submit" name="registrar" value="Registrar">
				<p>¿Ya tienes una cuenta? <a href="index.php">Ingresa aqui</a></p>
			</div>	
		</form>

</body>
</html>