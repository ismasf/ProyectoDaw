<?php
?>



<?php if(isset($_SESSION['idUser'])):

?>
<br><br>
<h1>Hola bienvenido, <?=$datos[0]['nombre']." ".$datos[0]['apellidos']?>.</h1>

<h3>En esta pagina podras modificar tus datos personales, descargar tus entradas y mucho mas.</h3>

<form id="miFormUpdate" action="Usuarios/guardar" method="post">    
            
            <div class="form-registrar">
                
                <div class="form-fondo-blanco">
                
                    <div class="form-row">
                        <label>
                            <span class="lab">Nombre: </span>
                            <input type="text" id="idNombre" name="idNombre" value="<?=$datos[0]['nombre']?>" >
                            <div class="errordiv"></div>
                        </label>
                        
                    </div>
                
                 <div class="form-row">
                    <label> 
                         <span class="lab">Apellidos: </span>
                        <input type="text" id="idApellidos" name="idApellidos" value="<?=$datos[0]['apellidos']?>" >
                         <div class="errordiv"></div>
                    </label>
                    
                </div>
                    
                     <div class="form-row">
                         <label>
                             <span class="lab">Ciudad: </span>
                             <input type="text" id="idCiudad" name="idCiudad" value="<?=$datos[0]['ciudad']?>" >
                              <div class="errordiv"></div>
                        </label>
                       
                    </div>
                
            <div class="form-row">
                
                <label>
                    <span class="lab">Fecha de Nacimiento: </span>
                    <input type="text" id="idFechaN" name="idFechaN" value="<?=$datos[0]['fechanacimiento']?>">
                     <div class="errordiv"></div>
                </label>
               
            </div>
            
            
            
          <div class="form-row">
              <label>
                    <span class="lab">Nueva-Contrase&ntilde;a: </span>
                    <input type="password" id="idPassword" name="idPassword" >
                     <div class="errordiv"></div>
              </label>
              
          </div>
            
           
        <div class="form-row">
            <label>
                <span class="lab">Re-Contrase&ntilde;a: </span>
                <input type="password" id="idPasswordConfirm" name="idPasswordConfirm" >
                 <div class="errordiv"></div>
            </label>
           
        </div>
  
            </div>
        
            
            <button type="submit"  class="remodal-confirm"  id="idBtnRegistrar">Actualizar</button>
           
        
          </div>
         </form>   




    <?php else :?>
    
    <h1>NO</h1>
   
    
     <?php endif;?>