<!DOCTYPE html>
<html>
<head>
<script>
baseUrl = "<?=base_url()?>";
</script>
<?php
/*session_name ( "cineProyecto" );
ini_set ( "session.cookie_lifetime", "7200" );
ini_set ( "session.gc_maxlifetime", "7200" );

session_start ();*/

?>

<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
<meta name="viewport"
	content="width=device-width, user-scalable=no initial-scale=1">
<style>
body {
	padding-top: 30px;
}

footer {
	bottom: 0;
	width: 100%;
	background-color: black;
	position: fixed;
}

.google-maps {
	position: relative;
	padding-bottom: 75%; // This is the aspect ratio height : 0;
	overflow: hidden;
}

.google-maps iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100% !important;
	height: 100% !important;
}
</style>
<title>Tu Cine</title>
<div class="remodal" data-remodal-id="modal"
	data-remodal-options="hashTracking: false, closeOnOutsideClick: false"></div>

<link rel="stylesheet"
	href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<link rel="stylesheet"
	href="<?php echo base_url("assets/css/bootstrap-pull.css"); ?>" />
<link rel="stylesheet"
	href="<?php echo base_url("assets/css/login.css"); ?>" />
	<link rel="stylesheet"
	href="<?php echo base_url("assets/css/table/dataTables.min.css"); ?>" />

<?php $this->load->view('registro/scripts');?>
<?= script_tag('assets/js/login/login.js')?>

<?= script_tag('assets/js/table/dataTables.min.js')?>
<?= script_tag('assets/js/video.js')?>
<?= script_tag('assets/js/videojs-resolution-switcher.js')?>

<link rel="stylesheet"
	href="<?php echo base_url("assets/css/video/video-js.min.css"); ?>" />
<link rel="stylesheet"
	href="<?php echo base_url("assets/css/video/videojs-resolution-switcher.css"); ?>" />
	
<link rel="stylesheet"
	href="<?php echo base_url("assets/css/video/video.css"); ?>" />



</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?=base_url()?>">Principal</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#">Peliculas</a></li>
					<li><a href="#">Promociones</a></li>
					<li><a href="<?=base_url()?>Aqui">Estamos aquí</a></li>
				</ul>
				<ul
					class="nav navbar-nav nav pull-left-xs pull-right-md pull-right-lg"
					id="dropDownLogin">
                 
                
          <?php if(!isset($_SESSION['idUser'])):?>
           <li id="btnRegistrar"><a href="#">Registrar</a></li>
					<li class="divider-vertical"></li>
					<li class="dropdown" id="menuLogin"><a class="dropdown-toggle"
						href="#" data-toggle="dropdown" id="navLogin">Login</a>
						<div class="dropdown-menu dropdown-menu-right"
							style="padding: 17px;">
							<form class="form" id="formlogin">
								<label class="change-color-sm">Correo: </label> <input
									name="username" id="username" type="text" placeholder="Correo">
								<br> <br>
								<label class="change-color-sm">Contrase&ntilde;a: </label> <input
									name="loginpassword" id="loginpassword" type="password"
									placeholder="Contrase&ntilde;a"><br>
									<br><a href="#" id="idOlvidado">&iquestHas olvidado la Contrase&ntilde;a?</a><br>
								<br> <input type="submit" id="btnLogin" class="btn"
									value="login">
							</form>
						</div>
            <?php else :?>
            
          
					
					<li class="dropdown" id="menuLogin"><a class="dropdown-toggle"
						href="#" data-toggle="dropdown" id="navLogin"><img src="<?=base_url()."assets/img/photoUser/".$_SESSION['imagenUser']?>" id="navImagenUser">&nbsp;&nbsp;<?= $_SESSION['correoUser']; ?></a>
						<div class="dropdown-menu" style="padding: 17px;">

							<a href="<?=base_url()?>Usuarios/zonaUser">Mi cuenta</a><br>
							<button class="btn" id="idBtnDesconectar">Desconectar</button>
						</div>
            <?php endif;?>
            </li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
	<div class="container">
<?php echo $body; ?>
</div>
	<br />
	<br />
	<br />
	<footer>
		<!--footer-->
		<div class="container">
			<div class="row">
				<ul class="list-unstyled">
					<li class="col-sm-4 col-xs-5"><a href="#">Trabaja con nosotros</a>
					</li>
					<li class="col-sm-4 col-xs-5"><a href="#">Politicas de Privacidad</a>
					</li>
					<li class="col-sm-4 col-xs-2"><a href="#">Ayuda</a></li>

				</ul>
			</div>
			<!--/row-->

		</div>
		<!--/container-->
	</footer>
	<!--/footer-->

	<script type="text/javascript"
		src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</body>

</html>