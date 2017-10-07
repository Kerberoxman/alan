<?php
	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$conexion = @mysql_connect("localhost","root","")or die("No se conecta porque: ".mysql_error());
	mysql_select_db ("nube",$conexion);
	
	$insert = ("INSERT INTO registros (id,nombre,apellido,usuario,password) values ('','$nombre','$apellido','$usuario','$password')");
	mysql_query($insert,$conexion)or die ("Error: " . mysql_error());
	header("location:index.php");

?>