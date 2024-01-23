<?php

include_once("../clases/class_servicio.php"); //se incluye la funcion clas funciones q contiene las otras clases


class Control_servicio{

	public function __construct(){
		
		foreach($_POST as $nombre_campo => $valor){
			$asignacion = "\$" . $nombre_campo . "='" . $valor . "';"; //le coloca un $ a todas las var q viene del llamado en agenda.js tantas variables como datos se envien y se crea una cadena con dolar al comienzo de cada variable
			eval($asignacion);//convierte toda la cadena anterior en variables php y se crean las var $accion='guardar o xxxx' $cedula=valor con el valor 
			}
		
		
		switch($accion)
		{
			case "guardar_servicio":
				$obj = new Servicio(); 
				$obj-> set('codigo',$codigo); 
				$obj-> set('servicio',$servicio);
				$obj-> set('descripcion',$descripcion); 
				$obj-> set('costo',$costo); 
				$obj-> set('fecha',$fecha);
				 
				$salida=$obj->guardar_servicio();
				break;
		
			case "buscar_servicio":
				$obj = new Servicio(); 
				$obj-> set('codigo',$codigo); 
				$salida=$obj->buscar_servicio();
				break;


			case "buscar_lista_servicio":
				$obj = new Servicio(); 
				
				$salida=$obj->buscar_lista_servicio();
				break;

				/*

			case "buscar_usuario_acceso":
				$obj = new Usuario(); 
				$obj->
				 set('usuario',$usuario); 
				$obj-> set('contrasena',$contrasena); 
				$salida=$obj->buscar_usuario_acceso();
				break;
				*/
				

				case "eliminar_servicio":
				$obj = new Servicio(); 
				$obj-> set('codigo',$codigo); 
				$salida=$obj->eliminar_servicio();
				break;
		
		default:
			$salida = "Error acción no encontrada";
			break;
		}
		
		$datos=json_encode($salida);
		echo $datos;
	}


}
	new Control_servicio();

?>
