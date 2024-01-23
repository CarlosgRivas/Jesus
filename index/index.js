function limpiar_casillas(){
	
	//xGetElementById("formControlUsuario").reset();
	xGetElementById("usuario").value="";
	xGetElementById("contrasenia").value="";
	}


function acceder_usuario(){
	
			var usuario= xGetElementById("usuario").value;
			var contrasena= xGetElementById("contrasenia").value;	

//alert(contrasena);

if ((usuario!="") && (contrasena!="")){
		AjaxRequest.post
    ({'parameters':{ 'accion':"buscar_usuario_acceso","usuario":usuario, "contrasena":contrasena},
    'onSuccess':acceder,
    'url':'../control/control_usuario.php',
    'onError':function(req) { alert('Error!\nStatusText='+req.statusText+'\nContents='+req.responseText); }
    });
	 }
	else
	{
		alert("Existen campos vacios");
	}
}

function acceder(req){
	
		var respuesta = req.responseText;

		var resultado = eval("("+respuesta + ")");
		//alert("entro");
	//

	if(resultado){
		var nombre = resultado[0]['nombre'];
		var apellido=resultado[0]['apellido'];
		//alert(nombre)
		if(resultado[0]['tipo']=="Administrador")
			javascript:location.href='../home.php?nombre='+nombre+'&apellido='+apellido;
		else if(resultado[0]['tipo']=="Jefe")
			javascript:location.href='../home.php?nombre='+nombre+'&apellido='+apellido;
	}
	else
	{
		alert('El usuario no existe');
		limpiar_casillas();
	}
}

