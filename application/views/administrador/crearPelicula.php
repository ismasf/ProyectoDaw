<!-- 
<form action="<?=base_url()?>administrador/crearPeliculaPost" method='POST' ENCTYPE="multipart/form-data">
	<label>Titulo:</label><input type="text" name="titulo"></input><br>
	<label>Director:</label><input type="text" name="director"></input><br>
	<label>Sinopsis:</label><textarea name="sino"></textarea><br>
	<label>Imagen:</label><input type="file" name="userfile"></input><br>
	<label>Duracion en min:</label><input type="text" name="duracion"></input>
	<input type="submit"></input>



</form> -->
<script src="<?=base_url()?>assets/css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>assets/css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/css/vendors/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="<?=base_url()?>assets/css/vendors/switchery/dist/switchery.min.js"></script>

    <script src="<?=base_url()?>assets/css/vendors/fastclick/lib/fastclick.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/nprogress/nprogress.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/dropzone/dist/min/dropzone.min.js"></script>

    <script src="<?=base_url()?>assets/js/registrar/jquery.validate.min.js"></script>

<script>
  function enviar(){
    return false;
   
  }
  


</script>
<div class="row tile_count">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Inserción de pelicula </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="myForm" action="<?=base_url()?>administrador/crearPeliculaPost" class="form-horizontal form-label-left" method='POST' ENCTYPE="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Título de la pelicula: <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Título" name="titulo" id="titulo">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Director de la pelicula: <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Director" name="director">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sinopsis: <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="6" placeholder='Resumen de la pelicula' name="sino"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Insertar en cartelera: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" name="cartelera" />
                            </label>
                          </div>
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Minutos de duración: <span class="required">*</span></label>
                        <input class="knob" data-width="100" data-height="120" data-angleOffset=90 data-linecap=round data-fgColor="#26B99A" value="135" name="duracion">
                      </div>







                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Imagen de cartel: <span class="required">*</span></label><input type="file" name="userfile"></input><br>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Imagen de pelicula: <span class="required">*</span></label><input type="file" name="userfile2"></input><br>
                      </div>
                     

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <!-- <button type="submit" class="btn btn-primary">Cancelar</button> -->
                          <button type="submit" class="btn btn-success">Enviar</button>
                        </div>
                      </div>

                    </form>


                  </div>
                </div>
              










              




    

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
    },
    userfile:{
      required:true
    },
    userfile2:{
      required:true
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
    },
    userfile:{
      required: "Se requiere una imagen."
    },
    userfile2:{
      required: "Se requiere una imagen."
    }
  },
  success: "valid",
  submitHandler: function(){
    if(confirm("¿Quieres insertar la pelicula?")){
      myForm.submit();
    }
  }
});




    </script>