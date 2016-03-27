<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
<meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1">
<style>
	body{padding-top: 30px}
	footer{
		bottom: 0;
		width:100%;
		background-color: black;
		position: fixed;
	}
</style>
<title>Tu Cine</title>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<?php $this->load->view('registro/scripts');?>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url()?>">Principal</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Peliculas</a>
                    </li>
                    <li>
                        <a href="#">Promociones</a>
                    </li>
                    <li>
                        <a href="#">Estamos aquí</a>
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
<br/><br/><br/>
<footer><!--footer-->
  <div class="container">
      	<div class="row">
          <ul class="list-unstyled">
            <li class="col-sm-4 col-xs-6">
              <a href="#">Trabaja con nosotros</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Politicas de Privacidad</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Ayuda</a>
            </li>

          </ul>
		</div><!--/row-->

  </div><!--/container-->
</footer><!--/footer-->

<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>

</html>