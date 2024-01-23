<!--FUNCIONES PHP-->
<?php
//INDICA EL TIPO DE EL TIPO DE ACCESO QUE TENGO SOBRE EL MODULO
//DEPENDE DE LA VARIABLE QUE ESTA DECLARADA EN EL INDEX DE CADA MODULO
//$GLOBALS["MODULO_ACTUAL"]=NOMBRE_DE_MODULO;
include_once("../Include/inc_cabecera.php");
function AccesoModulo()
{
	switch($GLOBALS["MODULO_ACTUAL"])
	{		
		case "MODULO_INICIO": return 1;
		default:					
		return -1;
	}
}

//SI EL ACCESO ES NINGUNO NO HACEMOS MAS NADA
if(AccesoModulo()==0){
	echo "NO TIENE ACCESO A ESTE MODULO";
	echo "<br><a href='#' onclick=\"javascript:document.location.href= '../index/principal.php';\">Volver al Inicio</a>";
	exit;
	}
echo "<INPUT type='hidden' id='MODULO_ACTUAL' value='".$GLOBALS["MODULO_ACTUAL"]."'>";

session_start();
if($_SESSION[usuario]){
	echo "<INPUT type='hidden' id='SESION_INICIADA' value='true'>";
	echo "<INPUT type='hidden' id='usuario' value='$_SESSION[usuario]'>";
	echo "<INPUT type='hidden' id='tipo_usuario' value='$_SESSION[tipo_usuario]'>";
	}
else{
	session_destroy();
	echo "<INPUT type='hidden' id='SESION_INICIADA' value='false'>";
	echo "<INPUT type='hidden' id='usuario' value='0'>";
	echo "<INPUT type='hidden' id='tipo_usuario' value='0'>";
	
	}
?>
