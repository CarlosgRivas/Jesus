function desactivar_campos_usuario11()// para buscar los cursos guardados en la bd
{ 
	//var nombre_p=xGetElementById('nombre_p').value;
	//alert("entro");
	document.getElementById('id_contrasena').disabled=true;
	document.getElementById('id_nombre').disabled=true;
	document.getElementById('id_tipo').disabled=true;
	document.getElementById('id_edificio').disabled=true;
	mostrar_lista_usuario1();
}
function activar_campos_usuario11()// para buscar los cursos guardados en la bd
{
	document.getElementById('id_contrasena').disabled=false;
	document.getElementById('id_nombre').disabled=false;
	document.getElementById('id_tipo').disabled=false;
}

function activar_edificio()
{
		var tipo= xGetElementById("id_tipo").value;

		if(tipo=="Jefe")
		{
			document.getElementById('id_edificio').disabled=false;
		}
		else{
			document.getElementById('id_edificio').disabled=true;
		}
}


function mostrar_lista_usuario1(){
	
		
				AjaxRequest.post
			({'parameters':{ 'accion':"buscar_lista_usuario"},
			'onSuccess':mostrarDatosConsultaU1,
			'url':'../control/control_usuario.php',
			'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
			});
		
}

function mostrarDatosConsultaU1(req){
	
		var respuesta = req.responseText;
	//	alert(respuesta)
	var resultado = eval("("+ respuesta + ")");
	var n=resultado.length; 
	var tabla=xGetElementById('lista_usuario');
	limpiarTabla('lista_usuario');
	
	//alert(resultado);
	for(var i=0;i<n;i++){
	//se crean columnas de elementos
		var col1 = mD.agregaNodoElemento('td', null, null, {'align':'center'/*,'width':'10%'*/});
		var col2 = mD.agregaNodoElemento('td', null, null, {'align':'center'/*,'width':'10%'*/});
		var col3 = mD.agregaNodoElemento('td', null, null, {'align':'center'/*,'width':'40%'*/});
		var col4 = mD.agregaNodoElemento('td', null, null, {'align':'center'/*,'width':'25%'*/});

		///col4.innerHTML="<img src='../img/imprimir.png' width=15px height=15px onclick= imprimirReporte('"+resultado[i]['usuario']+"','"+resultado[i]['nombre']+"','"+resultado[i]['tipo']+"'); >";

		col4.innerHTML="<img src='../img/imprimir.png' width=15px height=15px onclick= imprimirReporte('"+resultado[i]['usuario']+"','"+resultado[i]['nombre']+"','"+resultado[i]['tipo']+"'); >";
       
       
        	mD.agregaNodoTexto(col1,resultado[i]['usuario']);
			mD.agregaNodoTexto(col2,resultado[i]['nombre']);
			mD.agregaNodoTexto(col3,resultado[i]['tipo']);
			mD.agregaNodoTexto(col4,'');
			
var fila =mD.agregaNodoElemento('tr', null, resultado[i]['usuario'],{'bgcolor':'#fffff7','style':'cursor:pointer','onclick':"Cargar_datos_usuario1('"+resultado[i]['usuario']+"','"+resultado[i]['contrasenia']+"','"+resultado[i]['nombre']+"','"+resultado[i]['tipo']+"','"+resultado[i]['edificio']+"');"});
	
		//var fila =mD.agregaNodoElemento('tr', null, resultado[i]['usuario'], {'bgcolor':'#fffff7','style':'cursor:pointer'});
	
		fila.appendChild(col1);
		fila.appendChild(col2);
		fila.appendChild(col3);
	    fila.appendChild(col4);
		
		
		

	tabla.appendChild(fila); 
	
	}
	}

	function Cargar_datos_usuario1(usuario,contrasena,nombre,tipo,edificio){
	xGetElementById("id_usuario").value=usuario;
	xGetElementById("id_contrasena").value=contrasena;
	xGetElementById("id_nombre").value=nombre;	
	xGetElementById("id_tipo").value=tipo;
	
	if(tipo=="Jefe")
	{
		xGetElementById("id_edificio").value=edificio;	
		activar_edificio();
		activar_campos_usuario11();
	}
	
	else{
		activar_campos_usuario11();
	}

	
}
//}
function imprimir_usuario()
{
	var usuario= xGetElementById("id_usuario").value;

		var contrasena= xGetElementById("id_contrasena").value;
		var nombre= xGetElementById("id_nombre").value;
		var tipo= xGetElementById("id_tipo").value;
		javascript:document.location.href='../usuario/Reporte.php?usuario='+usuario+'&nombre='+nombre+'&tipo='+tipo;



}

