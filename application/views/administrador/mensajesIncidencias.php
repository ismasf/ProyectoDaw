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
                </div>
              </div>
            </div>
          </div>
          </div>