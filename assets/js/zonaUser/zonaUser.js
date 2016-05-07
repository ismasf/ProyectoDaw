/**
 * 
 */




$(document).ready(function(){
	
	
	
	
	$('#datosPersonales').on('click',  function(){
		
		
		
		$('div#containerUser').load(baseUrl+"assets/html/zonaUser/ajustesUser.html",cargarDatosUpdate);
		
		
		
		
		
		
		
	});
	
	
	
	$('a#zonaSocios').on('click',  function(){
		
		
		window.location.href = baseUrl+"Usuarios/zonaUser";
		
	});
	
	
	
	
		
	function cargarDatosUpdate(){
		
		 
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
    
    
    $user=document.getElementById("navLogin").innerHTML;
        
    
    		$.ajax({
	                 type: "POST",
	                 url: baseUrl+"Usuarios/obtenerDatos",
	                 data: {username:$user},
	                 success: function (response) {
	                	 
	                	 
	                     
	                	 if(response.trim()!=""){
	                		
	                		 
	                		 
	                		 var obj = JSON.parse(response);
	                		 
	                		document.getElementById("idNombre").value=obj[0].nombre;
	                		document.getElementById("idApellidos").value=obj[0].apellidos;
	                		document.getElementById("idCiudad").value=obj[0].ciudad;
	                		fechaN=obj[0].fechanacimiento;
	                		f=fechaN.split("-");
	                		
	                		document.getElementById("idFechaN").value=f[2]+"/"+f[1]+"/"+f[0];
	                		 
	                		 
	                		 
	                		
	                		
	                		 
	                	 }else{
	                		 
	                		 
	                		 $('div.remodal').html('<h1>No hemos podido obtener la informacion de este usuario, se le va a redirigir a la pagina principal<h1><br><br><p>Si quieres permanecer en la pagina de usuarios, presione <a href="# id="zonaSocios">Aqui</a></p>');
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
	                		 
	                		 
	                		 
	                	 }
	                	 
	                 }
	                     });
    
    
    
    
    
    
        
        
        
   
		
		
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
		
		
		
		
		
		
		
		
		
		
		
	}	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
});