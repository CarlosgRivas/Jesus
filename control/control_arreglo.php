<?php

include_once("../clases/class_arreglo.php"); //se incluye la funcion clas funciones q contiene las otras clases


class Control_arreglo{

	public function __construct(){
		
		foreach($_POST as $nombre_campo => $valor){
			$asignacion = "\$" . $nombre_campo . "='" . $valor . "';"; //le coloca un $ a todas las var q viene del llamado en agenda.js tantas variables como datos se envien y se crea una cadena con dolar al comienzo de cada variable
			eval($asignacion);//convierte toda la cadena anterior en variables php y se crean las var $accion='guardar o xxxx' $cedula=valor con el valor 
			}
		
		
		switch($accion)
		{
			case "guardar_arreglo":
				$obj = new Arreglo(); 
				$obj-> set('titulo',$titulo); 
				$obj-> set('opc',$opc); 
				 
				$salida=$obj->guardar_arreglo();
				break;
				
			/*case "buscar_usuario":
				$obj = new Usuario(); 
				$obj-> set('usuario',$usuario); 
				$salida=$obj->buscar_usuario();
				break;

				case "buscar_lista_usuario":
				$obj = new Usuario(); 
				
				$salida=$obj->buscar_lista_usuario();
				break;


			case "buscar_usuario_acceso":
				$obj = new Usuario(); 
				$obj-> set('usuario',$usuario); 
				$obj-> set('contrasena',$contrasena); 
				$salida=$obj->buscar_usuario_acceso();
				break;
				
			case "eliminar_usuario":
				$obj = new Usuario(); 
				$obj-> set('usuario',$usuario); 
				$salida=$obj->eliminar_usuario();
				break;*/
		default:
			$salida = "Error acción no encontrada";
			break;
		}
		$datos=json_encode($salida);
		echo $datos;

	}


}
	new Control_arreglo();

?>
