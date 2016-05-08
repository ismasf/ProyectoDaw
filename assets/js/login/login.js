$(document).ready(function(){
	
	$('form#formlogin').validate({
        
    	
    	
        rules: 
        {
          
            
            username: {
                
                email:true,
                required:true
                
                
                
            },
            
            loginpassword: {
                required: true,
            letterDigitsOnly: true,
              maxlength: 25,
              minlength: 4
                
                
            }
            
            
        },
          
        errorPlacement: function(){
            return false;
        },
          
         submitHandler: function(form) {
        	 
        	
            
        /*$(form).ajaxSubmit();*/
        	 

        	 $.ajax({
                 type: "POST",
                 url: baseUrl+"Usuarios/login",
                 data: $(form).serialize(),
                 success: function (response) {
                     
                	 if(response.trim()=="ok"){
                		 
                		 $('li#menuLogin').removeClass('open');
                		 usuario=$('input[name="username"]').val();
                		 
                		 $('#btnRegistrar').hide();
                		 $('a#navLogin').text(usuario);
                		 $('div.dropdown-menu').html('<a href="#">'+"Mi cuenta"+'</a> <button class="btn" id="idBtnDesconectar">Desconectar</button>');
                		 
                		 
                		 
                	 }else{
                		 alert(response)
                	 }
                	 
                 }
                     });
        	 
        	 
        	 
        	 
  } 
        	 
        	 
          
          
          
          
      }); 
	
	$('li').on('click', 'button#idBtnDesconectar',  function(){
		
		$.ajax({
            type: "POST",
            url: baseUrl+"Usuarios/desconectar",
            
            success: function (response) {
                
           	 if(response.trim()=="ok"){
           		 
           		location.reload();
           		 
           		 
           		 
           	 }else{
           		 alert(response)
           	 }
           	 
            }
                });
		
		
		
		
	})
	
	
	/*....::::Olvidado Contraseña:::.......*/
	
	$('a#idOlvidado').on('click', function(){
		
		$('div.remodal').load(baseUrl+"assets/html/olvidadoClave.html",cargarValidacion);
		inst = $('[data-remodal-id=modal]').remodal();
		
		
		inst.open();
        
        
        
        
        
		
	});
	
	
	function cargarValidacion(){
        
        
        
        
    
	 $('#formOlvidado').validate({
         
	    	errorElement: 'span',
	        errorClass: 'help-inline',
            onkeyup: false,
            onsubmit: true,

	        
	        errorPlacement: function(error, element) {error.appendTo (element.siblings(".errordiv")); },
	    	
	    	
	        rules: 
	        {
	          
	            
	        	idCorreoOlvidado: {
	                
	                email:true,
	                required:true,
	                remote: {
	                                url: baseUrl+"Usuarios/comprobarEmailOlvidado",  //<?=base_url()?>assets/css/estilo.css">
	                                type: "post",
	                                data: {
	                                username: function() {
	                                    return $( "#idCorreoOlvidado" ).val();
	                                            }
	                                    }
	                }
	                
	            },
	            
	            
	            
	            
	        },
	          
	        messages: 
	        {
	          
	            
	            idCorreoOlvidado: {
	            	required: "Introduzca un correo",
	            	email: "Introcuzca un correo valido",
	                remote: "El correo que has introducido no esta registrado "
	            }
	            
	            
	        },
	          
	         submitHandler: function(form) {
	            
	        /*$(form).ajaxSubmit();*/
	        	 

	        	 $.ajax({
	                 type: "POST",
	                 url: baseUrl+"Usuarios/restablecerClave",
	                 data: $(form).serialize(),
	                 success: function (response) {
	                     
	                	 if(response.trim()=="ok"){
	                		 //alert("bien")
	                		$('div.remodal').html('<h1>Se le ha mandado una nueva contraseña a su correo<h1><br><br><p>Si quieres permanecer en la misma pagina, presione <a href="# id="seguirAqui">Aqui</a></p>');
	                		 
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
	                		 alert("No hemos podido darle de alta en nuestra base de datos, por favor intentelo mas tarde")
	                	 }
	                	 
	                 }
	                     });
	        	 
	        	 
	        	 
	        	 
	  } 
	        	 
	        	 
	          
	          
	          
	          
	      }); 
	
	
	
    }
	
	
	
	
	
});
