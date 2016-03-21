<html>
<head>
    
    <meta charset="ISO-8859-1 ">
    
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    
    <?= script_tag('assets/js/jquery.js') ?>
    <?= script_tag('assets/js/dialog.js') ?>
    <?= script_tag('assets/js/remodal.js') ?>
    
    <?= link_tag('assets/css/estiloDialogo.css') ?>
    <?= link_tag('assets/css/remodal-default-theme.css') ?>
    <?= link_tag('assets/css/remodal.css') ?>
    
    
    
</head>
    
    <body>
        
        <input type="button" id="abrir" value="abrir">
        
        <div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">
  <button data-remodal-action="close" class="remodal-close"></button>
  <h1>Remodal</h1>
            
            
          <div id="labelRegister">
                <label for="idNombre">Nombre: </label><br>
                <label for="idApellidos">Apellidos: </label><br>
                <label for="idCorreo">Correo: </label><br>
                <label for="idPassword">Contraseña: </label><br>
            
            </div>
            
            <div id="inputRegister">
                <input type="text" id="idNombre"><br>
                <input type="text" id="idApellidos"><br>
                <input type="text" id="idCorreo"><br>
                <input type="password" id="idPassword"><br>
            
            </div>
            
        </div>
        
    
    
    </body>

</html>