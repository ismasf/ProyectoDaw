<?php 



if(isset($usuarioInfo) && $usuarioInfo[0]['nombre']!=null ){
	
	$nombre=$usuarioInfo[0]['nombre'];
}else{
	
	$nombre="";
	
}

if(isset($usuarioInfo) && $usuarioInfo[0]['apellidos']!=null ){
	
	$apellidos=$usuarioInfo[0]['apellidos'];
}else{
	
	
	$apellidos="";
}


if(isset($usuarioInfo) && $usuarioInfo[0]['user']!=null ){

	$email=$usuarioInfo[0]['user'];
}else{


	$email="";
}


?>



<script>
  function enviar(){
    return false;
   
  }
  


</script>

<style>
#myFormContacto span.help-inline{

color:red;
    font-weight: 700;
}

#myFormContacto span.help-inline.valid{

border:none;

</style>
<div class="row tile_count">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Formulario de Contacto </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="myFormContacto" action="<?=base_url()?>contacto/correo" class="form-horizontal form-label-left" method='POST' >

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre: <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" value="<?=$nombre?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Apellido: <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Apellido" name="apellido" value="<?=$apellidos?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email: <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="email" class="form-control" placeholder="Email" name="email" value="<?=$email?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mensaje: <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="6" placeholder='Mensaje' name="mensaje" id="mensaje"></textarea>
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

$( "#myFormContacto" ).validate({
	errorElement: 'span',
    errorClass: 'help-inline',
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
      required:true,
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
      email: "Introcuzca un correo valido"
    },
    mensaje:{
      required: "Debe escribir un mensaje.",
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