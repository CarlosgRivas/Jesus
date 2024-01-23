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
        
      //  include("include/inc_cabeceras.php");
       // include_once("include/funciones_php.php");/**/
        
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>.:SIRC "La Granja:."</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	<script>
	function cerrarSesion(){

	if(confirm("ESTÁ SEGURO QUE DESEA CERRAR SESIÓN?")){
		javascript:document.location.href='./index/index.php';
	}
}
</script>
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
					<img src="./assets/img/granja.jpeg" alt="UserIcon" >
					<figcaption class="text-center text-titles">Bienvenido(a) <?php echo $_SESSION[nombre];?></figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					Cerrar Sesión
					<li>
						<a  href="./index/index.php" style="cursor:pointer" ">
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
							<a href="jefe_de_calle/jefe_de_calle.php" target="marco"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Jefe de Calle</a>
						</li>
						<li>
							<a href="servicio/servicio.php" target="marco"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Servicios del CLAP</a>
						</li>
						<li>
							<a href="costo_de_servicios/costo_de_servicios.php" target="marco"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Modificar Costo del Servicio</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuario <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="usuario/usuario.php" target="marco"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administrar Usuario</a>
						</li>
					</ul>
				</li>
				<!-- Content page<li>
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
				</li>-->
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

				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
				<li>
						<a style="cursor:pointer" onclick="cerrarSesion();">
							<!-- class="btn-exit-system"-->
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				
			</ul>
		</nav>
		<!-- Content page -->
		<!--<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Users <small>Student</small></h1>
			</div>
		</div>-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									 	<iframe name="marco"  src="incio_fondo.php" width="100%" height="800px" scrolling="auto" frameborder="0">	
				   						 </iframe>

									</div>
								</div>
							</div>
						</div>
					  	
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Notifications area -->
	

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
			        	Próximamente Manual de Usuario
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
<!--====== cerrar 
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Ayuda</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Próximamente Manual de Usuarios
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>-->
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>