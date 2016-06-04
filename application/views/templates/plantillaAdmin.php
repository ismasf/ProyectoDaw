<!DOCTYPE html>
<html lang="en">
  <head>
  <script>
baseUrl = "<?=base_url()?>";
</script>
  <?php
  $datoCant = isset($datoCant)?$datoCant:2;
  ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administrador</title>

    <!-- Bootstrap -->
    <link href="<?=base_url()?>assets/css/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url()?>assets/css/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=base_url()?>assets/css/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?=base_url()?>assets/css/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="<?=base_url()?>assets/css/vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
    <link href="<?=base_url()?>assets/css/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

    <link href="<?=base_url()?>assets/css/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


   

    <!-- Custom Theme Style -->
    <link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
  
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?= base_url()?>administrador/principal" class="site_title"><i class="fa fa-video-camera"></i> <span>CINEMADAW</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
              <!-- *Imagen de perfil -->
                <img src="<?=base_url()?>assets/img/photoUser/<?=$_SESSION['imagenUser']?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <!-- *Nombre de perfil -->
                <h2><?=$_SESSION['idUserAdmin']['nombre']?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-image"></i> Cartelera <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url()?>administrador/cartelera">Modificar cartelera</a>
                      </li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-video-camera"></i> Peliculas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url()?>administrador/crearPelicula">Crear pelicula</a>
                      </li>
                      <li><a href="<?= base_url()?>administrador/modificarPelicula">Modificar pelicula</a>
                      </li>
                      <li><a href="<?= base_url()?>administrador/eliminarPelicula">Eliminar pelicula</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url()?>administrador/activarUsuario">Activar usuario</a>
                      </li>
                      <li><a href="<?= base_url()?>administrador/modificarUsuario">Modificar usuario</a>
                      </li>
                      <li><a href="<?= base_url()?>administrador/eliminarUsuario">Eliminar usuario</a>
                      </li>
                      <li><a href="<?= base_url()?>administrador/incidencias">Incidencias</a>
                      </li>
                    </ul>
                  </li>
                  <!-- <li><a><i class="fa fa-film"></i> Sala <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url()?>">Ver salas</a>
                      </li>
                    </ul>
                  </li> -->
                  <li><a><i class="fa fa-calendar"></i> Sesión <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url()?>administrador/crearSesiones">Crear sesión</a>
                      </li>
                      <li><a href="<?= base_url()?>administrador/eliminarSesiones">Eliminar sesión</a>
                      </li>
                     
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Desconectar" href="<?=base_url()?>administrador/desconectar">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <!-- *Nombre e imagen de perfil -->
                    <img src="<?=base_url()?>assets/img/photoUser/<?=$_SESSION['imagenUser']?>" alt=""><?=$_SESSION['idUserAdmin']['nombre']?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?=base_url()?>administrador/desconectar"><i class="fa fa-sign-out pull-right"></i> Desconectar</a>
                    </li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>

        </div>
<div class="right_col" role="main">
        <?php echo $body; ?>
</div>
        <footer>
          <div class="pull-right">
            Ismael - Carlos - Amaury
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    
    <!-- bootstrap-progressbar -->
    
    <!-- iCheck -->
    
    <!-- Skycons -->
    
    <!-- Flot -->
    
    <!-- Flot plugins -->
    
    <!-- jVectorMap -->
    

    <!-- Custom Theme Scripts -->
    <!--  <script src="<?=base_url()?>assets/css/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.resize.js"></script>
    <script src="<?=base_url()?>assets/css/jquery.flot.spline.js"></script>
    <script src="<?=base_url()?>assets/css/curvedLines.js"></script>
    
    <script src="<?=base_url()?>assets/css/vendors/moment/min/moment.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/fastclick/lib/fastclick.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/nprogress/nprogress.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/switchery/dist/switchery.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/jquery-knob/dist/jquery.knob.min.js"></script>-->
    <script src="<?=base_url()?>assets/css/custom.js"></script>
    

    


    
        
  </body>
</html>