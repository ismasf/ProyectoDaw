<br/>
<!--  <div class="container">
<form id="formulario" action="" method="post" novalidate><br/>
     <label for="nombre">Nombre  *</label> <input type="text" id="nombre" name="nombre"><br/>
     <label for="apellidos">Apellidos  *</label> <input type="text" id="apellidos" name="apellidos"><br/>
     <label for="telefono">Teléfono  *</label><input type="tel" id="telefono" name="telefono"><br/>
     <label for="email">Email  *</label> <input type="email" id="email" name="email"><br/>
     <label for="email2">Confirmar Email  *</label> <input type="email" id="email2" name="email2"><br/>
     <label for="mensaje">Escribe el mensaje *</label> <input type="text" id="iban" name="iban"><br/>
     <input class="enviar" type="submit" value="Enviar">
</form>
</div>-->


    <script src="<?=base_url()?>assets/js/registrar/jquery.validate.min.js"></script>

<script>
  function enviar(){
    return false;
   
  }
  


</script>
<div class="row tile_count">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Formulario de Contacto </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="myForm" action="<?=base_url()?>administrador/contactar" class="form-horizontal form-label-left" method='POST' >

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre: <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Apellido: <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email: <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mensaje: <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="6" placeholder='Mensaje' name="mensaje"></textarea>
                        </div>
                      </div>      
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
 <script type="text/javascript">
 $(document).ready(function(){   

$( "#myForm" ).validate({
  rules: {
    nombre: {
      required: true,
      minlength: 5
    },
    apellido:{
      required: true,
      minlength: 3
    },
    email:{
      required: true,
    },
    mensaje:{
      required:true
      minlength: 10
    },

  },
  messages:{
    nombre:{
      required: "Introduzca un Nombre.",
      minlength: "El nombre es muy corto."
    },
    apellido:{
      required: "Introduzca un Apellido.",
      minlength: "El apellido es muy pequeño."
    },
    email:{
      required: "Email obligatorio.",
    },
    mensaje:{
      required: "Debe escribir un mensaje."
      minlength: "El mensaje es demasiado pequeño."
    },
  },
  success: "valid",
  submitHandler: function(){
    if(confirm("¿Quieres enviar el correo?")){
      myForm.submit();
    }
  }
});
 });




    </script>