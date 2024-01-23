<?php


function fecha(){ 

$mes = date("n"); $mesArray = array( 1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre" );

 $semana = date("D"); $semanaArray = array( "Mon" => "Lunes", "Tue" => "Martes", "Wed" => "Miercoles", "Thu" => "Jueves", "Fri" => "Viernes", "Sat" => "Sábado", "Sun" => "Domingo", );

 $mesReturn = $mesArray[$mes];
 $semanaReturn = $semanaArray[$semana]; 
$dia = date("d"); $año = date ("Y");
return $semanaReturn." ".$dia." de ".$mesReturn." de ".$año;

 }


function completarCodigoCeros($cadena,$tamano){    
    $p="";
    for(;$tamano> strlen($cadena);$tamano--)
        $p.="0";
    return ($p.$cadena);
	}

function formatearFecha($cadena){
        list($ano,$mes,$dia)=explode("-",$cadena);
	return "$dia/$mes/$ano";
	}

function desformatearFecha($cadena){
	list($dia,$mes,$ano)=explode("/",$cadena);
	return "$ano-$mes-$dia";
	}

function esBisiesto($ano){
    return (($ano%4==0 && $ano%100!=0)||($ano%400==0)?true:false);
}

function num_lunes($mes,$anyo)
{
    $diaS=date("w", mktime(0, 0, 0, $mes, 1, $anyo));

    if ($diaS==1)
    {
        $nLunes=5;
        if ($mes==2 && !esBisiesto($anyo))
            $nLunes=4;
    }
    else
    {
        $nLunes=0;
        if ($diaS==0)
            $diaS=7;
        $dia=9-$diaS;
        while(checkdate($mes, $dia, $anyo))
        {
            $nLunes++;
            $dia=$dia+7;
        }
    }
    return $nLunes;
}

function FormatearCodigoProgramatico($ACC,$AE,$OAE){
	if(substr($ACC,0,3)=="ACC")
		return $ACC."-".completarCodigoCeros($AE,7)."-".completarCodigoCeros($OAE,2);
	return $ACC."-".substr($ACC,3).completarCodigoCeros($AE,2)."-".completarCodigoCeros($OAE,2);	
	}

function ordenar_afectacion_p($a, $b) 
{
    $retval = strnatcmp($a['id_estructura_p'], $b['id_estructura_p']);
    if(!$retval)
        return strnatcmp($a['codigo_p'], $b['codigo_p']); 
    return $retval; 
}

function ordenar_afectacion_c($a, $b) 
{
    $retval = strnatcmp($a['id_estructura_p'], $b['id_estructura_p']);
    if(!$retval)
        return strnatcmp($a['codigo_c'], $b['codigo_c']); 
    return $retval; 
}

function ordenar_afectacion_c_contab($a, $b) 
{
    $retval = strnatcmp($a['codigo_c'], $b['codigo_c']);
    if(!$retval)
        return strnatcmp($a['id_estructura_p'], $b['id_estructura_p']); 
    return $retval; 
}

function ordenar_banco($a, $b) 
{
    $retval = strnatcmp($a['codigo_p'], $b['codigo_p']);
    if(!$retval)
        return strnatcmp($a['codigo_c'], $b['codigo_c']); 
    return $retval; 
}

function ordenar_recibos_pago($a, $b) 
{
    $retval = strnatcmp($a['cod_ficha'], $b['cod_ficha']);
    if(!$retval)
        return strnatcmp($a['cod_concepto'], $b['cod_concepto']); 
    return $retval; 
}

function ordenar_listado_banco($a, $b) 
{
    $retval = strnatcmp($a['tipo'], $b['tipo']);
    if(!$retval)
        return strnatcmp($a['cod_ficha'], $b['cod_ficha']); 
    return $retval; 
}

function CadenaCeros($tamano){
	$cadena="";
	for($i=0;$i<$tamano;$i++)
		$cadena.="0";
	return $cadena;
	}



function base($num){
	$end=$num-floor($num/10)*10;
	switch ($end){
		case 1: 	return "UNO";
		case 2: 	return "DOS";
		case 3: 	return "TRES";
		case 4: 	return "CUATRO";
		case 5: 	return "CINCO";
		case 6: 	return "SEIS";
		case 7: 	return "SIETE";
		case 8: 	return "OCHO";
		case 9: 	return "NUEVE";
		case 0: 
			if($num==0)	return "CERO";
			else		return "";
		}
	return $end;
	}

//LA FUNCION DECIMOS ES PARA 99 -> 0 Y LLAMA A LA BASE
function decimos($num){
	if($num<10)
		return base($num);
	$ends=$num-floor($num/100)*100;
	$end=$ends-($num-floor($num/10)*10);
	$endd=floor($ends);
	switch ($end){
		case 10: 
			if($ends<16)
				switch($endd){
					case 10: return "DIEZ";
					case 11: return "ONCE";
					case 12: return "DOCE";
					case 13: return "TRECE";
					case 14: return "CATORCE";
					case 15: return "QUINCE";
					}				
			else
				return "DIECI".base($num);
		case 20:
			if($ends==20)	return "VEINTE";
			else 			return "VENTI".base($num);
		case 30:
			if($ends==30)	return "TREINTA";
			else			return "TREINTA Y ".base($num);	
		case 40:
			if($ends==40)	return "CUARENTA";
			else			return "CUARENTA Y ".base($num);
		case 50:
			if($ends==50)	return "CINCUENTA";
			else			return "CINCUENTA Y ".base($num);
		case 60:
			if($ends==60)	return "SESENTA";
			else			return "SESENTA Y ".base($num);
		case 70:
			if($ends==70)	return "SETENTA";
			else			return "SETENTA Y ".base($num);
		case 80:
			if($ends==80)	return "OCHENTA";
			else			return "OCHENTA Y ".base($num);
		case 90:
			if($ends==90)	return "NOVENTA";
			else			return "NOVENTA Y ".base($num);
		case 0:
			return base($num);
		}
	}

//LA FUNCION CIENTOS ES PARA 99 -> 0 Y LLAMA A DECIMOS
function cientos($num){
	if ($num<100) return decimos($num);
	$ends=$num-floor($num/1000)*1000;
	$end=$ends-($num-floor($num/100)*100);
	switch($end){
		case 100:
			if($ends==100)	return "CIEN";
			else			return "CIENTO ".decimos($num);
		case 500:			return "QUINIENTOS ".decimos($num);
		case 900:			return "NOVECIENTOS ".decimos($num);
		case 700:			return "SETECIENTOS ".decimos($num);
		case 0:				return decimos($num);
		default:			return base($end/100)."CIENTOS ".decimos($num);
		}
	}
//CIENTOSX es para los miles que terminane en 1
function cientos_x($num){
	$endd=$num-floor($num/10)*10;
	$ends=$endd-floor($endd/10)*10;
	$resultado=cientos($num);
	if($ends==1 && $endd!=11)	return substr($resultado,0,strlen($resultado)-1);
	else						return $resultado;
	}

function miles($num){
	if ($num<1000) 	return cientos($num);
	$ends=$num-floor($num/10000)*10000;
	$end=$ends-($num-floor($num/1000)*1000);
	switch ($end){
		case 1000:
			if($ends==1000)	return "MIL";
			else			return "MIL ".cientos($num);
		default:
			$mil=base(floor($num/1000));
			if ($mil==0)		return cientos($num);
			else				return $mil." MIL ".+cientos($num);
		}
	}

function cientos_de_miles($num){
	if($num<1000) return miles($num);
	$ends=floor(($num-floor($num/1000000)*1000000)/1000);
	if($ends==0)
		return cientos($num);
// 	else if($ends==1)
// 		return "mil ".cientos($num);
	return cientos_x($ends)." MIL ".cientos($num);
	}

function millones($num){
	if($num<pow(10,6)) return cientos_de_miles($num);
	$ends=floor($num/pow(10,6));
	$end=$ends-floor($ends/10)*10;
	$resultado=cientos_de_miles($ends);
	if($end==1){
		$parcial=substr($resultado,0,strlen($resultado)-1);
		if($ends<2)	return $parcial." MILLÓN ".cientos_de_miles($num);
		else		return $parcial." MILLONES ".cientos_de_miles($num);
		}
	return $resultado." MILLONES ".cientos_de_miles($num);
	}

function Numero2Letras($num){
	$num=number_format("$num",2,".","");
	$ArregloNum=explode(".","$num");
	$str=millones($ArregloNum[0]);
	/*if(count($ArregloNum)==2)//si hay decimal		
		$str.=" con ".$ArregloNum[1]."/100";*/			
	return $str;	
	}


function NumeroLetrasDec($num){
	$num=number_format("$num",2,".","");
	$ArregloNum=explode(".","$num");
	$str=millones($ArregloNum[0]);
	if(count($ArregloNum)==2)//si hay decimal		
		$str.=" con ".$ArregloNum[1]."/100";			
	return $str;	
	}

function AumentaCuentaContable($id_codigo_contable){
	$primer_caracter=substr($id_codigo_contable,0,1);
	switch($primer_caracter){
		case "1":
		case "6":		
			return true;
		case "4":
			if(substr($id_codigo_contable,1,1)=="1")//si es 41
				return true;
		}
	return false;	
	}

function mesEnLetras($mes)
{
	if ($mes==1)
		$mes="ENERO";
	elseif ($mes==2)
		$mes="FEBRERO";
	elseif ($mes==3)
		$mes="MARZO";
	elseif ($mes==4)
		$mes="ABRIL";
	elseif ($mes==5)
		$mes="MAYO";
	elseif ($mes==6)
		$mes="JUNIO";
	elseif ($mes==7)
		$mes="JULIO";
	elseif ($mes==8)
		$mes="AGOSTO";
	elseif ($mes==9)
		$mes="SEPTIEMBRE";
	elseif ($mes==10)
		$mes="OCTUBRE";
	elseif ($mes==11)
		$mes="NOVIEMBRE";
	elseif ($mes==12)
		$mes="DICIEMBRE";
	
	return $mes;
}

$ACRONIMOS_CONTABILIDAD="'BNC%','SCO%','CXPSOP','SNO%'";

function CondicionSQLMovimientosContabilidad(){
	$ARREGLO_ACRONIMOS_CONTABILIDAD=explode(",",$GLOBALS["ACRONIMOS_CONTABILIDAD"]);
	$TEMP="C.acronimo_c LIKE ".$ARREGLO_ACRONIMOS_CONTABILIDAD[0];
	for($i=1;$i<count($ARREGLO_ACRONIMOS_CONTABILIDAD);$i++)
		$TEMP.=" OR C.acronimo_c LIKE ".$ARREGLO_ACRONIMOS_CONTABILIDAD[$i];	
	return $TEMP;	
	}//C.acronimo_c LIKE 'BNC%' OR C.acronimo_c LIKE 'SCO%'


function InformacionAniosPresupuestarios(){
	$archivo=fopen("../modulo_administrador/anio_presupuestario.inf","r");
	if (!$archivo)
		return -1;
	$C=0;
	while (!feof($archivo)) {
		$linea = fgets($archivo, 2048);
		$AUX=explode(";",$linea);
		if($C==0){//1er caso, es la cabecera
			$CABECERA=$AUX;
			}
		else{
			for($i=0;$i<count($CABECERA);$i++)
				$RETORNO[$C-1][$CABECERA[$i]]=$AUX[$i];
			}
		$C++;
		}
	fclose($archivo);
	return $RETORNO;
	}

function InformacionGlobal(){
	$archivo=fopen("../modulo_administrador/variables_fijas.inf","r");
	if (!$archivo)
		return -1;
	$C=0;
	while(!feof($archivo)){
		$linea = fgets($archivo, 2048);
		$AUX=explode(";",$linea);
		$RETORNO[$C]["nombre_variable"]=$AUX[0];
		$RETORNO[$C]["valor_variable"]=$AUX[1];
		$C++;
		}
	fclose($archivo);
	return $RETORNO;
	}


$NDigitos_Codigo_Documento=10;
$NDigitos_Codigo_SolicitudPago=10;
$NDigitos_Codigo_Comprobante=10;
$NDigitos_Codigo_IB=10;


function LimpiarCadena($str){
	return ereg_replace("[^A-Za-z0-9 áÁéÉíÍóÓúÚñÑ]","",$str);
	}


function CalcularEdad($fecha_nac){

	$dia_act=date("d");
	$mes_act=date("m");
	$anyo_act=date("Y");

		//$fecha_nac="01/12/1979"; //fecha de nacimiento
		list($dia,$mes,$anyo)=explode("/",$fecha_nac);
/*					$fecha_nac="1979-12-01"; //fecha de nacimiento
						list($anyo,$mes,$dia)=explode("-",$fecha_nac);
*/
		$anyos=$anyo_act-$anyo;
		$meses=$mes_act-$mes;
		if ($anyos==0)
		{
			if ($meses>=0)
			{
				$dias=$dia_act-$dia;
				if ($dias<0)
				{
					$meses--;
					$mes_ant=$mes_act-1;
					$num_dias=date("t", mktime(0, 0, 0, $mes_ant, 1, $anyo_act));
					$dias=$num_dias-$dia+$dia_act;
				}
			}
		}
		else if ($anyos>0)
		{
			$dias=$dia_act-$dia;
			if ($meses==0)
			{
				if ($dias<0)
				{
					$anyos--;
					$meses=12;
				}
			}
			elseif ($meses<0)
			{
				$anyos--;
				$meses=12+$meses;
			}
	
			if ($dias<0)
			{
				$meses--;
				$mes_ant=$mes_act-1;
				$num_dias=date("t", mktime(0, 0, 0, $mes_ant, 1, $anyo_act));
				$dias=$num_dias-$dia+$dia_act;
			}
		}
//las variables finales son:

$anyos;
$meses;
$dias;

	return $anyos;
	
	
}

?>