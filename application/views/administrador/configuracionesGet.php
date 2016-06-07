<script src="<?=base_url()?>assets/css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>assets/css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/css/vendors/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="<?=base_url()?>assets/css/vendors/switchery/dist/switchery.min.js"></script>

    <script src="<?=base_url()?>assets/css/vendors/fastclick/lib/fastclick.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/nprogress/nprogress.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/dropzone/dist/min/dropzone.min.js"></script>

    <script src="<?=base_url()?>assets/js/registrar/jquery.validate.min.js"></script>


<div class="row tile_count">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Configuración </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="myForm" action="<?=base_url()?>administrador/configuracionesPost" class="form-horizontal form-label-left" method='POST'>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Precio de entrada: <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Título" name="precio" id="titulo" value="<?=$conf->precio?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiempo de recarga de mapa de asientos: <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Director" name="tiempoRecarga" value="<?=$conf->tiemporecarga?>">
                        </div>
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
    precio: {
      required: true,
      
    },
    tiempoRecarga:{
      required: true,
      
    }
  },
  messages:{
    precio:{
      required: "Introduzca un precio.",
     
    },
    tiempoRecarga:{
      required: "Introduzca un tiempo.",
     
    }
  },
  success: "valid",
  submitHandler: function(){
    if(confirm("¿Quieres modificar la configuración?")){
      myForm.submit();
    }
  }
});




    </script>