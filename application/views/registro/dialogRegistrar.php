 <div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">
  <button data-remodal-action="close" class="remodal-close"></button>
           
  <h1>Registro</h1>
            
        <form id="miForm" action="Usuarios/guardar" method="post">    
            
            <div class="form-registrar">
                
                <div class="form-fondo-blanco">
                
                    <div class="form-row">
                        <label>
                            <span class="lab">Nombre: </span>
                            <input type="text" id="idNombre" name="idNombre" >
                            <div class="errordiv"></div>
                        </label>
                        
                    </div>
                
                 <div class="form-row">
                    <label> 
                         <span class="lab">Apellidos: </span>
                        <input type="text" id="idApellidos" name="idApellidos" >
                         <div class="errordiv"></div>
                    </label>
                    
                </div>
                    
                     <div class="form-row">
                         <label>
                             <span class="lab">Ciudad: </span>
                             <input type="text" id="idCiudad" name="idCiudad" >
                              <div class="errordiv"></div>
                        </label>
                       
                    </div>
                
            <div class="form-row">
                
                <label>
                    <span class="lab">Fecha de Nacimiento: </span>
                    <input type="text" id="idFechaN" name="idFechaN" >
                     <div class="errordiv"></div>
                </label>
               
            </div>
            
            <div class="form-row">
              <label>
                    <span class="lab">Usuario: </span>
                    <input type="text" id="idCorreo" name="idCorreo" >
                     <div class="errordiv"></div>
              </label>
              
          </div>
            
          <div class="form-row">
              <label>
                    <span class="lab">Contraseña: </span>
                    <input type="password" id="idPassword" name="idPassword" >
                     <div class="errordiv"></div>
              </label>
              
          </div>
            
           
        <div class="form-row">
            <label>
                <span class="lab">Re-Contraseña: </span>
                <input type="password" id="idPasswordConfirm" name="idPasswordConfirm" >
                 <div class="errordiv"></div>
            </label>
           
        </div>
  
            </div>
        
            
            <button type="submit"  class="remodal-confirm"  id="idBtnRegistrar">Registrar</button>
           
        
          </div>
         </form>   
        </div>