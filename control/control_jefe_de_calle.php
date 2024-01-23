<?php

include_once("../clases/class_jefe_de_calle.php"); //se incluye la funcion clas funciones q contiene las otras clases


class Control_jefe_de_calle{

	public function __construct(){
		
		foreach($_POST as $nombre_campo => $valor){
			$asignacion = "\$" . $nombre_campo . "='" . $valor . "';"; //le coloca un $ a todas las var q viene del llamado en agenda.js tantas variables como datos se envien y se crea una cadena con dolar al comienzo de cada variable
			eval($asignacion);//convierte toda la cadena anterior en variables php y se crean las var $accion='guardar o xxxx' $cedula=valor con el valor 
			}
		
		
		switch($accion)
		{
			case "guardar_jefe_de_calle":
				$obj = new Jefe_de_calle(); 
				$obj-> set('cedula',$cedula); 
				$obj-> set('nombre',$nombre);
				$obj-> set('apellido',$apellido); 
				$obj-> set('activo',$activo);
				$obj-> set('edificio',$edificio);
				 
								
				 
				$salida=$obj->guardar_jefe_de_calle();
				break;
		
				case "buscar_jefe_C":
				$obj = new Jefe_de_calle(); 
				$obj-> set('cedula',$cedula); 
				$salida=$obj->buscar_jefe_C();
				break;

				case "buscar_lista_jefe_calle":
				$obj = new Jefe_de_calle(); 
				
				$salida=$obj->buscar_lista_jefe_calle();
				break;

/*
			case "buscar_usuario_acceso":
				$obj = new Usuario(); 
				$obj-> set('usuario',$usuario); 
				$obj-> set('contrasena',$contrasena); 
				$salida=$obj->buscar_usuario_acceso();
				break;
			*/	
			case "eliminar_jefe_de_calle":
				$obj = new Jefe_de_calle(); 
				$obj-> set('cedula',$cedula); 
				$salida=$obj->eliminar_jefe_de_calle();
				break;
				
		default:
			$salida = "Error acción no encontrada";
			break;
		}
		$datos=json_encode($salida);
		echo $datos;

	}


}
	new Control_jefe_de_calle();

?>
