function desactivar_campos_jefe_de_calle()// para buscar los cursos guardados en la bd
{ 
	document.getElementById('id_nombre').disabled=true;
	document.getElementById('id_apellido').disabled=true;
	document.getElementById('id_edificio').disabled=true;
	document.getElementById('id_estatus1').disabled=true;
	document.getElementById('id_estatus2').disabled=true;	
	
	mostrar_lista_jefe_calle();
}
function activar_campos_jefe_de_calle()// para buscar los cursos guardados en la bd
{
	document.getElementById('id_nombre').disabled=false;
	document.getElementById('id_apellido').disabled=false;
	document.getElementById('id_edificio').disabled=false;
	document.getElementById('id_estatus1').disabled=false;
	document.getElementById('id_estatus2').disabled=false;
}


function mostrar_lista_jefe_calle(){
	
		
				AjaxRequest.post
			({'parameters':{ 'accion':"buscar_lista_jefe_calle"},
			'onSuccess':mostrarDatosConsultaListaJC,
			'url':'../control/control_jefe_de_calle.php',
			'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
			});
		
}

function mostrarDatosConsultaListaJC(req){
	
		var respuesta = req.responseText;
	//	alert(respuesta)
	var resultado = eval("("+ respuesta + ")");
	var n=resultado.length; 
	var tabla=xGetElementById('lista_jefe_calle');
	limpiarTabla('lista_jefe_calle');
	
	//alert(resultado);
	for(var i=0;i<n;i++){
	//se crean columnas de elementos
		var col1 = mD.agregaNodoElemento('td', null, null, {'align':'center'});
		var col2 = mD.agregaNodoElemento('td', null, null, {'align':'center'});
		var col3 = mD.agregaNodoElemento('td', null, null, {'align':'center'});
		var col4 = mD.agregaNodoElemento('td', null, null, {'align':'center'});
		var col5 = mD.agregaNodoElemento('td', null, null, {'align':'center'});
		
       
        	mD.agregaNodoTexto(col1,resultado[i]['cedula']);
			mD.agregaNodoTexto(col2,resultado[i]['nombre']);
			mD.agregaNodoTexto(col3,resultado[i]['apellido']);
			mD.agregaNodoTexto(col4,resultado[i]['activo']);
			mD.agregaNodoTexto(col5,resultado[i]['edificio']);
			

		//var fila =mD.agregaNodoElemento('tr', null, resultado[i]['cedula'], {'bgcolor':'#fffff7','style':'cursor:pointer'});
	var fila =mD.agregaNodoElemento('tr', null, resultado[i]['cedula'],{'bgcolor':'#fffff7','style':'cursor:pointer','onclick':"Cargar_datos_JC('"+resultado[i]['cedula']+"','"+resultado[i]['nombre']+"','"+resultado[i]['apellido']+"','"+resultado[i]['activo']+"','"+resultado[i]['edificio']+"');"});

		fila.appendChild(col1);
		fila.appendChild(col2);
		fila.appendChild(col3);
	    fila.appendChild(col4);
		fila.appendChild(col5);
		
		

	tabla.appendChild(fila); 
	
	}
	}

function Cargar_datos_JC(cedula, nombre, apellido, activo, edificio) {
		xGetElementById("id_cedula").value=cedula;
		xGetElementById("id_nombre").value=nombre;
		xGetElementById("id_apellido").value=apellido;
		xGetElementById("id_edificio").value=edificio;

		if (activo=="si") {
		 	xGetElementById("id_estatus1").checked=true;
		 }
		else
		 {
		 	xGetElementById("id_estatus2").checked=true;
		 }	
	
		 activar_campos_jefe_de_calle();
		
}

function guardar_jefe_de_calle()
{
		var cedula= xGetElementById("id_cedula").value;
		var nombre= xGetElementById("id_nombre").value;
		var apellido= xGetElementById("id_apellido").value;
		var activo1= xGetElementById("id_estatus1").checked;
		var activo2= xGetElementById("id_estatus2").checked;
		var edificio= xGetElementById("id_edificio").value;
		 if (activo1) {
		 	activo="si";
		 }
		 if (activo2)
		 {
		 	activo="no"
		 }


		if((cedula!="")&&(nombre!="")&&(apellido!="")&&(edificio!="")&&(activo!=""))
		{	
			AjaxRequest.post
		({'parameters':{ 'accion':"guardar_jefe_de_calle","cedula":cedula,"nombre":nombre,"apellido":apellido,"edificio":edificio, "activo":activo},
		'onSuccess':mostrarMensajeGuardadosJefedecalle,
	'url':'../control/control_jefe_de_calle.php',
	'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
		});
		}
		else
			alert("Existen Campos Vacios");
}

function mostrarMensajeGuardadosJefedecalle(req){
	
	  var respuesta = req.responseText;
	  
	var resultado = eval("("+respuesta + ")");
	
//alert(respuesta); 
	
	if(respuesta==1){
		
		alert("Datos Guardados Con Éxito");
		//mostrar_lista_usuario1();

		limpiar_jefe_de_calle();

	}
	else {
		alert("Error al Guardar los Datos");
		limpiar_jefe_de_calle();
	}
	
}


function limpiar_jefe_de_calle(){
	
	xGetElementById("formJefeC").reset();
	desactivar_campos_jefe_de_calle();
	mostrar_lista_jefe_calle();
	}


function buscar_jefe_de_C(){
	
			var cedula= xGetElementById("id_cedula").value;

		if(cedula!="")
		{
				AjaxRequest.post
			({'parameters':{ 'accion':"buscar_jefe_C","cedula":cedula},
			'onSuccess':mostrarDatosConsultaJefeC,
			'url':'../control/control_jefe_de_calle.php',
			'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
			});
		}
		else
			alert("No Existe Datos para la Busqueda");
}

function mostrarDatosConsultaJefeC(req){
	
		var respuesta = req.responseText;
		var resultado = eval("("+respuesta + ")");

	if(resultado){
			activar_campos_jefe_de_calle();
		xGetElementById("id_nombre").value=resultado[0]["nombre"];
		xGetElementById("id_apellido").value=resultado[0]["apellido"];
		xGetElementById("id_edificio").value=resultado[0]["edificio"];
		
		if (resultado[0]["activo"]=="si") {
			xGetElementById("id_estatus1").checked=resultado[0]["activo"];
		}
		else
		{
			xGetElementById("id_estatus2").checked=resultado[0]["activo"];
		}
	}
	else
	{
		alert('El Jefe de Calle no existe');
		activar_campos_jefe_de_calle();
	}
}


function eliminar_jefe_de_calle(){
	
			var cedula= xGetElementById("id_cedula").value;

	if(confirm("ESTA SEGURO QUE DESEA ELIMINAR LOS DATOS?")){

			AjaxRequest.post
		({'parameters':{ 'accion':"eliminar_jefe_de_calle","cedula":cedula},
		'onSuccess':mostrarMensajeEliminadoJefeC,
		'url':'../control/control_jefe_de_calle.php',
		'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
		});
		
	}
}

function mostrarMensajeEliminadoJefeC(req){
	
	  var respuesta = req.responseText;
	  
	if(respuesta==1){
		
			alert("Datos Eliminados Con Éxito");
			//mostrar_lista_usuario();

			limpiar_jefe_de_calle();
	}
	else {
		alert("Error al Eliminar los Datos");
		limpiar_jefe_de_calle();
	}
	
}
