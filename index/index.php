<?php
include_once("../include/inc_cabeceras.php");
include_once("../include/funciones_php.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>.:SIRC "La Granja:."</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/main.css">
</head>
<body class="cover" style="background-image: url(../assets/img/granja.jpeg);">
	<form autocomplete="off" class="full-box logInForm">
		<p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
		<p class="text-center text-muted text-uppercase">Inicia Sesión en S.I.R.C. "La Granja"</p>
		<div class="form-group label-floating">
			Usuario:
		  <!--<label class="control-label" for="usuario">Usuario:</label>-->
		  <input class="form-control" id="usuario" type="text">
		  <p class="help-block">Escribe tú nombre de usuario</p>
		</div>
		<div class="form-group label-floating">
			Contraseña:
		  <!--<label class="control-label" for="">Contraseña:</label>-->
		  <input class="form-control" id="contrasenia" type="password">
		  <p class="help-block">Escribe tú contraseña</p>
		</div>
		<div class="form-group text-center">
			<input type="submit" value="Iniciar sesión" class="btn btn-raised btn-danger" onclick="acceder_usuario();">
			<input type="reset" value="Cancelar" class="btn btn-raised btn-danger onclick="limpiar_casillas();">
		</div>
				
	</form>
	<!--====== Scripts -->
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/material.min.js"></script>
	<script src="../js/ripples.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>