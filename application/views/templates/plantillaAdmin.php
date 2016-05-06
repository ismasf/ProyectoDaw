<!DOCTYPE html>
<html lang="en">
  <head>
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
   

    <!-- Custom Theme Style -->
    <link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
  
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?= base_url()?>administrador/principal" class="site_title"><i class="fa fa-paw"></i> <span>CINEMADAW</span></a>
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
                  <li><a><i class="fa fa-home"></i> Cartelera <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url()?>administrador/cartelera">Modificar cartelera</a>
                      </li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-video-camera"></i> Peliculas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url()?>administrador/crearPelicula">Crear pelicula</a>
                      </li>
                      <li><a href="<?= base_url()?>">Modificar pelicula</a>
                      </li>
                      <li><a href="<?= base_url()?>">Eliminar pelicula</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url()?>">Activar usuario</a>
                      </li>
                      <li><a href="<?= base_url()?>">Modificar usuario</a>
                      </li>
                      <li><a href="<?= base_url()?>">Eliminar usuario</a>
                      </li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-film"></i> Sala <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url()?>">Ver salas</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-calendar"></i> Sesión <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url()?>administrador/crearSesiones">Crear sesión</a>
                      </li>
                      <li><a href="<?= base_url()?>">Eliminar sesión</a>
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

    <script>
      $(document).ready(function() {
        var data1 = [
          [gd(<?=date("Y",mktime(0, 0, 0, date("m")  , date("d")-5, date("Y")))?>, <?=date("m",mktime(0, 0, 0, date("m")  , date("d")-5, date("Y")))?>, <?=date("d",mktime(0, 0, 0, date("m")  , date("d")-5, date("Y")))?>), <?=$datoCant[5]['con']?>],
          [gd(<?=date("Y",mktime(0, 0, 0, date("m")  , date("d")-4, date("Y")))?>, <?=date("m",mktime(0, 0, 0, date("m")  , date("d")-4, date("Y")))?>, <?=date("d",mktime(0, 0, 0, date("m")  , date("d")-4, date("Y")))?>), <?=$datoCant[4]['con']?>],
          [gd(<?=date("Y",mktime(0, 0, 0, date("m")  , date("d")-3, date("Y")))?>, <?=date("m",mktime(0, 0, 0, date("m")  , date("d")-3, date("Y")))?>, <?=date("d",mktime(0, 0, 0, date("m")  , date("d")-3, date("Y")))?>), <?=$datoCant[3]['con']?>],
          [gd(<?=date("Y",mktime(0, 0, 0, date("m")  , date("d")-2, date("Y")))?>, <?=date("m",mktime(0, 0, 0, date("m")  , date("d")-2, date("Y")))?>, <?=date("d",mktime(0, 0, 0, date("m")  , date("d")-2, date("Y")))?>), <?=$datoCant[2]['con']?>],
          [gd(<?=date("Y",mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")))?>, <?=date("m",mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")))?>, <?=date("d",mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")))?>), <?=$datoCant[1]['con']?>],
          [gd(<?=date("Y",mktime(0, 0, 0, date("m")  , date("d"), date("Y")))?>, <?=date("m",mktime(0, 0, 0, date("m")  , date("d"), date("Y")))?>, <?=date("d",mktime(0, 0, 0, date("m")  , date("d"), date("Y")))?>), <?=$datoCant[0]['con']?>]
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];
        $("#canvas_Mio").length && $.plot($("#canvas_Mio"), [
          data1
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
  </body>
</html>