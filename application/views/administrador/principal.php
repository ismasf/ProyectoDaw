<!-- <br>
<br>
<a href="<?= base_url()?>administrador/crearSesiones">Crear sesiones</a>
<br>
<a href="<?= base_url()?>administrador/crearPelicula">Crear pelicula</a>
<br>
<a href="<?= base_url()?>administrador/cartelera">Cartelera</a>
<br>
<a href="<?= base_url()?>administrador/informeFacturas">Informe de facturas</a>
<br> -->

<?php
  
  $peli1 = $topPelis[0]['cant'];
  $peli2 = $topPelis[1]['cant'];
  $peli3 = $topPelis[2]['cant'];
  $total = $peli1+$peli2+$peli3;
  //echo ($peli1*100)/$total;




  ?>

          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total de usuarios</span>
              <!-- *Total de usuarios -->
              <div class="count"><?=$cUsuarios[0]["cantidad"]?></div>
              <!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-euro"></i> Total Ingresos</span>
              <div class="count"><?=number_format($ingresosTotales[0]["precio"],2,",",".")?> €</div>
              
            </div>
            
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Actividad del cine <small>Visitas al cine</small></h3>
                  </div>
                  <!-- <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div> -->
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
                  <div style="width: 100%;">
                    <div id="canvas_Mio" class="demo-placeholder" style="width: 100%; height:270px;"></div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Top Peliculas</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><?=$topPelis[0]['titulo']?></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?=($peli1*100)/$total?>"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><?=$topPelis[1]['titulo']?></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?=($peli2*100)/$total?>"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><?=$topPelis[2]['titulo']?></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?=($peli3*100)/$total?>"></div>
                        </div>
                      </div>
                    </div>
                    
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

          <script src="<?=base_url()?>assets/css/vendors/jquery/dist/jquery.min.js"></script> 
    <script src="<?=base_url()?>assets/css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.js"></script>
    <!-- <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.pie.js"></script> -->
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.time.js"></script>
    <!-- <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.stack.js"></script> -->
    <!-- <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.resize.js"></script> -->
    <script src="<?=base_url()?>assets/css/jquery.flot.spline.js"></script>
    <script src="<?=base_url()?>assets/css/curvedLines.js"></script>
    <!-- <script src="<?=base_url()?>assets/css/custom.js"></script> -->
    <!--<script src="<?=base_url()?>assets/css/vendors/moment/min/moment.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/fastclick/lib/fastclick.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/nprogress/nprogress.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/switchery/dist/switchery.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/jquery-knob/dist/jquery.knob.min.js"></script>-->
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


          

        

