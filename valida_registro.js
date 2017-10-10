function validar(){
	var nombre, apellido, usuario, password, expresion;
	nombre = document.getElementById("nombre").value;
	apellido = document.getElementById("apellido").value;
	usuario = document.getElementById("usuario").value;
	password = document.getElementById("password").value;

	if(nombre === "" || apellido === "" || usuario === "" || password === ""){
		alert("Todos los campos son obligatorios.");
		return false;
	}
	else if (nombre.length>20){
		alert("El nombre es muy largo");
		return false;
	}
	else if (apellido.length>20){
		alert("El apellido es muy largo");
		return false;
	}
	else if (usuario.length>20 || password.length>20){
		alert("El usuario y la contraseña deben tener 20 caracteres como maximo");
		return false;
	}
}