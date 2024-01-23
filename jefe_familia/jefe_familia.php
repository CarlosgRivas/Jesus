<?php
include("../include/inc_cabeceras.php");
include_once("../include/funciones_php.php");
//session_start();echo"<INPUT type='hidden' id='nombre_p' value='$_SESSION[nombre]'>"; 
?>
<html>
	<head>
		<title> Jefe de Familia </title>
		<meta name="GENERATOR" content="Quanta Plus">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	</head>
<body onload="desactivar_campos_jefe_fam();">
<form id="formJefeF">
<div class="container-fluid">
			<div class="page-header">
			  <center><h1 class="text-titles"><p style="color:#244CD0">.:Ingreso De Jefe de Familia:.</p></h1></center>
			</div>
		</div>
<table align="center" >
<tr><td height='25'></td></tr>
	<tr><td><table align="center">
	<tr><td align='right' height='25px'><b>Cédula:</b></td><td width='5px'></td>
		<td><input id="id_cedula" type="text">
			<img src="../img/buscar.png" width="22px" height="22px" style='cursor:pointer' onclick="buscar_jefe_familia();">
		</td></tr>
	<tr><td align='right' height='25px'><b>Nombre:</b></td><td width='5px'></td><td><input id="id_nombre" type="text"></td></tr>		
	<tr><td align='right' height='25px'><b>Apellido:</b></td><td width='5px'></td><td><input id="id_apellido" type="text"></td></tr>
	<tr><td align='right' height='25px'><b>Teléfono:</b></td><td width='5px'></td><td><input id="id_telefono" type="text"></td></tr>
	<tr><td align='right' height='25px'><b>Fecha Nacimiento:</b></td><td width='5px'></td><td><input id="id_fecha_nacimiento" type="date"></td></tr>
	</td></tr>
	
	<tr><td align='right' height='25px'><b>Edificio:</b></td><td width='5px'></td>
		<td>
			<select id="id_edificio">
		<option value="" selected >Seleccione...</option>
		<option value="Cumanacoa">Cumanacoa</option>
		<option value="Santa_fe">Santa Fé</option>
		<option value="Bermudez">Bermudez</option>
		</select>
		</td></tr>
	<tr><td align='right' height='25px'><b>Piso:</b></td><td width='5px'></td>
		<td><select id="id_piso">
		<option value="" selected >Seleccione...</option>
		<option value="PB">PB</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		</select></td></tr>
	<tr><td align='right' height='25px'><b>Apartamento:</b></td><td width='5px'></td>
		<td><select id="id_apartamento">
		<option value="" selected >Seleccione...</option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
		</select></td></tr>

		
	</table></td></tr>
	<tr><td height='25'></td></tr>
	<tr><td align='center' colspan='3'>	
							<button id="btn_guardar" type="button" onclick="guardar_jefe_familia();"><img src="../img/guardar.png" width="22px" height="22px" style='cursor:pointer'><br><b>Guardar</button></b></button>
							<button id="btn_limpiar" type="button" onclick="limpiar_jefe_familia();"><img src="../img/limpiar.png" width="22px" height="22px" style='cursor:pointer'><br><b>Cancelar</b></button>
							<button id="btn_eliminar" type="button" onclick="eliminar_jefe_familia();"><img src="../img/anular.png" width="22px" height="22px" style='cursor:pointer'><br><b>Eliminar</b></button>
							<button id="btn_imprimir" type="button" onclick="imprimir_jefe_familia();"><img src="../img/imprimir.png" width="22px" height="22px" style='cursor:pointer'><br><b>Imprimir</b></button></td></tr>

	<!--<tr><td height='20'></td></tr>

<tr>
<td align="center" colspan="3">
<table style="background-color : #ffffff; font-family : 'Arial'; font-size : 12px; width : 700px;" align="center">
				<tbody>
					
				<tr align="center"  bgcolor="#3665b3">
					<td width="30%" height="30px"><font color="#ffffff"><b>Usuario</b></font></td>
					<td width="30%" height="30px"><font color="#ffffff"><b>Nombre</b></font></td>
					<td width="25%" height="20px"><font color="#ffffff"><b>Tipo</b></font></td>
					<td width="15%" height="20px"><font color="#ffffff"><b>Tipo</b></font></td>
					
				</tr>
				</tbody>
			</table>
			<div style="height:80px; width:700px; overflow : auto;">
			<table align="center" style="background-color : #bfbfbf; width : 700px;" height="30px">
			<col width="30%">
			<col width="30%">
			<col width="25%">
			<col width="15%">
			<tbody id="lista_usuario"></tbody></table>
			</div>

 </td>
</tr>-->
<tr><td height='5'></td></tr>

</table>
</form>
</body>
</html>