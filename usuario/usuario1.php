 <?php

	session_start();
         $_SESSION[nombre]=$_GET['nombre'];
         $_SESSION[apellido]=$_GET['apellido'];
        echo"<INPUT type='hidden' id='nombre' value='$_SESSION[nombre]'>";

        echo"<INPUT type='hidden' id='destruir' value='0'>";
       /* if( $_SESSION[nombre]=="")
		{
			session_destroy();
			echo "<br><a href='#' onclick=\"javascript:document.location.href= 'index/index.php';\">Volver al Inicio</a>";
	exit;
		}	*/
        //$p=$_GET['puntuacion'];
        
        include("../include/inc_cabeceras.php");
        include_once("../include/funciones_php.php");
        
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>.:SIRC "La Granja:."</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				CLAP DE LA URB. "LA GRANJA" <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="../assets/img/granja.jpeg" alt="UserIcon">
					<figcaption class="text-center text-titles"> Bienvenido(a) <?php echo $_SESSION[nombre]. " ".$_SESSION[apellido];?></figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					Cerrar Sesión
					<li>
						<a href="index/index.php" >
							<!-- class="btn-exit-system"-->
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
						<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="home.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Definiciones <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="jefe_familia/jefe_familia.php" target="marco"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Jefe de Familia</a>
						</li>
						<li>
							<a href="subject.html"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Subject</a>
						</li>
						<li>
							<a href="section.html"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Section</a>
						</li>
						<li>
							<a href="salon.html"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Salon</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="usuario/usuario.php" target="marco"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Administrar Usuarios</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i> Payments <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="registration.html"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Registration</a>
						</li>
						<li>
							<a href="payments.html"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Payments</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Settings School <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="school.html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> School Data</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<!--<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>-->
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
				<li>
						<a href="index/index.php" >
							<!-- class="btn-exit-system"-->
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
			</ul>
		</nav>
		</section>
		<!-- Content page -->
		<!--<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">System <small>Tiles</small></h1>

			  	EMPIEZA USUARIO.PHP-->
			
					<!--<iframe name="marco" src="https://www.youtube.com/embed/QN7qfwz2biY?si=vJSfsP5uaC32G9_7" width="100%" height="800px" scrolling="auto">	
				    </iframe>-->
				    <div class="container-fluid">
				    	<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">New</a></li>
					  	<li><a href="#list" data-toggle="tab">List</a></li>
					</ul>
				    <div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">

<body onLoad="mostrar_lista_usuario1(); desactivar_campos_usuario11();">
<form id="formUsuario">
<fieldset>Student Data</fieldset>
<table align="center" >
<tr><td height='25'></td></tr>
	<tr><td colspan="2" align='center'><b>.:INGRESO DE USUARIO:.</b></td></tr>
	<tr><td height='25'></td></tr>
	<tr><td><table align="center">
	<tr><td align='right' ><label class="control-label">Usuario:</label></td>
		<td><input id="id_usuario" type="text" class="form-control">
			<img src="../img/buscar.png" width="22px" height="22px" style='cursor:pointer' onclick="buscar_usuario();">
		</td></tr>
	<tr><td align='right'>Contraseña:</td><td><input id="id_contrasena" type="password"></td></tr>
	<tr><td align='right'>Nombre:</td><td><input id="id_nombre" type="text"></td></tr>
	<tr><td align='right'>Tipo de Usuario:</td>
		<td><select id="id_tipo" onclick="activar_edificio();">
		<option value="" selected >Seleccione...</option>
		<option value="Administrador">Administrador</option>
		<option value="Jefe">Jefe de Calle</option>
		</select></td></tr>
	<tr><td align='right'>Edificio:</td>
		<td><select id="id_edificio">
		<option value="" selected >Seleccione...</option>
		<option value="Cumanacoa">Cumanacoa</option>
		<option value="Santa_fe">Santa Fé</option>
		<option value="Bermudez">Bermudez</option>
		</select></td></tr>

	</table></td></tr>
	<tr><td height='25'></td></tr>
	<tr><td align='center' colspan='2'>	
							<button id="btn_guardar" type="button" onclick="guardar_usuario();"><img src="../img/guardar.png" width="22px" height="22px" style='cursor:pointer'"><br><b>Guardar</button></b></button>
							<button id="btn_limpiar" type="button" onclick="limpiar_usuario();"><img src="../img/limpiar.png" width="22px" height="22px" style='cursor:pointer'"><br><b>Cancelar</b></button>
							<button id="btn_eliminar" type="button" onclick="eliminar_usuario();"><img src="../img/anular.png" width="22px" height="22px" style='cursor:pointer'"><br><b>Eliminar</b></button>
							<button id="btn_imprimir" type="button" onclick="imprimir_usuario();"><img src="../img/imprimir.png" width="22px" height="22px" style='cursor:pointer'"><br><b>Imprimir</b></button></td></tr>

	<tr><td height='20'></td></tr>
<tr>
<td align="center" colspan="3">
<table style="background-color : #ffffff; font-family : 'Arial'; font-size : 12px; width : 800px;" align="center">
				<tbody>
					<!--656262 159296-->
				<tr align="center"  bgcolor="#E92613">
					<td width="30%" height="30px"><font color="#ffffff"><b>Usuario</b></font></td>
					<td width="30%" height="30px"><font color="#ffffff"><b>Nombre</b></font></td>
					<td width="25%" height="20px"><font color="#ffffff"><b>Tipo</b></font></td>
					<td width="15%" height="20px"><font color="#ffffff"><b>Acción</b></font></td>
					
				</tr>
				</tbody>
			</table>
			<div style="height:200px; width:800px; overflow : auto;">
			<table align="center" style="background-color : #bfbfbf; width : 800px;" height="200px">
			<col width="30%">
			<col width="30%"><!--se colocan los anchos de las columnas q se crean en agenda.js este ancho es fijo y asi no hay problema en algunos caso-->
			<col width="25%">
			<col width="15%">
			<tbody id="lista_usuario"></tbody></table>
			</div>

 </td>
</tr>
<tr><td height='5'></td></tr>

</table>
</form>
</body>

			 <!--TERMINA USUARIO.PHP-->
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
		</div>
		<!--<div class="full-box text-center" style="padding: 30px 10px;">-->
		
		

		


	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Ayuda</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Próximamente Manual de usuario
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-down"></i> Salir</button>
		      	</div>
		    </div>
	  	</div>
	</div>
	<!--====== Scripts -->
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/material.min.js"></script>
	<script src="../js/ripples.min.js"></script>
	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>