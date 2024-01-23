function desactivar_campos_servicio2()// para buscar los cursos guardados en la bd
{ 
	//document.getElementById('id_codigo').disabled=true; btn_guardar
	document.getElementById('id_servicio').disabled=true;
	document.getElementById('id_descripcion').disabled=true;
	document.getElementById('id_costo').disabled=true;
	document.getElementById('id_fecha').disabled=true;
	document.getElementById('btn_guardar').disabled=true;// PARA DESACTIVAR EL BOTON GUARDAR
		
	
	//mostrar_lista_servicio();
}
function activar_campos_servicio2()// para buscar los cursos guardados en la bd
{
	//document.getElementById('id_codigo').disabled=false;
	document.getElementById('id_servicio').disabled=false;
	document.getElementById('id_descripcion').disabled=false;
	document.getElementById('id_costo').disabled=false;
	document.getElementById('id_fecha').disabled=false;
	//document.getElementById('btn_guardar').disabled=false;
}
function activar_btn_guardar()// para ACTIVAR EL BOTON GUARDAR
{
	document.getElementById('btn_guardar').disabled=false;
}


function mostrar_lista_servicio2(){
	
		
				AjaxRequest.post
			({'parameters':{ 'accion':"buscar_lista_servicio"},
			'onSuccess':mostrarDatosConsultaservicio2,
			'url':'../control/control_servicio.php',
			'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
			});
		
}

function mostrarDatosConsultaservicio2(req){
	//alert("entro");
		var respuesta = req.responseText;
		//alert(respuesta);
	var resultado = eval("("+ respuesta + ")");
	var n=resultado.length; 
	var tabla=xGetElementById('lista_servicio');
	limpiarTabla('lista_servicio');
	
	//alert(resultado);
	for(var i=0;i<n;i++){
	//se crean columnas de elementos
		var col1 = mD.agregaNodoElemento('td', null, null, {'align':'center'});
		var col2 = mD.agregaNodoElemento('td', null, null, {'align':'center'});
		var col3 = mD.agregaNodoElemento('td', null, null, {'align':'center'});
		var col4 = mD.agregaNodoElemento('td', null, null, {'align':'center'});
		var col5 = mD.agregaNodoElemento('td', null, null, {'align':'center'});

   
        	mD.agregaNodoTexto(col1,resultado[i]['codigo']);
			mD.agregaNodoTexto(col2,resultado[i]['servicios']);
			mD.agregaNodoTexto(col3,resultado[i]['descripcion']);
			mD.agregaNodoTexto(col4,resultado[i]['costo']);
			mD.agregaNodoTexto(col5,resultado[i]['fecha']);

		//var fila =mD.agregaNodoElemento('tr', null, resultado[i]['codigo'], {'bgcolor':'#fffff7','style':'cursor:pointer'});
	var fila =mD.agregaNodoElemento('tr', null, resultado[i]['codigo'],{'bgcolor':'#fffff7','style':'cursor:pointer','onclick':"Cargar_datos_servicios('"+resultado[i]['codigo']+"','"+resultado[i]['servicios']+"','"+resultado[i]['descripcion']+"','"+resultado[i]['costo']+"','"+resultado[i]['fecha']+"');"});
    
		fila.appendChild(col1);
		fila.appendChild(col2);
		fila.appendChild(col3);
	    fila.appendChild(col4);
	    fila.appendChild(col5);
		
		
		

	tabla.appendChild(fila); 
	
	}
	}

function Cargar_datos_servicios(codigo, servicios,descripcion,costo,fecha) {
		xGetElementById("id_codigo").value=codigo;
		xGetElementById("id_servicio").value=servicios;
		xGetElementById("id_descripcion").value=descripcion;
		xGetElementById("id_costo").value=costo;
		xGetElementById("id_fecha").value=fecha;

		activar_campos_servicio2();

}



function guardar_servicio()
{
		var codigo= xGetElementById("id_codigo").value;
		var servicio= xGetElementById("id_servicio").value;
		var descripcion= xGetElementById("id_descripcion").value;
		var costo= xGetElementById("id_costo").value;
		var fecha= xGetElementById("id_fecha").value;
		

		if((codigo!="")&&(servicio!="")&&(descripcion!="")&&(costo!="")&&(fecha!=""))
		{	
			AjaxRequest.post
		({'parameters':{ 'accion':"guardar_servicio","codigo":codigo,"servicio":servicio,"descripcion":descripcion,"costo":costo, "fecha":fecha},
		'onSuccess':mostrarMensajeGuardadosservicio,
		'url':'../control/control_servicio.php',
		'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
		});
		}
		else
			alert("Existen Campos Vacios");
}

function mostrarMensajeGuardadosservicio(req){
	
	  var respuesta = req.responseText;
	  
//	var resultado = eval("("+respuesta + ")");
	
//alert(respuesta); 
	
	if(respuesta==1){
		
		alert("Datos Guardados Con Exito");
		//mostrar_lista_servicio2();

		limpiar_servicio();

	}
	else {
		alert("Error al Guardar los Datos");
		limpiar_servicio();
	}
	
}

function limpiar_servicio(){
	
	xGetElementById("formservicio").reset();
	desactivar_campos_servicio2();
	mostrar_lista_servicio2();
	}
	
function buscar_servicio(){
	
			var codigo= xGetElementById("id_codigo").value;

		if(codigo!="")
		{
				AjaxRequest.post
			({'parameters':{ 'accion':"buscar_servicio","codigo":codigo},
			'onSuccess':mostrarDatosConsultaservicio,
			'url':'../control/control_servicio.php',
			'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
			});
		}
		else
			alert("No Existe Datos para la Busqueda");
}




function mostrarDatosConsultaservicio(req){
	
		var respuesta = req.responseText;
		//alert(respuesta);
		var resultado = eval("("+respuesta + ")");


	if(resultado){
			activar_campos_servicio2();
		xGetElementById("id_servicio").value=resultado[0]["servicios"];
		xGetElementById("id_descripcion").value=resultado[0]["descripcion"];
		xGetElementById("id_costo").value=resultado[0]["costo"];
		xGetElementById("id_fecha").value=resultado[0]["fecha"];
		

}		

else{


		alert('El Servicio no existe');
		activar_campos_servicio2();
	}
}





function eliminar_servicio(){
	
			var codigo= xGetElementById("id_codigo").value;

	if(confirm("ESTA SEGURO QUE DESEA ELIMINAR LOS DATOS?")){

			AjaxRequest.post
		({'parameters':{ 'accion':"eliminar_servicio","codigo":codigo},
		'onSuccess':mostrarMensajeEliminadoservicio,
		'url':'../control/control_servicio.php',
		'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
		});
		
	}
}

function mostrarMensajeEliminadoservicio(req){
	
	  var respuesta = req.responseText;
	  //alert(respuesta);

	if(respuesta==1){
		
			alert("Datos Eliminados Con Éxito");
			//mostrar_lista_servicio2();

			limpiar_servicio();
	}
	else {
		alert("Error al Eliminar los Datos");
		limpiar_servicio();
	}
	
}
