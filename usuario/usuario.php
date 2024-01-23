<?php
include("../include/inc_cabeceras.php");
include_once("../include/funciones_php.php");
//session_start();echo"<INPUT type='hidden' id='nombre_p' value='$_SESSION[nombre]'>"; 
?>
<html>
	<head>
		<title> Usuario </title>
		<meta name="GENERATOR" content="Quanta Plus">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
	</head>
<body bgcolor="#A6AFD2" onLoad="mostrar_lista_usuario1(); desactivar_campos_usuario11();">
<form id="formUsuario">
	<div class="container-fluid">
			<div class="page-header">
			  <center><h1 class="text-titles"><p style="color:#244CD0">.:Ingreso De Usuario:.</p></h1></center>
			</div>
		</div>
<table align="center" >
<tr><td height='25'></td></tr>
	
	<tr><td><table align="center" >
		<td height='10px'></td></tr>
	<tr ><td height='25px'align='right' ><b>Usuario: </b></td>
		<td width='5px'></td>
		<td height='20px'><input id="id_usuario" type="text">
			<img src="../img/buscar.png" width="22px" height="22px" style='cursor:pointer' onclick="buscar_usuario();">
		</td></tr>
	<tr><td align='right' height='25px'><b>Contraseña: </b></td><td height='10px'></td><td><input id="id_contrasena" type="password"></td></tr>
	<tr><td align='right' height='25px'><b>Nombres: </b></td><td height='10px'></td><td><input id="id_nombre" type="text"></td></tr>
	<tr><td align='right' height='25px'><b>Tipo de Usuario:</b></td><td height='10px'></td>
		<td><select id="id_tipo" onclick="activar_edificio();">
		<option value="" selected >Seleccione...</option>
		<option value="Administrador">Administrador</option>
		<option value="Jefe">Jefe de Calle</option>
		</select></td></tr>
	<tr><td align='right' height='25px'><b>Edificio:</b></td><td height='10px'></td>
		<td><select id="id_edificio">
		<option value="" selected >Seleccione...</option>
		<option value="Cumanacoa">Cumanacoa</option>
		<option value="Santa_fe">Santa Fé</option>
		<option value="Bermudez">Bermudez</option>
		</select></td></tr>

	</table></td></tr>
	<tr><td height='25'></td></tr>
	<tr><td align='center' colspan='3'>	
							<button id="btn_guardar" type="button" onclick="guardar_usuario();"><img src="../img/guardar.png" width="22px" height="22px" style='cursor:pointer'><br><b>Guardar</button></b></button>
							<button id="btn_limpiar" type="button" onclick="limpiar_usuario();"><img src="../img/limpiar.png" width="22px" height="22px" style='cursor:pointer'><br><b>Cancelar</b></button>
							<button id="btn_eliminar" type="button" onclick="eliminar_usuario();"><img src="../img/anular.png" width="22px" height="22px" style='cursor:pointer'><br><b>Eliminar</b></button>
							<button id="btn_imprimir" type="button" onclick="imprimir_usuario();"><img src="../img/imprimir.png" width="22px" height="22px" style='cursor:pointer'><br><b>Imprimir</b></button></td></tr>

	<tr><td height='20'></td></tr>
<tr>
<td align="center" colspan="3">
<table style="background-color : #ffffff; font-family : 'Arial'; font-size : 12px; width : 800px;" align="center" >
				<tbody>
					<!--656262 159296-->
				<tr align="center"  bgcolor="#E92613">
					<td width="30%" height="30px"><font color="#ffffff"><b>Usuario</b></font></td>
					<td width="30%" height="30px"><font color="#ffffff"><b>Nombre</b></font></td>
					<td width="25%" height="20px"><font color="#ffffff"><b>Tipo</b></font></td>
					<td width="15%" height="20px"><font color="#ffffff"><b>Acción</b></font></td>
					
				</tr>
				</tbody>
			</table>
			<div style="height:200px; width:800px; overflow : auto;">
			<table align="center" style="background-color : #bfbfbf; width : 800px;" height="200px" border="1">
			<col width="30%">
			<col width="30%"><!--se colocan los anchos de las columnas q se crean en agenda.js este ancho es fijo y asi no hay problema en algunos caso-->
			<col width="25%">
			<col width="15%">
			<tbody id="lista_usuario"></tbody></table>
			</div>

 </td>
</tr>
<tr><td height='5'></td></tr>

</table>
</form>
</body>
</html>