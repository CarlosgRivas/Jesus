<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

class database
{
	function conectar()
	{
		$conexion = mysql_connect('localhost','root','123456789')or trigger_error(mysql_error(),E_USER_ERROR); 
		mysql_select_db('sistema',$conexion);
		return $conexion;
	}
	function buscar($query,$conexion)
	{
	 $F=fopen("consultar.txt","a"); //abre un documento txt con las inserciones que se hacen en la BD el argumento a significa que se agrega el elemento al lado del otro y con w borra la anterior
  fputs($F,$query."\n\n");
//usando "a" en lugar de "w", añade cada consulta sin borrar la anterior

		$result = mysql_query($query, $conexion) or die(mysql_error());
		$total_rows=mysql_num_rows($result);
		for($i=0;$i<$total_rows;$i++)
			$row[$i]=mysql_fetch_assoc($result);
		return $row;
	}
	function buscar2($query,$conexion)
	{
		$result = mysql_query($query, $conexion) or die(mysql_error());
		$total_rows=mysql_num_rows($result);
		return $total_rows;
	}
	function guardar($query,$conexion)
	{
	
	$F=fopen("insertar.txt","a");
  	fputs($F,$query."\n\n");
	
		$result = mysql_query($query, $conexion) or die(mysql_error());
		if($result)
			return 1;
		else
			return 0;		
	}

	function eliminar($query,$conexion)
	{
	
	$F=fopen("eliminar.txt","a");
  	fputs($F,$query."\n\n");
	
		$result = mysql_query($query, $conexion) or die(mysql_error());
		if($result)
			return 1;
		else
			return 0;		
	}	
	
}
?>
