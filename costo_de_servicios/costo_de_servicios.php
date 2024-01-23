<?php
include("../include/inc_cabeceras.php");
include_once("../include/funciones_php.php");
//session_start();echo"<INPUT type='hidden' id='nombre_p' value='$_SESSION[nombre]'>"; 
?>
<html>
	<head>
		<title> Actualizar Costos de servicios </title>
		<meta name="GENERATOR" content="Quanta Plus">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	</head>
<body onload="llenar_select_servicio(); cargar_lista_montos();"> 
<form id="formActMonto">
<div class="container-fluid">
			<div class="page-header">
			  <center><h1 class="text-titles"><p style="color:#244CD0">.:Actualización de los Costos de Servicios del CLAP:.</p></h1></center>
			</div>
		</div>
<table align="center" >
<tr><td height='25'></td></tr>
	
	
	<tr><td><table align="center">

        
        <tr><td align='right' height='25px'><b>Servicio:</td><td width='5px'>
		<td>
			<select  id="id_servicio">
			</select>
	</td></tr>

	<tr><td align='right' height='25px'><b>Monto:</td><td width='5px'><td><input id="id_monto" type="text"></td></tr>
	<tr><td align='right' height='25px'><b>Fecha:</td><td width='5px'><td><input id="id_fecha" type="date"></td></tr>
	
		
	</table></td></tr>
	<tr><td height='25'></td></tr>
	<tr><td align='center' colspan='3'>	
							<button id="btn_guardar" type="button" onclick="guardar_Actualizar_costo_de_servicios();"><img src="../img/guardar.png" width="22px" height="22px" style='cursor:pointer'><br><b>Guardar</button></b></button>

							<button id="btn_limpiar" type="button" onclick="limpiar_Actualizar_costo_de_servicios();"><img src="../img/limpiar.png" width="22px" height="22px" style='cursor:pointer'><br><b>Cancelar</b></button>
							
							<button id="btn_eliminar" type="button" onclick="costo_de_servicios();"><img src="../img/anular.png" width="22px" height="22px" style='cursor:pointer'><br><b>Eliminar</b></button>
							
							<button id="btn_imprimir" type="button" onclick="costo_de_servicios();"><img src="../img/imprimir.png" width="22px" height="22px" style='cursor:pointer'><br><b>Imprimir</b></button></td></tr>

	<tr><td height='20'></td></tr>

<tr>
<td align="center" colspan="3">
<table style="background-color : #ffffff; font-family : 'Arial'; font-size : 12px; width : 800px;" align="center">
				<tbody>
					
				<tr align="center"  bgcolor="#E92613">
					<td width="30%" height="30px"><font color="#ffffff"><b>Nro</b></font></td>
					<td width="30%" height="30px"><font color="#ffffff"><b>Servicios</b></font></td>
					<td width="25%" height="20px"><font color="#ffffff"><b>Monto</b></font></td>
					<td width="15%" height="20px"><font color="#ffffff"><b>Fecha</b></font></td>
					
				</tr>
				</tbody>
			</table>
			<div style="height:100px; width:800px; overflow : auto;">
			<table align="center" style="background-color : #bfbfbf; width : 800px;" height="100px" border="1">
			<col width="30%">
			<col width="30%">
			<col width="25%">
			<col width="15%">
			<tbody id="lista_montos"></tbody></table>
			</div>

 </td>
</tr>
<tr><td height='5'></td></tr>

</table>
</form>
</body>
</html>