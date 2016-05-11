<!-- <html>
	<head>

	</head>
	<body>
			<br><br>
		<form action="<?= base_url()?>administrador/principal">
			Usuario: <input type="text"></input><br>
			Contraseña: <input type="password"></input>
			<br>
			<input type="submit"></input>

		</form>


	</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <!-- Bootstrap -->
    <link href="<?=base_url()?>assets/css/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url()?>assets/css/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">
  </head>

  <body style="background:#F7F7F7;">
    <div class="">
      <a class="hiddenanchor" id="toregister"></a>
      <a class="hiddenanchor" id="tologin"></a>

      <div id="wrapper">
        <div id="login" class=" form">
          <section class="login_content">
            <form action="<?= base_url()?>administrador/principal">
              <h1>Iniciar sesión</h1>
              <div>
                <input type="text" class="form-control" placeholder="Usuario" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" required="" />
              </div>
              <div>
              	<input type="submit" class="btn btn-default" value="ENTRAR"></input>
                <!-- <a class="btn btn-default submit" href="index.html">Conectar</a> -->
                
              </div>
              <div class="clearfix"></div>
              <div class="separator">

                
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-video-camera" style="font-size: 26px;"></i> CinemaDaw</h1>

                  <p>Sitio administrador de CinemaDaw.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>