<?php 
	$destino= "taose2016@gmail.com";
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Nombre: " . $nombre . "\nCorreo: " .$correo . ".\Teléfono: " . $telefono . "\nMensaje: " . $mensaje;

	mail($destino,"Contacto", $contenido);
	header("Location:contacto.html");

 ?>
