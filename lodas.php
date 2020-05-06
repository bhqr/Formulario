<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido</title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="stiles.css">

	</head>

	<body >
		<form class="formulario">
		<h1>¡¡FELICIDADES!!</h1>
		<p> Ya estás registrado.
		<br><br>
		  
		<img class="avatar" src="CHECKGRDS.png">
		<br><br>
		<span style="color:#dc143c; font-family:Georgia,Times,serif; font-size:12pt; font-weight:bold">Usuario:
		</span>
		
		<?php
			$nombre = $_POST["nombre"];
			$apellido = $_POST["apellido"];
      		$dni = $_POST["dni"];
      		$naci = $_POST["naci"];
	
			echo $dni;
			echo "<br>" ,$naci;
		?>
		<br>
		<span style="color:#dc143c; font-family:Georgia,Times,serif; font-size:12pt; font-weight:bold">Contraseña:
			</span>		
		<?php

	  		$array = explode("-", $naci);
			$año=$array[0];
			$mes=$array[1];
			$dia=$array[2];
			$contra=$año*$mes+$dia;

			  echo $contra;			  
		?>	    
		<br>
		<P> Gracias por confiar en nosotros.
	</form>
	</body>
	</html>