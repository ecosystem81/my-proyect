<?php 
	$destino= "taose2016@gmail.com";
	$nombre = $_post["nombre"];
	$correo = $_post["correo"];
	$telefono = $_post["telefono"];
	$mensaje = $_post["mensaje"];
	$contenido = "Nombre: " . $nombre . "\nCorreo: " .$correo . ".\Teléfono: " . $telefono . "\nMensaje: " . $mensaje;

	mail($destino,"Contacto", $contenido);
	header("Location:contacto.html");

 ?>