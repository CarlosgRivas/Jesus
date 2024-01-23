<?php
//include("class_ConexionBD.php");
include("../conexion.php");
class Servicio //contiene las funciones propias parainsertar o modificar la bd
{
	
	private $codigo;
	private $servicio;
	private $descripcion;
	private $costo;
	private $fecha;
	
	public function set($id,$valor) //esta funcion asigna los valores que vienen del Control a las variablis privadas de la clase
	{
		eval('$this->'."$id='$valor';");
		//$this->id_cargo=$valor;
	}	
	
	public function guardar_servicio(){
		
	
		$bd = new database();
		$connection = $bd->conectar();
		
		$query="SELECT * FROM servicios WHERE codigo='".$this->codigo."'";
		$row = $bd->buscar($query,$connection);
	//var_dump($row);
		if($row){
			$query4 = "UPDATE servicios SET  servicios = '".$this->servicio."', descripcion = '".$this->descripcion."', costo = '".$this->costo."', fecha = '".$this->fecha."'  WHERE `codigo`='".$this->codigo."'";
				$row4 = $bd->guardar($query4,$connection);
				if(row4)
				{	return $row4;}
				else
				{return 0;}

		}
		else{
				$query1 = "INSERT INTO servicios(codigo,servicios,descripcion,costo,fecha)
				 VALUES ('".$this->codigo."', '".$this->servicio."', '".$this->descripcion."', '".$this->costo."', '".$this->fecha."')";	
				$row1 = $bd->guardar($query1,$connection);
				if(row1)
				{return $row1;}
				else
				{	return 0;}			

			}
		
		
		//return $row;
				
	}
	
		public function buscar_servicio(){
			
			$bd = new database();
			
			$connection = $bd->conectar();
			$query="SELECT * FROM servicios WHERE codigo='".$this->codigo."'";
			//var_dump($query);
			//echo("entro");
			$row = $bd->buscar($query,$connection);
			
			if(row)
				return $row;
			else
				return 0;
		}

		
		public function buscar_lista_servicio(){
			
			$bd = new database();

			
			$connection = $bd->conectar();
			$query="SELECT * FROM servicios";
			//var_dump($query);
			$row = $bd->buscar($query,$connection);
			if(row)
				return $row;
			else
				return 0;
		}

		
		

		public function eliminar_servicio(){

		$bd = new database();

		$connection = $bd->conectar();
		$query = "DELETE FROM servicios WHERE codigo='".$this->codigo."'";	
        //var_dump($query);
		//echo("elimino");
		$row = $bd->eliminar($query,$connection);
		if(row)
			return $row;
		
		else
			return 0;

	}


}//fin de la clase
