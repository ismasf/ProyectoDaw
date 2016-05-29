<?php

/*var_dump($mensajes);*/

?>
<link rel="stylesheet"
	href="<?php echo base_url("assets/css/chatAdmin.css"); ?>" />
<div class="">


            <div class="page-title">
              

              
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Mensajes de la Incidencia:</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <p>N&ordm; de Incidencica: <?=$caso?> </p><p>Nombre Usuario: <?= $usuario[0]['nombre']." ".$usuario[0]['apellidos']?> </p>
                    <div id="containerChat">
                    
                    
                    
                    		<?php foreach ($mensajes as $k):?>
                    			<?php if($k['remitente']=="soporte"):?>
                    			<div class="row">
                    			<div class="bubble2"><p><strong><?=$k['remitente']?>:</strong><br><?= $k['mensaje']?><br><strong><?=$k['fecha_hora']?></strong></p></div>
                    			</div>
                 				<?php else :?>
                 				
                 				<div class="row">
                    			<div class="bubble"><p><strong><?=$k['remitente']?>:</strong><br><?= $k['mensaje']?><br><strong><?=$k['fecha_hora']?></strong></p></div>
                    			</div>
                 				
                 				<?php endif;?>
                    
                    		 <?php endforeach;?>
                    
                    
                  </div>
                  
                  <div id="mensajeSoporte">
                  
                  <h2>Nuevo mensaje:</h2>
                  
                  <form id="formNuevoMensaje">


						<label for="txtNuevoMensaje">Mensaje</label>
						<textarea name="idmensajenuevo" id="idmensajenuevo" rows="6" cols="45" maxlength="250"></textarea>
						<div id="errorNuevo" class="errordiv"></div><br>

<input type="button" id="btnNuevoMensaje" value="Enviar" class="remodal-confirm descargar" onclick="addNuevoMensaje(<?=$mensajes[0]['incidencia_id'].",".$mensajes[0]['remitente_id'] ?>)" style="margin-left:33%;">
</form>
                  
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          
          
             
    <script src="<?=base_url()?>assets/css/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

   
    <!-- FastClick 
    <script src="<?=base_url()?>assets/css/vendors/fastclick/lib/fastclick.js"></script>-->
    <!-- NProgress 
    <script src="<?=base_url()?>assets/css/vendors/nprogress/nprogress.js"></script>-->
    <!-- Datatables -->
    <script src="<?=base_url()?>assets/css/vendors/datatables.net/js/jquery.dataTables.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
     <script src="<?=base_url()?>assets/js/registrar/jquery.validate.min.js"></script>
     <script src="<?=base_url()?>assets/js/administrador/incidenciasAdmin.js"></script>
   <!-- <script src="<?=base_url()?>assets/css/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/pdfmake/build/pdfmake.min.js"></script>
     <script src="<?=base_url()?>assets/css/vendors/pdfmake/build/vfs_fonts.js"></script> -->



    

  