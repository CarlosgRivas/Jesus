function desactivar_campos_jefe_fam()// para buscar los cursos guardados en la bd
{ 
	document.getElementById('id_nombre').disabled=true;
	document.getElementById('id_apellido').disabled=true;
	document.getElementById('id_telefono').disabled=true;
	document.getElementById('id_fecha_nacimiento').disabled=true;
	document.getElementById('id_edificio').disabled=true;
	document.getElementById('id_piso').disabled=true;
	document.getElementById('id_apartamento').disabled=true;
		
	
	//mostrar_lista_usuario1();
}
function activar_campos_jefe_fam()// para buscar los cursos guardados en la bd
{
	document.getElementById('id_nombre').disabled=	false;
	document.getElementById('id_apellido').disabled=false;
	document.getElementById('id_telefono').disabled=false;
	document.getElementById('id_fecha_nacimiento').disabled=false;
	document.getElementById('id_edificio').disabled=false;
	document.getElementById('id_piso').disabled=false;
	document.getElementById('id_apartamento').disabled=false;
	
}
/*
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
		var col1 = mD.agregaNodoElemento('td', null, null, {'align':'center'});
		var col2 = mD.agregaNodoElemento('td', null, null, {'align':'center'});
		var col3 = mD.agregaNodoElemento('td', null, null, {'align':'center'});
		var col4 = mD.agregaNodoElemento('td', null, null, {'align':'center'});

		///col4.innerHTML="<img src='../img/imprimir.png' width=15px height=15px onclick= imprimirReporte('"+resultado[i]['usuario']+"','"+resultado[i]['nombre']+"','"+resultado[i]['tipo']+"'); >";

		col4.innerHTML="<img src='../img/imprimir.png' width=15px height=15px onclick= imprimirReporte('"+resultado[i]['usuario']+"','"+resultado[i]['nombre']+"','"+resultado[i]['tipo']+"'); >";
       
       
        	mD.agregaNodoTexto(col1,resultado[i]['usuario']);
			mD.agregaNodoTexto(col2,resultado[i]['nombre']);
			mD.agregaNodoTexto(col3,resultado[i]['tipo']);
			mD.agregaNodoTexto(col4,'');
			

		var fila =mD.agregaNodoElemento('tr', null, resultado[i]['usuario'], {'bgcolor':'#fffff7','style':'cursor:pointer'});
	
		fila.appendChild(col1);
		fila.appendChild(col2);
		fila.appendChild(col3);
	    fila.appendChild(col4);
		
		
		

	tabla.appendChild(fila); 
	
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
*/
function guardar_jefe_familia()
{
		var cedula= xGetElementById("id_cedula").value;

		var apellido= xGetElementById("id_apellido").value;
		var nombre= xGetElementById("id_nombre").value;
		var fecha_nac= xGetElementById("id_fecha_nacimiento").value;
		var telefono= xGetElementById("id_telefono").value;
		var edificio=xGetElementById("id_edificio").value;
		var piso= xGetElementById("id_piso").value;
		var apartamento= xGetElementById("id_apartamento").value;

		var apartamento_c=piso+"-"+apartamento;
//alert(apartamento_c);

		if((cedula!="")&&(nombre!="")&&(apellido!="")&&(fecha_nac!="")&&(telefono!="")&&(edificio!="")&&(apartamento_c!=""))
		{	
			AjaxRequest.post
		({'parameters':{ 'accion':"guardar_jefe_familia","cedula":cedula,"nombre":nombre,"apellido":apellido,"fecha_nac":fecha_nac, "telefono":telefono, "edificio":edificio,"apartamento_c":apartamento_c},
		'onSuccess':mostrarMensajeGuardadosJefeFamilia,
		'url':'../control/control_jefe_familia.php',
		'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
		});
		}
		else
			alert("Existen Campos Vacios");
}

function mostrarMensajeGuardadosJefeFamilia(req){
	
	  var respuesta = req.responseText;
	  
//	var resultado = eval("("+respuesta + ")");
	
//alert(respuesta); 
	
	if(respuesta==1){
		
		alert("Datos Guardados Con Exito");
		//mostrar_lista_usuario1();

		limpiar_jefe_familia();

	}
	else {
		alert("Error al Guardar los Datos");
		limpiar_jefe_familia();
	}
	
}


function limpiar_jefe_familia(){
	
	xGetElementById("formJefeF").reset();
	desactivar_campos_jefe_fam();
	
	}


function buscar_jefe_familia(){
	
			var cedula= xGetElementById("id_cedula").value;

		if(cedula!="")
		{
				AjaxRequest.post
			({'parameters':{ 'accion':"buscar_jefe_familia","cedula":cedula},
			'onSuccess':mostrarDatosConsultaJefeF,
			'url':'../control/control_jefe_familia.php',
			'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
			});
		}
		else
			alert("No Existe Datos para la Busqueda");
}

function mostrarDatosConsultaJefeF(req){
	
		var respuesta = req.responseText;
		var resultado = eval("("+respuesta + ")");
		//alert(respuesta);

	if(resultado){
			activar_campos_jefe_fam();
		xGetElementById("id_nombre").value=resultado[0]["nombre"];
		xGetElementById("id_apellido").value=resultado[0]["Apellido"];
		xGetElementById("id_telefono").value=resultado[0]["telefono"];
		xGetElementById("id_fecha_nacimiento").value=resultado[0]["fecha_nac"];
		xGetElementById("id_edificio").value=resultado[0]["edificio"];


		var apartamento_c=resultado[0]["apartamento_c"];
		var piso;
		var apartamento;

		if(apartamento_c[0]=="P")
		{
			piso="PB";
			apartamento=apartamento_c[3];
		}	

		else{
			piso=apartamento_c[0];
			apartamento=apartamento_c[2];
		}
		
		xGetElementById("id_piso").value=piso;
		xGetElementById("id_apartamento").value=apartamento;		
	}
	else
	{
		alert('El Jefe de Familia no existe');
		activar_campos_jefe_fam()
	}
}



function eliminar_jefe_familia(){
	
			var cedula= xGetElementById("id_cedula").value;
if(cedula!=""){
	if(confirm("ESTA SEGURO QUE DESEA ELIMINAR LOS DATOS?")){

			AjaxRequest.post
		({'parameters':{ 'accion':"eliminar_jefe_familia","cedula":cedula},
		'onSuccess':mostrarMensajeEliminadoJefeFam,
		'url':'../control/control_jefe_familia.php',
		'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
		});
		}
	}
	else{
		alert("No Existen datos a Eliminar");
	}
}

function mostrarMensajeEliminadoJefeFam(req){
	
	  var respuesta = req.responseText;
	  
	if(respuesta==1){
		
			alert("Datos Eliminados Con Éxito");
			//mostrar_lista_usuario1();

			limpiar_jefe_familia();
	}
	else {
		alert("Error al Eliminar los Datos");
		limpiar_jefe_familia();
	}
	
}
