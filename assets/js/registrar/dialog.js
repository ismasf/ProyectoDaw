$(document).ready(function(){
	
	$('img.tamanio.grow').on('mouseenter',function(){
        
        
        $(this).closest('.grow2').css('transform', 'scale(1.1)');
        
        
    });
    
    $('img.tamanio.grow').on('mouseleave',function(){
        
      
        $(this).closest('.grow2').css('transform', 'scale(1)');
        
        
    })
	
	
	
	
	
	
	$('div.remodal').load(baseUrl+"assets/html/registro.html");
	inst = $('[data-remodal-id=modal]').remodal();
    
    
    
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
    return this.optional(element) || /^[a-zA-Z áÁãâäàéÉêëèíÍîïìóÓõôöòúÚûüùçÑñ]+$/i.test(value);
}, "Letras y espacios solo");
    
    jQuery.validator.addMethod('claveNumberLetter', function(value, element) {
        return this.optional(element) || /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]+$/i.test(value);
    }, "La contraseña debe tener al menos 1 letra y un numero");
    
    
    
$.validator.addMethod("dateFormat",
    function(value, element) {
        return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
    },
    "Por favor introduce una fecha con el formato dd-mm-yyyy.");
    
  
 jQuery.validator.addMethod('letterDigitsOnly', function(value, element) {
    return this.optional(element) || /^[a-z0-9]+$/i.test(value);
}, "Letras y numeros solo");
    
    
   
    
//...FIN---AddMethods ValidatePlugin:::::......    
    
    
   
    
    
    
    
    
    
    
   /* $('#registrar').on('click',function(){
        
    	
       var inst = $('[data-remodal-id=modal]').remodal();
        
        inst.open();
        
        
        
    });*/
 
    $('#btnRegistrar').on('click',function(){
        
    	$('div.remodal').load(baseUrl+"assets/html/registro.html", validacionRegistrar);
        
         
         inst.open();
         
         
         
         
         
    });
    
    
    function validacionRegistrar(){
        
        
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
    
    
     $('#idFechaN').attr('readOnly', 'true');
  
    
    
    
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
                                url: baseUrl+"Usuarios/comprobarEmail",  //<?=base_url()?>assets/css/estilo.css">
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
            claveNumberLetter:true,
              maxlength: 12,
              minlength: 6
                
                
            }, 
            
             idPasswordConfirm: {
                required: true,
            equalTo: '#idPassword',
              maxlength: 12,
              minlength: 6
                
                
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
        	 
        	 $('#idBtnRegistrar').prop("disabled", true);
            
        /*$(form).ajaxSubmit();*/
        	 

        	 $.ajax({
                 type: "POST",
                 url: baseUrl+"Usuarios/guardar",
                 data: $(form).serialize(),
                 success: function (response) {
                     
                	 if(response.trim()=="ok"){
                		 //alert("bien")
                		 $('#idBtnRegistrar').prop("disabled", false);
                		 
                		 $('div.remodal').html('<h1 id="registroCorrecto">Registro correcto, se le va a redirigir a la pagina principal<h1><br><br><p>Si quieres permanecer en la misma pagina, presione <a href="# id="seguirAqui">Aqui</a></p>');
                		 
                		 segundos=5;
                		idInterval = setInterval(function() {
                			 inst = $('[data-remodal-id=modal]').remodal();
                	         
                	 			
                	         
                			segundos--;
                			if(segundos<1){
                				clearInterval(idInterval);
                				$('div.remodal').load(baseUrl+"assets/html/registro.html");
                				location.href=baseUrl;
                				inst.close();
                				
                				
                				
                			}
                			
                			
                		},500);
                		
                		$('#estadoRegistro').val('si');
                		
                	 }else if(response.trim()="errorValidacion"){
                		 
                		 alert("Error validacion");
                		 
                		 
                		 
                	 }else{
                		 $('#idBtnRegistrar').prop("disabled", false);
                		 $('#estadoRegistro').val('no');
                		
 $('div.remodal').html('<h1 id="registroFallado">No hemos podido darle de alta en nuestra base de datos, por favor intentelo mas tarde, se le va a redirigir a la pagina principal<h1><br><br><p>Si quieres permanecer en la misma pagina, presione <a href="# id="seguirAqui">Aqui</a></p>');
                		 
                		 segundos=5;
                		idInterval = setInterval(function() {
                			 inst = $('[data-remodal-id=modal]').remodal();
                	         
                	 			
                	         
                			segundos--;
                			if(segundos<1){
                				clearInterval(idInterval);
                				$('div.remodal').load(baseUrl+"assets/html/registro.html");
                				window.location.replace(baseUrl);
                				inst.close();
                				
                			}
                			
                			
                		},500);
                	 }
                	 
                 }
                     });
        	 
        	 
        	 
        	 
  } 
        	 
        	 
          
          
          
          
      });
        
        
        
        
        
    }
    
    $("div.remodal").on('click', 'a', function(){
    	
 
         
 			clearInterval(idInterval);
 			$('div.remodal').load(baseUrl+"assets/html/registro.html");
         inst.close();
    	
    	
    	
    	
    })
    
    
    
    $('#miFormUpdate').validate({
        
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
                 url: baseUrl+"Usuarios/actualizar",
                 data: $(form).serialize(),
                 success: function (response) {
                     
                	 if(response.trim()=="ok"){
                		 //alert("bien")
                		 $('div.remodal').html('<h1>Se ha actualizado su informacion correctamente, se le va a redirigir a la pagina principal<h1><br><br><p>Si quieres permanecer en la misma pagina, presione <a href="# id="seguirAqui">Aqui</a></p>');
                		 inst.open();
                		 segundos=5;
                		idInterval = setInterval(function() {
                			 inst = $('[data-remodal-id=modal]').remodal();
                	         
                	 			
                	         
                			segundos--;
                			if(segundos<1){
                				clearInterval(idInterval);
                				$('div.remodal').load(baseUrl+"assets/html/registro.html");
                				window.location.replace(baseUrl);
                				inst.close();
                				
                			}
                			
                			
                		},500);
                		
                		
                		 
                	 }else{
                		 alert("No hemos podido actualizar su informacion, por favor intentelo mas tarde")
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