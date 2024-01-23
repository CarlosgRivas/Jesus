<?php
//include("class_ConexionBD.php");
include("../conexion.php");
class Jefe_familia //contiene las funciones propias parainsertar o modificar la bd
{
	
	private $cedula;
	private $nombre;
	private $apellido;
	private $fecha_nac;
	private $telefono;
	private $edificio;
	private $apartamento_c;
	
	public function set($id,$valor) //esta funcion asigna los valores que vienen del Control a las variablis privadas de la clase
	{
		eval('$this->'."$id='$valor';");
		//$this->id_cargo=$valor;
	}	
	
	public function guardar_jefe_familia(){
		
	
		$bd = new database();
		$connection = $bd->conectar();
		
		$query="SELECT * FROM jefe_familia WHERE cedula='".$this->cedula."'";
		$row = $bd->buscar($query,$connection);
	//var_dump($row);
		if($row){
			$query4 = "UPDATE jefe_familia SET nombre = '".$this->nombre."', apellido = '".$this->apellido."', fecha_nac = '".$this->fecha_nac."', telefono = '".$this->telefono."',edificio = '".$this->edificio."', apartamento_c = '".$this->apartamento_c."'  WHERE `cedula`='".$this->cedula."'";
				$row4 = $bd->guardar($query4,$connection);
				if(row4)
				{	return $row4;}
				else
				{return 0;}

		}
		else{
				$query1 = "INSERT INTO jefe_familia(cedula,nombre,apellido,fecha_nac,telefono,edificio,apartamento_c)
				 VALUES ('".$this->cedula."', '".$this->nombre."', '".$this->apellido."', '".$this->fecha_nac."', '".$this->telefono."','".$this->edificio."','".$this->apartamento_c."')";	
				$row1 = $bd->guardar($query1,$connection);
				if(row1)
				{return $row1;}
				else
				{	return 0;}			

			}
		
		
		//return $row;
				
	}
	
		public function buscar_jefe_familia(){
			
			$bd = new database();
			
			$connection = $bd->conectar();
			$query="SELECT * FROM jefe_familia WHERE cedula='".$this->cedula."'";
			$F=fopen("insertar1.txt","a"); //abre un documento txt con las inserciones que se hacen en la BD el argumento a significa que se agrega el elemento al lado del otro y con w borra la anterior
			fputs($F,"--\n\n".$query."--\n\n");
			
			$row = $bd->buscar($query,$connection);
			if(row)
				return $row;
			else
				return 0;
		}
/*
		public function buscar_lista_usuario(){
			
			$bd = new database();

			
			$connection = $bd->conectar();
			$query="SELECT * FROM usuario";
			//var_dump($query);
			$row = $bd->buscar($query,$connection);
			if(row)
				return $row;
			else
				return 0;
		}

		/*public function buscar_lista_usuario(){
			
			$bd=new ConexionBD();
			$bd->abrir(BD, SERVIDOR, USUARIO, CLAVE, PUERTO);
			$query="SELECT * FROM usuario";
			echo ($query);
			//$row=$bd->consultar($query, 'ARREGLO');
			$F=fopen("consultar1.txt","a");
			 fputs($F,$query."\n\n");
			
			return $bd->consultar($query,'ARREGLO');
			/*if($row)
				return $row;
			else
				return $bd->getMsgError();*/
		//}

	/*	public function buscar_usuario_acceso(){
			
			$bd = new database();
			
			$connection = $bd->conectar();
			$query="SELECT * FROM usuario WHERE usuario='".$this->usuario."' AND contrasenia='".$this->contrasena."'";
			$row = $bd->buscar($query,$connection);
			if(row)
				return $row;
			else
				return 0;
		}
*/
		public function eliminar_jefe_familia(){

		$bd = new database();
		$connection = $bd->conectar();
		$query = "DELETE FROM jefe_familia WHERE cedula='".$this->cedula."'";	
//var_dump($query);
		$row = $bd->eliminar($query,$connection);
		if(row)
			return $row;
		
		else
			return 0;

	}


}//fin de la clase
