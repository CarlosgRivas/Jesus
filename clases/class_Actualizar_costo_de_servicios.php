<?php
//include("class_ConexionBD.php");
include("../conexion.php");
class Actualizar_costo_de_servicios //contiene las funciones propias parainsertar o modificar la bd
{
	
	private $servicios;
	private $monto;
	private $fecha;
	
	
	public function set($id,$valor) //esta funcion asigna los valores que vienen del Control a las variablis privadas de la clase
	{
		eval('$this->'."$id='$valor';");
		//$this->id_cargo=$valor;
	}	
	
	public function guardar_Actualizar_costo_de_servicios(){
		
	
		$bd = new database();
		$connection = $bd->conectar();
		
		$query="SELECT * FROM actualizar_costo WHERE codigo='".$this->servicios."' AND fecha='".$this->fecha."'";
		$row = $bd->buscar($query,$connection);
//var_dump($query);
		if($row){
			$query4 = "UPDATE actualizar_costo SET monto = '".$this->monto."' WHERE codigo='".$this->servicios."' AND fecha='".$this->fecha."'";
				$row4 = $bd->guardar($query4,$connection);
				if($row4)
				{	return 1;}
				else
				{return 0;}

		}
		else{
				$query1 = "INSERT INTO actualizar_costo(codigo_monto,monto,fecha,codigo)
				 VALUES ('','".$this->monto."', '".$this->fecha."', '".$this->servicios."')";	
				$row1 = $bd->guardar($query1,$connection);
				if(row1)
				{return $row1;}
				else
				{	return 0;}			

			}
				
	}

function listar_monto()
{

			
			$bd = new database();
			
			$connection = $bd->conectar();
			$query="SELECT * FROM actualizar_costo";
			$row = $bd->buscar($query,$connection);
			//var_dump($row);
			if(row)
				return $row;
			
			else
				return 0;
		

}

}//fin de la clase
