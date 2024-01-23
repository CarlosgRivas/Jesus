<?php
//include("class_ConexionBD.php");
include("../conexion.php");
class Jefe_de_calle //contiene las funciones propias parainsertar o modificar la bd
{
	
	private $cedula;
	private $nombre;
	private $apellido;
	private $activo;
	private $edificio;
	
		
	public function set($id,$valor) //esta funcion asigna los valores que vienen del Control a las variablis privadas de la clase
	{
		eval('$this->'."$id='$valor';");
		//$this->id_cargo=$valor;
	}	
	
	public function guardar_jefe_de_calle(){
		
	
		$bd = new database();
		$connection = $bd->conectar();
		
		$query="SELECT * FROM jefe_de_calle WHERE cedula='".$this->cedula."'";
		$row = $bd->buscar($query,$connection);
	//var_dump($row);
		if($row){
			$query4 = "UPDATE jefe_de_calle SET nombre = '".$this->nombre."', apellido = '".$this->apellido."', edificio = '".$this->edificio."', activo = '".$this->activo."' WHERE `cedula`='".$this->cedula."'";
				$row4 = $bd->guardar($query4,$connection);
				if(row4)
				{	return $row4;}
				else
				{return 0;}

		}
		else{
				$query1 = "INSERT INTO jefe_de_calle(cedula,nombre,apellido,edificio,activo) VALUES ('".$this->cedula."', '".$this->nombre."', '".$this->apellido."', '".$this->edificio."', '".$this->activo."')";	
				$row1 = $bd->guardar($query1,$connection);
				if(row1)
				{return $row1;}
				else
				{	return 0;}			

			}
		
		
		//return $row;
				
	}
	
		public function buscar_jefe_C(){
			
			$bd = new database();
			
			$connection = $bd->conectar();
			$query="SELECT * FROM jefe_de_calle WHERE cedula='".$this->cedula."'";
			$F=fopen("insertar1.txt","a"); //abre un documento txt con las inserciones que se hacen en la BD el argumento a significa que se agrega el elemento al lado del otro y con w borra la anterior
			fputs($F,"--\n\n".$query."--\n\n");
			
			$row = $bd->buscar($query,$connection);
			if(row)
				return $row;
			else
				return 0;
		}

		public function buscar_lista_jefe_calle(){
			
			$bd = new database();

			
			$connection = $bd->conectar();
			$query="SELECT * FROM jefe_de_calle";
			//var_dump($query);
			$row = $bd->buscar($query,$connection);
			if(row)
				return $row;
			else
				return 0;
		}
/*
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
		public function eliminar_jefe_de_calle(){

		$bd = new database();
		$connection = $bd->conectar();
		$query = "DELETE FROM jefe_de_calle WHERE cedula='".$this->cedula."'";	
//var_dump($query);
		$row = $bd->eliminar($query,$connection);
		if(row)
			return $row;
		
		else
			return 0;

	}


}//fin de la clase
