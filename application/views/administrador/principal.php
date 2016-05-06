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
              <div class="count"><?=$ingresosTotales[0]["precio"]?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
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


          

        

