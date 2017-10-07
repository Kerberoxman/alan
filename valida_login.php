<?php
	
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$conexion = @mysql_connect("localhost","root","","nube")or die("No se conecta porque: ".mysql_error());
	mysql_select_db ("nube",$conexion);

	$query = mysql_query("SELECT * from registros where usuario = '$usuario' and password = '$password'",$conexion); 
	$resultado = mysql_num_rows($query);

	if($resultado>0){
		header("location:main.php");
	}
	else{
		header("location:index.php");
	}
?>