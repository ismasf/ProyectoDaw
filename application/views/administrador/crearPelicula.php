

<!DOCTYPE html>
<html lang="en">
  <head>
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
   

    <!-- Custom Theme Style -->
    <link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
 <!--  <?php
  //print_r ($datoCant);

  $hoy =date("d",mktime(0, 0, 0, date("m")  , date("d")-10, date("Y")));
  echo $hoy;
  echo "<br>".$datoCant[2]['con'];
  foreach ($datoCant as $k) {
    print_r($k);
    echo $k['con'].'<br>';
  }

  ?> -->
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?=base_url()?>administrador/principal" class="site_title"><i class="fa fa-paw"></i> <span>CINEMADAW</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
              <!-- *Imagen de perfil -->
                <img src="" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <!-- *Nombre de perfil -->
                <h2>Tu nombre</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a>
                      </li>
                      <li><a href="index2.html">Dashboard2</a>
                      </li>
                      <li><a href="index3.html">Dashboard3</a>
                      </li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-edit"></i> Peliculas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url()?>administrador/crearPelicula">Crear pelicula</a>
                      </li>
                      <li><a href="">Modificar pelicula</a>
                      </li>
                      <li><a href="">Eliminar pelicula</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="">Activar usuario</a>
                      </li>
                      <li><a href="">Modificar usuario</a>
                      </li>
                      <li><a href="">Eliminar usuario</a>
                      </li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Sala <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="">Ver salas</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Informes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Entradas</a>
                      </li>
                      <li><a href="chartjs2.html">Peliculas</a>
                      </li>
                      <li><a href="morisjs.html">Usuarios</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout">
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
                    <img src="" alt="">Tu nombre
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">

          <br><br>
<form action="<?=base_url()?>administrador/crearPeliculaPost" method='POST' ENCTYPE="multipart/form-data">
	<label>Titulo:</label><input type="text" name="titulo"></input><br>
	<label>Director:</label><input type="text" name="director"></input><br>
	<label>Sinopsis:</label><textarea name="sino"></textarea><br>
	<label>Imagen:</label><input type="file" name="userfile"></input>
	<input type="submit"></input>



</form>


          

        </div>
        <!-- /page content -->

        <!-- footer content -->
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
    <script src="<?=base_url()?>assets/css/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.resize.js"></script>
    <script src="<?=base_url()?>assets/css/jquery.flot.spline.js"></script>
    <script src="<?=base_url()?>assets/css/curvedLines.js"></script>
    <script src="<?=base_url()?>assets/css/custom.js"></script>

    
  </body>
</html>