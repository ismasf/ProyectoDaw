$(document).ready(function(){
    
    
    
    
    //....:::::DatePicker:::::....
    
    var fechaHoy=new Date();
    var fechaAyer=new Date(fechaHoy.getFullYear(), fechaHoy.getMonth(), fechaHoy.getDate()-1);
    
    //DatePicker http://www.jqueryrain.com/?A_MO0kvZ
    $('#idFechaN').datepicker({
	language: 'es',
	minDate: new Date("1970","0","1"),
    view: "years",
    autoClose: true,
    maxDate: fechaAyer// Now can select only dates, which goes after today
})
    
  //...::::FIN-DATEPICKER:::::......
    
   
    
    
    
    
    

//...AddMethods ValidatePlugin:::::......
    
    
    jQuery.validator.addMethod('lettersonly', function(value, element) {
    return this.optional(element) || /^[a-z áãâäàéêëèíîïìóõôöòúûüùç]+$/i.test(value);
}, "Letras y espacios solo");
    
    
    
$.validator.addMethod("dateFormat",
    function(value, element) {
        return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
    },
    "Por favor introduce una fecha con el formato dd-mm-yyyy.");
    
  
 jQuery.validator.addMethod('letterDigitsOnly', function(value, element) {
    return this.optional(element) || /^[a-z0-9]+$/i.test(value);
}, "Letras y numeros solo");
    
    
   
    
//...FIN---AddMethods ValidatePlugin:::::......    
    
    
   
    
    
    
    
    
    
    
    $('#registrar').on('click',function(){
        
    	
       var inst = $('[data-remodal-id=modal]').remodal();
        
        inst.open();
        
        
        
    });
    
    
    
    
    
    //...:::VALIDACION:::......
    
    
    $('#miForm').validate({
         
    	errorElement: 'span',
        errorClass: 'help-inline',
        
        errorPlacement: function(error, element) {error.appendTo (element.siblings(".errordiv")); },
    	
    	
        rules: 
        {
          idNombre: {
            required: true,
            lettersonly: true,
              maxlength: 10,
              minlength: 3
          },
            idApellidos: {
                required: true,
            lettersonly: true,
              maxlength: 25,
              minlength: 4
                
                
            },
            
            idCiudad: {
                required: true,
            lettersonly: true,
              maxlength: 10,
              minlength: 3
                
                
            },
            
            
            idFechaN: {
                
                dateFormat: true,
                required: true
            },
            
            idCorreo: {
                
                email:true,
                required:true,
                remote: {
                                url: "/Proyecto/Usuarios/comprobarEmail",  //<?=base_url()?>assets/css/estilo.css">
                                type: "post",
                                data: {
                                username: function() {
                                    return $( "#idCorreo" ).val();
                                            }
                                    }
                }
                
            },
            
            idPassword: {
                required: true,
            letterDigitsOnly: true,
              maxlength: 25,
              minlength: 4
                
                
            }, 
            
             idPasswordConfirm: {
                required: true,
            equalTo: '#idPassword',
              maxlength: 25,
              minlength: 4
                
                
            }, 
            
            
        },
          
        messages: 
        {
          idNombre:{
            required: "Por favor, introduzca su nombre",
              maxlength: "Nombre demasiado largo",
              minlength: "Nombre demasiado corto"
          },
            
            idApellidos:{
            required: "Por favor, introduzca sus apellidos",
              maxlength: "Apellidos demasiados largos",
              minlength: "Apellidos demasiados cortos"
          },
            
            idFechaN:{
                
                required: "Por favor, introduzca su fecha de nacimiento"
                
                
            },
            
            idCorreo: {
            	required: "Introduzca un correo",
            	email: "Introcuzca un correo valido",
                remote: "El correo que ha introducido ya existe"
            },
            idCiudad: {
                required: "Introduzca su ciudad",
                maxlength: "Ciudad demasiado larga",
              minlength: "Ciudad demasiado corta"
            },
            
            idPassword: {
                required: "Introduzca su contraseña",
                maxlength: "Contraseña demasiado larga",
              minlength: "Contraseña demasiado corta",
                
            },
            idPasswordConfirm: {
                required: "Repita su contraseña",
                maxlength: "Contraseña demasiado larga",
              minlength: "Contraseña demasiado corta",
            equalTo: "Las contraseñas no coinciden"
                
            }
            
            
        },
          
         submitHandler: function(form) {
            
        /*$(form).ajaxSubmit();*/
        	 

        	 $.ajax({
                 type: "POST",
                 url: "Usuarios/guardar",
                 data: $(form).serialize(),
                 success: function (response) {
                     
                	 if(response.trim()=="ok"){
                		 alert("bien")
                		 
                	 }else{
                		 alert("mal")
                	 }
                	 
                 }
                     });
        	 
        	 
        	 
        	 
  } 
        	 
        	 
          
          
          
          
      }); 

          /*$('#miForm').on('submit',function(e){
    
    e.preventDefault();
    isValid=$('#miForm').valid();
    
    if(!isValid){
        alert("no");
    }else{
        alert("si");
        //inst.close();
        $.ajax({
            type: $(form).attr('method'),
            url: $(form).attr('action'),
            data: $(form).serialize(),
            dataType : 'post'
        })
        .done(function (response) {
            if (response.success == 'success') {               
                alert('success');                       
            } else {
                alert('fail');
            }
        });
        
        
        
    }
    
})*/
    
    
    /*....:::Variables:::.....*/
    
    /*registro="<h1>Registro</h1>"+
    
    '<form id="miForm" action="Usuarios/guardar" method="post">'+    
        
        '<div class="form-registrar">'+
            
            '<div class="form-fondo-blanco">'+
            
                '<div class="form-row">'+
                    '<label>'+
                        '<span class="lab">Nombre: </span>'+
                        '<input type="text" id="idNombre" name="idNombre" >'+
                        '<div class="errordiv"></div>'+
                    '</label>'+
                    
                '</div>'
            
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
     </form>" ;*/
    
    
});



    
    
