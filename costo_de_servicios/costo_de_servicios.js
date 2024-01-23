
function llenar_select_servicio()// para buscar los cursos guardados en la bd
{
	var option = "buscar_lista_servicio";
	AjaxRequest.post
	({
 		'parameters':{'accion':option}, 
		'onSuccess':llenar_select_servicioS,
		'url':'../control/control_servicio.php',
		'onError':function(req)
		{ 
			alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText);
		}
	})
}
function llenar_select_servicioS(req)//para cargar el select
{
	var respuesta = req.responseText;
	var resultado = eval("("+ respuesta + ")");

	//alert(respuesta);
	document.getElementById('id_servicio').innerHTML="<option>Seleccione..</option>";
	if(resultado)
	{	
		for(var i=0;i<resultado.length;i++)
			document.getElementById('id_servicio').innerHTML += "<option value='"+resultado[i]['codigo']+"'>"+resultado[i]['servicios']+"</option>";		
	}
}

/*function desactivar_campos_jefe_fam()// para buscar los cursos guardados en la bd
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

function guardar_Actualizar_costo_de_servicios()
{
		var servicios= xGetElementById("id_servicio").value;
		var monto= xGetElementById("id_monto").value;
		var fecha= xGetElementById("id_fecha").value;
		

		//var apartamento_c=piso+"-"+apartamento;
//alert(apartamento_c);

		if((servicios!="")&&(monto!="")&&(fecha!=""))
		{	
			AjaxRequest.post
		({'parameters':{ 'accion':"guardar_Actualizar_costo_de_servicios","servicios":servicios,"monto":monto,"fecha":fecha},
		'onSuccess':mostrarMensajeGuardadosActualizar_costo_de_servicios,
		'url':'../control/control_Actualizar_costo_de_servicios.php',
		'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
		});
		}
		else
			alert("Existen Campos Vacios");
}

function mostrarMensajeGuardadosActualizar_costo_de_servicios(req){
	
	  var respuesta = req.responseText;
	  
//	var resultado = eval("("+respuesta + ")");
	
alert(respuesta); 
	
	if(respuesta==1){
		
		alert("Datos Guardados Con Exito");
		//mostrar_lista_usuario1();

		limpiar_Actualizar_costo_de_servicios();

	}
	else {
		alert("Error al Guardar los Datos");
		limpiar_Actualizar_costo_de_servicios();
	}
	
}


function limpiar_Actualizar_costo_de_servicios(){
	
	xGetElementById("formActMonto").reset();
	//desactivar_Actualizar_costo_de_servicios();
	cargar_lista_montos();
	}

function cargar_lista_montos(){
	
//var cedula=xGetElementById('id_cedula').value;
//alert(cedula);
 AjaxRequest.post
    ({'parameters':{ 'accion':"listar_monto"}, 
    'onSuccess':mostrarListaMontos,
      'url':'../control/control_Actualizar_costo_de_servicios.php',
    'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
    });
}

function mostrarListaMontos(req){

	var respuesta = req.responseText;
	var resultado = eval("("+ respuesta + ")");
	var n=resultado.length; 
	var tabla=xGetElementById('lista_montos');
	limpiarTabla('lista_montos');
	
	//alert(resultado);
	for(var i=0;i<n;i++){
	//se crean columnas de elementos
		var col1 = mD.agregaNodoElemento('td', null, null, {'align':'center'/*,'width':'10%'*/});
		var col2 = mD.agregaNodoElemento('td', null, null, {'align':'center'/*,'width':'10%'*/});
		var col3 = mD.agregaNodoElemento('td', null, null, {'align':'center'/*,'width':'40%'*/});
    var col4 = mD.agregaNodoElemento('td', null, null, {'align':'center'/*,'width':'25%'*/});
      //  var col5 = mD.agregaNodoElemento('td', null, null, {'align':'center'/*,'width':'25%'*/});

        	mD.agregaNodoTexto(col1,resultado[i]['codigo_monto']);
			mD.agregaNodoTexto(col2,resultado[i]['codigo']);
			mD.agregaNodoTexto(col3,resultado[i]['monto']);
			mD.agregaNodoTexto(col4,resultado[i]['fecha']);
			//mD.agregaNodoTexto(col5,resultado[i]['estatus']);
		
		var fila =mD.agregaNodoElemento('tr', null, resultado[i]['codigo_monto'],{'bgcolor':'#fffff7','style':'cursor:pointer','onclick':"Cargar_datos_montos('"+resultado[i]['codigo_monto']+"','"+resultado[i]['monto']+"','"+resultado[i]['fecha']+"','"+resultado[i]['codigo']+"');"});
	
		fila.appendChild(col1);
		fila.appendChild(col2);
		fila.appendChild(col3);
		fila.appendChild(col4);
		//fila.appendChild(col5);
		

	tabla.appendChild(fila); 
	
	}

}

function Cargar_datos_montos(codigo_monto,monto,fecha,codigo){
	xGetElementById("id_servicio").value=codigo;
	xGetElementById("id_monto").value=monto;
	xGetElementById("id_fecha").value=fecha;	
	//buscar_seccionS(codigo_curso,ano,codigo_seccion);
}

/*
function buscar_Actualizar_costo_de_servicios(){
	
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
		alert(respuesta);

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

			limpiar_Actualizar_costo_de_servicios();
	}
	else {
		alert("Error al Eliminar los Datos");
		limpiar_Actualizar_costo_de_servicios();

	}
	
}
*/