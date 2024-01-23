<?php
include("../include/inc_cabeceras.php");
include_once("../include/funciones_php.php");
//session_start();echo"<INPUT type='hidden' id='nombre_p' value='$_SESSION[nombre]'>"; 
?>
<html>
	<head>
		<title> Servicios </title>
		<meta name="GENERATOR" content="Quanta Plus">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	</head>
<body onLoad="mostrar_lista_servicio2(); desactivar_campos_servicio2();">
<form id="formservicio">
<div class="container-fluid">
			<div class="page-header">
			  <center><h1 class="text-titles"><p style="color:#244CD0">.:Ingreso de los Servicios del CLAP:.</p></h1></center>
			</div>
		</div>
<table align="center" >
<tr><td height='25'></td></tr>
	<tr><td><table align="center">
	<tr><td align='right' height='25px'><b>Código:</td><td width='5px'></td>
		<td><input id="id_codigo" type="text">
			<img src="../img/buscar.png" width="22px" height="22px" style='cursor:pointer' onclick="buscar_servicio();">
		</td></tr>
	<tr><td align='right' height='25px'><b>Servicios:</td><td width='5px'></td><td><input id="id_servicio" type="text" onchange="activar_btn_guardar();"></td></tr>
	<tr><td align='right' height='25px'><b>Descripción:</td><td width='5px'></td><td><textarea id="id_descripcion" onchange="activar_btn_guardar();"></textarea></td></tr>
	<tr><td align='right' height='25px'><b>Costo:</td><td width='5px'></td><td><input id="id_costo" type="text" onchange="activar_btn_guardar();"></td></tr>
	<p><tr><td align='right' height='25px'><b>Fecha: </td><td width='5px'></td><td><input id="id_fecha" type="date" onchange="activar_btn_guardar();"></td></tr></p>


	
	
	</table></td></tr>
	<tr><td height='25'></td></tr>
	<tr><td align='center' colspan='3'>	
							<button id="btn_guardar" type="button" onclick="guardar_servicio();"><img src="../img/guardar.png" width="22px" height="22px" style='cursor:pointer'"><br><b>Guardar</button></b></button>
							<button id="btn_limpiar" type="button" onclick="limpiar_servicio();"><img src="../img/limpiar.png" width="22px" height="22px" style='cursor:pointer'"><br><b>Cancelar</b></button>
							<button id="btn_eliminar" type="button" onclick="eliminar_servicio();"><img src="../img/anular.png" width="22px" height="22px" style='cursor:pointer'"><br><b>Eliminar</b></button>
							<button id="btn_imprimir" type="button" onclick="imprimir_servicio();"><img src="../img/imprimir.png" width="22px" height="22px" style='cursor:pointer'"><br><b>Imprimir</b></button></td></tr>

	<tr><td height='20'></td></tr>

<tr>
<td align="center" colspan="3">
<table style="background-color : #ffffff; font-family : 'Arial'; font-size : 12px; width : 800px;" align="center">
				<tbody>
					
				<tr align="center"  bgcolor="#E92613">
					<td width="20%" height="20px"><font color="#ffffff"><b>Código</b></font></td>
					<td width="20%" height="30px"><font color="#ffffff"><b>Servicios</b></font></td>
					<td width="20%" height="20px"><font color="#ffffff"><b>Descripción</b></font></td>
					<td width="20%" height="15px"><font color="#ffffff"><b>Costo</b></font></td>
					<td width="20%" height="15px"><font color="#ffffff"><b>Fecha</b></font></td>
					
				</tr>
				</tbody>
			</table>
			<div style="height:100px; width:800px; overflow : auto;" >
			<table align="center" style="background-color : #bfbfbf; width : 800px;" height="100px" border="1">
			<col width="20%">
			<col width="20%">
			<col width="20%">
			<col width="20%">
			<col width="20%">
			<tbody id="lista_servicio"></tbody></table>
			</div>

 </td>
</tr>
<tr><td height='5'></td></tr>

</table>
</form>
</body>
</html>