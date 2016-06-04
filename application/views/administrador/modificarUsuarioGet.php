
<script>
  
  function cancelar(){
    window.location="<?=base_url()?>/administrador/modificarUsuario";
  }

  




</script>



<div class="row tile_count">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Modificación de usuario </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="myForm" action="<?=base_url()?>administrador/modificarUsuarioPost/<?=$usuario->id?>" class="form-horizontal form-label-left" method='POST' ENCTYPE="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre: <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Título" name="nombre" id="titulo" value="<?=$usuario->nombre?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Apellidos: <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Director" name="apellidos" value="<?=$usuario->apellidos?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ciudad: <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Director" name="ciudad" value="<?=$usuario->ciudad?>">
                        </div>
                      </div>


     

                      

                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de nacimiento: <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" id="single_cal2" placeholder="Primer dia" aria-describedby="inputSuccess2Status" name="fecha" value="<?php 
                          $partes = explode("-", $usuario->fechanacimiento);
                          echo "$partes[1]/$partes[2]/$partes[0]";
                          ?>">
                          <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>

                        </div>
                        
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Verificado: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" name="verificado" <?php 
                              	if($usuario->verificado == "SI"){
                              		echo "checked";
                              	}
                              ?> />
                            </label>
                          </div>
                          
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Administrador: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" name="administrador" <?php 
                              	if($usuario->admin == "SI"){
                              		echo "checked";
                              	}
                              ?> />
                            </label>
                          </div>
                          
                        </div>
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

<script src="<?=base_url()?>assets/css/vendors/moment.min.js"></script>

    <script src="<?=base_url()?>assets/css/vendors/fastclick/lib/fastclick.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/nprogress/nprogress.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/dropzone/dist/min/dropzone.min.js"></script>

    <script src="<?=base_url()?>assets/js/registrar/jquery.validate.min.js"></script>


<script src="<?=base_url()?>assets/css/vendors/daterangepicker.js"></script>
<link href="<?=base_url()?>assets/css/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
<script src="<?=base_url()?>assets/css/vendors/iCheck/icheck.min.js"></script>
    

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
    nombre: {
      required: true,
      minlength: 2
    },
    apellidos:{
      required: true,
      minlength: 3
    },
    ciudad:{
      required: true,
      minlength: 2
    },
    fecha:{
      required: true,
      
    }
  },
  messages:{
    nombre:{
      required: "Introduzca un nombre.",
      minlength: "Introduzca un nombre."
    },
    apellidos:{
      required: "Introduzca un apellido.",
      minlength: "Introduzca un apellido."
    },
    ciudad:{
      required: "Introduzca una ciudad.",
      minlength: "Introduzca una ciudad."
    },
    fecha:{
      required: "Introduzca una fecha.",
      
    }
  },
  success: "valid",
  submitHandler: function(){ 
    if(confirm("¿Quieres modificar el usuario?")){
      myForm.submit();
    }
  }
});




    </script>





   

    <script>
      $(document).ready(function() {
        $('#single_cal1').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_1"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal2').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_2"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal3').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_3"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal4').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_4"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>

   

