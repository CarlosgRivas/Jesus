<?php
//include("class_ConexionBD.php");
include("../conexion.php");
class Arreglo //contiene las funciones propias parainsertar o modificar la bd
{
	
	private $titulo;
	private $opc;
	//private $nombre;
	//private $tipo;
	
	public function set($id,$valor) //esta funcion asigna los valores que vienen del Control a las variablis privadas de la clase
	{
		eval('$this->'."$id='$valor';");
		//$this->id_cargo=$valor;
	}	
	
	public function guardar_usuario(){
		
	
		$bd = new database();
		$connection = $bd->conectar();
		
		//$query="SELECT * FROM usuario WHERE usuario='".$this->usuario."'";
		//$row = $bd->buscar($query,$connection);
	//var_dump($row);
		/*if($row){
			$query4 = "UPDATE usuario SET contrasenia = '".$this->contrasena."', nombre = '".$this->nombre."', tipo = '".$this->tipo."' WHERE `usuario`='".$this->usuario."'";
				$row4 = $bd->guardar($query4,$connection);
				if(row4)
				{	return $row4;}
				else
				{return 0;}

		}
		else{*/
				$query1 = "INSERT INTO examen(cod_examen,titulo,descripcion) VALUES ('1','".$this->titulo."', '')";	
				$row1 = $bd->guardar($query1,$connection);
				if(row1)
				{return $row1;}
				else
				{	return 0;}			

			//}
		
		
		//return $row;
				
	}
	/*	public function buscar_usuario(){
			
			$bd = new database();
			
			$connection = $bd->conectar();
			$query="SELECT * FROM usuario WHERE usuario='".$this->usuario."'";
			$row = $bd->buscar($query,$connection);
			if(row)
				return $row;
			else
				return 0;
		}

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

		public function eliminar_usuario(){

		$bd = new database();
		$connection = $bd->conectar();
		$query = "DELETE FROM usuario WHERE usuario='".$this->usuario."'";	
//var_dump($query);
		$row = $bd->eliminar($query,$connection);
		if(row)
			return $row;
		
		else
			return 0;

	}*/

}//fin de la clase
