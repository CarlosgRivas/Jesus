<?php

include_once("../clases/class_Actualizar_costo_de_servicios.php"); //se incluye la funcion clas funciones q contiene las otras clases


class Control_Actualizar_costo_de_servicios{

	public function __construct(){
		
		foreach($_POST as $nombre_campo => $valor){
			$asignacion = "\$" . $nombre_campo . "='" . $valor . "';"; //le coloca un $ a todas las var q viene del llamado en agenda.js tantas variables como datos se envien y se crea una cadena con dolar al comienzo de cada variable
			eval($asignacion);//convierte toda la cadena anterior en variables php y se crean las var $accion='guardar o xxxx' $cedula=valor con el valor 
			}
		
		
		switch($accion)
		{
			case "guardar_Actualizar_costo_de_servicios":
				$obj = new Actualizar_costo_de_servicios(); 
				$obj-> set('servicios',$servicios); 
				$obj-> set('monto',$monto); 
				$obj-> set('fecha',$fecha); 
				
				
				 
				$salida=$obj->guardar_Actualizar_costo_de_servicios();
				break;
		
			
			case "listar_monto":
				$obj = new Actualizar_costo_de_servicios(); 
				
				$salida=$obj->listar_monto();
				break;
/*
				case "buscar_lista_jefe_familia":
				$obj = new Jefe_familia(); 
				
				$salida=$obj->buscar_lista_jefe_familia();
				break;


			case "buscar_jefe_familia_acceso":
				$obj = new jefe_familia(); 
				$obj-> set('usuario',$usuario); 
				$obj-> set('contrasena',$contrasena); 
				$salida=$obj->buscar_usuario_acceso();
				break;
	
			case "eliminar_jefe_familia":
				$obj = new Jefe_familia(); 
				$obj-> set('cedula',$cedula); 
				$salida=$obj->eliminar_Actualizar_costo_de_servicios();
				break;
	*/			
		default:
			$salida = "Error acción no encontrada";
			break;
		}
		$datos=json_encode($salida);
		echo $datos;

	}


}
	new Control_Actualizar_costo_de_servicios();
	

?>
