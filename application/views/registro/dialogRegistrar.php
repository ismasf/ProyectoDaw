<div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">
  <button data-remodal-action="close" class="remodal-close"></button>
      <div id="dialog">      
  <h1>Registro</h1>
            
        <form id="miForm" action="Usuarios/guardar" method="post">    
          
              
            <table>
              <tr>
                <td><label for="idNombre">Nombre: </label></td><td><input type="text" id="idNombre" name="idNombre" ></td>
                  <td><label class="error" for="idNombre" generated="true"></label></td>
                
                </tr>
                 <tr>
                <td><label for="idApellidos">Apellidos: </label></td><td><input type="text" id="idApellidos" name="idApellidos"></td>
                     <td><label class="error" for="idApellidos" generated="true"></label></td>
                
                </tr>
                
                 <tr>
                <td><label for="idCiudad">Ciudad: </label></td><td><input type="text" id="idCiudad" name="idCiudad"></td>
                      <td><label class="error" for="idCiudad" generated="true" ></label></td>
                
                </tr>
                
                 <tr>
                <td><label for="idFechaN">Fecha de Nacimiento: </label></td><td><input type="text" id="idFechaN" name="idFechaN"></td>
                     <td><label class="error" for="idFechaN" generated="true"></label></td>
                
                </tr>
                
                
                 <tr>
                <td><label for="idCorreo">Correo: </label></td><td><input type="text" id="idCorreo" name="idCorreo"></td>
                      <td><label class="error" for="idCorreo" generated="true" id="error2"></label></td>
                
                </tr>
                 <tr>
                <td><label for="idPassword">Contraseña: </label></td><td><input type="password" id="idPassword" name="idPassword"></td>
                <td><label class="error" for="idPassword" generated="true" ></label></td>
                </tr>
              
                <tr>
                <td><label for="idPasswordConfirm">Re-Contraseña: </label></td><td><input type="password" id="idPasswordConfirm" name="idPasswordConfirm"></td>
                <td><label class="error" for="idPasswordConfirm" generated="true" ></label></td>
                </tr>
              
              </table>
                
            
            
            
            
            
            <button type="submit"  class="remodal-confirm"  id="idBtnRegistrar">Registrar</button>
           
        </form>
          </div>
            
        </div>