function imprimirReporte(usuario,nombre,tipo){
	alert(nombre)
	
	javascript:document.location.href='../usuario/Reporte.php?usuario='+usuario+'&nombre='+nombre+'&tipo='+tipo;

	
}
function guardar_usuario()
{
		var usuario= xGetElementById("id_usuario").value;

		var contrasena= xGetElementById("id_contrasena").value;
		var nombre= xGetElementById("id_nombre").value;
		var tipo= xGetElementById("id_tipo").value;
		var edificio=xGetElementById("id_edificio").value;

		if (edificio=="") {
			xGetElementById("id_edificio").value=0;
		}
		
		if((usuario!="")&&(nombre!="")&&(contrasena!="")&&(tipo!=""))
		{	
			AjaxRequest.post
		({'parameters':{ 'accion':"guardar_usuario","usuario":usuario,"contrasena":contrasena,"nombre":nombre,"tipo":tipo, "edificio":edificio},
		'onSuccess':mostrarMensajeGuardadosUsuario,
		'url':'../control/control_usuario.php',
		'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
		});
		}
		else
		{
			alert("Existen Campos Vacios");
		}
}

function mostrarMensajeGuardadosUsuario(req){
	
	  var respuesta = req.responseText;
	  
//	var resultado = eval("("+respuesta + ")");
	
//alert(respuesta); 
	
	if(respuesta==1){
		
		alert("Datos Guardados Con Exito");
		mostrar_lista_usuario1();

		limpiar_usuario();

	}
	else {
		alert("Error al Guardar los Datos");
		limpiar_usuario();
	}
	
}


function limpiar_usuario(){
	
	xGetElementById("formUsuario").reset();
	desactivar_campos_usuario11();
	
	}


function buscar_usuario(){
	
			var usuario= xGetElementById("id_usuario").value;

		if(usuario!="")
		{
				AjaxRequest.post
			({'parameters':{ 'accion':"buscar_usuario","usuario":usuario},
			'onSuccess':mostrarDatosConsulta,
			'url':'../control/control_usuario.php',
			'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
			});
		}
		else
			alert("No Existe Datos para la Busqueda");
}

function mostrarDatosConsulta(req){
	
		var respuesta = req.responseText;
		var resultado = eval("("+respuesta + ")");
	if(resultado){
			activar_campos_usuario11();
		xGetElementById("id_contrasena").value=resultado[0]["contrasena"];
		xGetElementById("id_nombre").value=resultado[0]["nombre"];
		xGetElementById("id_tipo").value=resultado[0]["tipo"];
		//xGetElementById("id_direccion").value=resultado[0]["direccion"];
	}
	else
	{
		alert('El usuario no existe');
		activar_campos_usuario11();
	}
}



function eliminar_usuario(){
	
			var usuario= xGetElementById("id_usuario").value;

	if(confirm("ESTA SEGURO QUE DESEA ELIMINAR LOS DATOS?")){

			AjaxRequest.post
		({'parameters':{ 'accion':"eliminar_usuario","usuario":usuario},
		'onSuccess':mostrarMensajeEliminado,
		'url':'../control/control_usuario.php',
		'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
		});
		
	}
}

function mostrarMensajeEliminado(req){
	
	  var respuesta = req.responseText;
	  
	if(respuesta==1){
		
			alert("Datos Eliminados Con Exito");
			mostrar_lista_usuario1();

			limpiar_usuario();
	}
	else {
		alert("Error al Eliminar los Datos");
		limpiar_usuario();
	}
	
}
