<?php
include("../include/inc_cabeceras.php");
include_once("../include/funciones_php.php");
//session_start();echo"<INPUT type='hidden' id='nombre_p' value='$_SESSION[nombre]'>"; 
?>
<html>
	<head>
		<title> Jefe de Calle </title>
		<meta name="GENERATOR" content="Quanta Plus">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	</head>
<body onLoad="desactivar_campos_jefe_de_calle();">
<form id="formJefeC">
<div class="container-fluid">
			<div class="page-header">
			  <center><h1 class="text-titles"><p style="color:#244CD0">.:Ingreso De Jefe de Calle:.</p></h1></center>
			</div>
		</div>
<table align="center" >
<tr><td height='25'></td></tr>
	<tr><td><table align="center">
	<tr><td align='right' height='25px'><b>Cédula:</b></td><td width='5px'></td>
		<td><input id="id_cedula" type="text">
			<img src="../img/buscar.png" width="22px" height="22px" style='cursor:pointer' onclick="buscar_jefe_de_C();">
		</td></tr>
	<tr><td align='right' height='25px'><b>Nombre:</b></td><td width='5px'></td><td><input id="id_nombre" type="text"></td></tr>
	<tr><td align='right' height='25px'><b>Apellido:</b></td><td width='5px'></td><td><input id="id_apellido" type="text"></td></tr>
	
	<tr><td align='right' height='25px'><b>Activo:</b></td><td width='5px'></td><td>
       
     <input  type="radio" id="id_estatus1" name="id_estatus" value="si" >
     <label for="si">si</label>
     <input type="radio" id="id_estatus2" name="id_estatus" value="no" >
     <label for="no">no</label>  

		 	
	 <tr><td align='right' height='25px'><b>Edificio:</b></td><td width='5px'></td>
		<td><select id="id_edificio">
		<option value="" selected >Seleccione...</option>
		<option value="Cumanacoa">Cumanacoa</option>
		<option value="Santa fe">Santa Fé</option>
		<option value="Bermudez">Bermudez</option>
		</select></td></tr>
	
	</table></td></tr>
	<tr><td height='25'></td></tr>
	<tr><td align='center' colspan='3'>	
							<button id="btn_guardar" type="button" onclick="guardar_jefe_de_calle();"><img src="../img/guardar.png" width="22px" height="22px" style='cursor:pointer'"><br><b>Guardar</button></b></button>
							<button id="btn_limpiar" type="button" onclick="limpiar_jefe_de_calle();"><img src="../img/limpiar.png" width="22px" height="22px" style='cursor:pointer'"><br><b>Cancelar</b></button>
							<button id="btn_eliminar" type="button" onclick="eliminar_jefe_de_calle();"><img src="../img/anular.png" width="22px" height="22px" style='cursor:pointer'"><br><b>Eliminar</b></button>
							<button id="btn_imprimir" type="button" onclick="imprimir_jefe_de_calle();"><img src="../img/imprimir.png" width="22px" height="22px" style='cursor:pointer'"><br><b>Imprimir</b></button></td></tr>

	<tr><td height='20'></td></tr>

<tr>
<td align="center" colspan="3">
<table style="background-color : #ffffff; font-family : 'Arial'; font-size : 12px; width : 800px;" align="center">
				<tbody>
					
				<tr align="center"  bgcolor="#E92613">
					<td width="20%" height="30px"><font color="#ffffff"><b>Cédula</b></font></td>
					<td width="20%" height="30px"><font color="#ffffff"><b>Nombre</b></font></td>
					<td width="20%" height="20px"><font color="#ffffff"><b>Apellido</b></font></td>
					<td width="20%" height="20px"><font color="#ffffff"><b>Activo</b></font></td>
					<td width="20%" height="20px"><font color="#ffffff"><b>Edificio</b></font></td>
					
				</tr>
				</tbody>
			</table>
			<div style="height:100px; width:800px; overflow : auto;">
			<table align="center" style="background-color : #bfbfbf; width : 800px;" height="100px" border="1">
			<col width="20%">
			<col width="20%">
			<col width="20%">
			<col width="20%">
			<col width="20%">
			<tbody id="lista_jefe_calle"></tbody></table>
			</div>

 </td>
</tr>
<tr><td height='5'></td></tr>

</table>
</form>
</body>
</html>