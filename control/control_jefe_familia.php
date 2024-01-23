<?php

include_once("../clases/class_jefe_familia.php"); //se incluye la funcion clas funciones q contiene las otras clases


class Control_jefe_familia{

	public function __construct(){
		
		foreach($_POST as $nombre_campo => $valor){
			$asignacion = "\$" . $nombre_campo . "='" . $valor . "';"; //le coloca un $ a todas las var q viene del llamado en agenda.js tantas variables como datos se envien y se crea una cadena con dolar al comienzo de cada variable
			eval($asignacion);//convierte toda la cadena anterior en variables php y se crean las var $accion='guardar o xxxx' $cedula=valor con el valor 
			}
		
		
		switch($accion)
		{
			case "guardar_jefe_familia":
				$obj = new Jefe_familia(); 
				$obj-> set('cedula',$cedula); 
				$obj-> set('nombre',$nombre);
				$obj-> set('apellido',$apellido); 
				$obj-> set('telefono',$telefono); 
				$obj-> set('fecha_nac',$fecha_nac);
				$obj-> set('edificio',$edificio);
				$obj-> set('apartamento_c',$apartamento_c);
				
				 
				$salida=$obj->guardar_jefe_familia();
				break;
		
			case "buscar_jefe_familia":
				$obj = new Jefe_familia(); 
				$obj-> set('cedula',$cedula); 
				$salida=$obj->buscar_jefe_familia();
				break;

				case "buscar_lista_jefe_familia":
				$obj = new Jefe_familia(); 
				
				$salida=$obj->buscar_lista_jefe_familia();
				break;

/*
			case "buscar_jefe_familia_acceso":
				$obj = new jefe_familia(); 
				$obj-> set('usuario',$usuario); 
				$obj-> set('contrasena',$contrasena); 
				$salida=$obj->buscar_usuario_acceso();
				break;
			*/	
			case "eliminar_jefe_familia":
				$obj = new Jefe_familia(); 
				$obj-> set('cedula',$cedula); 
				$salida=$obj->eliminar_jefe_familia();
				break;
				
		default:
			$salida = "Error acción no encontrada";
			break;
		}
		$datos=json_encode($salida);
		echo $datos;

	}


}
	new Control_jefe_familia();

?>
