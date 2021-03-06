<script>
  
  function cancelar(){
    window.location="<?=base_url()?>/administrador/modificarPelicula";
  }

  




</script>



<div class="row tile_count">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Modificación de pelicula </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="myForm" action="<?=base_url()?>administrador/modificarPeliculaPost/<?=$id?>" class="form-horizontal form-label-left" method='POST' ENCTYPE="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Título de la pelicula: <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Título" name="titulo" id="titulo" value="<?=$pelicula->titulo?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Director de la pelicula: <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Director" name="director" value="<?=$pelicula->director?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sinopsis: <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="6" placeholder='Resumen de la pelicula' name="sino"><?php
			
			$data = file_get_contents ( base_url () . "assets/json/peliculas.json" );
			$json = json_decode ( $data, true );
			// print_r($products);
			echo $json ["peliculas"] ["id" . $pelicula->id] ["Sinopsis"];
			
			/*
			 * $json["peliculas"]["id3"]["Sinopsis"]="Pruebaaaaa";
			 *
			 * $fh = fopen("assets/json/peliculas.json", 'w');
			 * fwrite($fh, json_encode($json,JSON_UNESCAPED_UNICODE));
			 * fclose($fh);
			 */
			
			?></textarea>
                        </div>
                      </div>

                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Insertar en cartelera: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" name="cartelera" />
                            </label>
                          </div>
                          
                        </div>
                      </div> -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Minutos de duración: <span class="required">*</span></label>
                        <input class="knob" data-width="100" data-height="120" data-angleOffset=90 data-linecap=round data-fgColor="#26B99A" value="<?=$pelicula->duracion?>" name="duracion">
                      </div>







                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cambiar imagen de cartel: </label><input type="file" name="userfile"></input><br>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cambiar imagen de pelicula: </label><input type="file" name="userfile2"></input><br>
                      </div>
                     

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary" onclick="cancelar()">Cancelar</button>
                          <button type="submit" class="btn btn-success">Enviar</button>
                        </div>
                      </div>

                    </form>


                  </div>
                </div>
              










              



<script src="<?=base_url()?>assets/css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>assets/css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/css/vendors/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="<?=base_url()?>assets/css/vendors/switchery/dist/switchery.min.js"></script>

    <script src="<?=base_url()?>assets/css/vendors/fastclick/lib/fastclick.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/nprogress/nprogress.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/dropzone/dist/min/dropzone.min.js"></script>

    <script src="<?=base_url()?>assets/js/registrar/jquery.validate.min.js"></script>
    

              <script>
      $(function($) {

        $(".knob").knob({
          change: function(value) {
            //console.log("change : " + value);
          },
          release: function(value) {
            //console.log(this.$.attr('value'));
            console.log("release : " + value);
          },
          cancel: function() {
            console.log("cancel : ", this);
          },
          /*format : function (value) {
           return value + '%';
           },*/
          draw: function() {

            // "tron" case
            if (this.$.data('skin') == 'tron') {

              this.cursorExt = 0.3;

              var a = this.arc(this.cv) // Arc
                ,
                pa // Previous arc
                , r = 1;

              this.g.lineWidth = this.lineWidth;

              if (this.o.displayPrevious) {
                pa = this.arc(this.v);
                this.g.beginPath();
                this.g.strokeStyle = this.pColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                this.g.stroke();
              }

              this.g.beginPath();
              this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
              this.g.stroke();

              this.g.lineWidth = 2;
              this.g.beginPath();
              this.g.strokeStyle = this.o.fgColor;
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
              this.g.stroke();

              return false;
            }
          }
        });

        // Example of infinite knob, iPod click wheel
        var v, up = 0,
          down = 0,
          i = 0,
          $idir = $("div.idir"),
          $ival = $("div.ival"),
          incr = function() {
            i++;
            $idir.show().html("+").fadeOut();
            $ival.html(i);
          },
          decr = function() {
            i--;
            $idir.show().html("-").fadeOut();
            $ival.html(i);
          };
        $("input.infinite").knob({
          min: 0,
          max: 20,
          stopper: false,
          change: function() {
            if (v > this.cv) {
              if (up) {
                decr();
                up = 0;
              } else {
                up = 1;
                down = 0;
              }
            } else {
              if (v < this.cv) {
                if (down) {
                  incr();
                  down = 0;
                } else {
                  down = 1;
                  up = 0;
                }
              }
            }
            v = this.cv;
          }
        });
      });
    </script>

    <script>
      

$( "#myForm" ).validate({
  rules: {
    titulo: {
      required: true,
      minlength: 5
    },
    director:{
      required: true,
      minlength: 3
    },
    sino:{
      required: true,
      minlength: 15
    }
  },
  messages:{
    titulo:{
      required: "Introduzca un titulo.",
      minlength: "Introduzca un titulo."
    },
    director:{
      required: "Introduzca un director.",
      minlength: "Introduzca un director."
    },
    sino:{
      required: "Introduzca una sinopsis.",
      minlength: "Introduzca una sinopsis."
    }
  },
  success: "valid",
  submitHandler: function(){ 
    if(confirm("¿Quieres actualizar la pelicula?")){
      myForm.submit();
    }
  }
});




    </script>
