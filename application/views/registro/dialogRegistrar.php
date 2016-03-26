 <div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">
  <button data-remodal-action="close" class="remodal-close"></button>
           
  <h1>Registro</h1>
            
        <form id="miForm" action="Usuarios/guardar" method="post">    
            
            <div class="form-registrar">
                
                <div class="form-fondo-blanco">
                
                    <div class="form-row">
                        <label>
                            <span>Nombre: </span>
                            <input type="text" id="idNombre" name="idNombre" >
                        </label>
                        <span class="error" for="idNombre" generated="true"></span>
                    </div>
                
                 <div class="form-row">
                    <label> 
                         <span>Apellidos: </span>
                        <input type="text" id="idApellidos" name="idApellidos" >
                    </label>
                    <label class="error" for="idApellidos" generated="true"></label>
                </div>
                    
                     <div class="form-row">
                         <label>
                             <span>Ciudad: </span>
                             <input type="text" id="idCiudad" name="idCiudad" >
                        </label>
                        <label class="error" for="idCiudad" generated="true"></label>
                    </div>
                
            <div class="form-row">
                
                <label>
                    <span>Fecha de Nacimiento: </span>
                    <input type="text" id="idFechaN" name="idFechaN" >
                </label>
                <label class="error" for="idFechaN" generated="true"></label>
            </div>
            
          <div class="form-row">
              <label>
                    <span>Contraseña: </span>
                    <input type="password" id="idPassword" name="idPassword" >
              </label>
              <label class="error" for="idPassword" generated="true"></label>
          </div>
            
           
        <div class="form-row">
            <label>
                <span>Re-Contraseña: </span>
                <input type="password" id="idPasswordConfirm" name="idPasswordConfirm" >
            </label>
            <label class="error" for="idPasswordConfirm" generated="true"></label>
        </div>
        
        
                
                
                
            
            </div>
            
       
            
            
            <button type="submit"  class="remodal-confirm"  id="idBtnRegistrar">Registrar</button>
           
        
          </div>
         </form>   
        </div>