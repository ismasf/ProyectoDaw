/**
 * 
 */




$(document).ready(function(){
	
$('body').on('click', 'button.descargar', function(e){
	
	
	//alert($(e.target).attr('id'));
	
	alert(e.target.id)
	
	
	
	
})


	
	
	$('#datosPersonales').on('click',  function(){
		
		
		
		$('div#containerUser').load(baseUrl+"assets/html/zonaUser/ajustesUser.html",cargarDatosUpdate);
		
		
		
		
		
		
		
	});
	
	
	
	$('a#zonaSocios').on('click',  function(){
		
		
		window.location.href = baseUrl+"Usuarios/zonaUser";
		
	});
	
	
	
	$('a#facturasCliente').on('click',  function(){
		
		
		$('div#containerUser').load(baseUrl+"assets/html/zonaUser/facturas.html",cargarDatosFacturas);
		
	});
	
	
	
	
	function cargarDatosFacturas(){
	
		
		
		$.ajax({
            type: "POST",
            url: baseUrl+"Usuarios/obtenerFacturas",
            data: {username:""},
            success: function (response) {
           	 
           	 
                
           	 if(response.trim()!=""){
           		
           		 
           		 var obj = JSON.parse(response);
           		
           		 
           	  var tableI= document.createElement("table");
           	  
              var filaP= document.createElement("tr");
              var columnaP= document.createElement("td");
               var columnaP2= document.createElement("td");
               var columnaP3= document.createElement("td");
               var columnaP4= document.createElement("td");
              var textNodeP = document.createTextNode("Id Factura");
              var textNodeP2 = document.createTextNode("Nombre de Pelicula");
              var textNodeP3= document.createTextNode("Fecha de la compra");
              var textNodeP4= document.createTextNode("Descargar");
              
              tableI.appendChild(filaP);
              filaP.appendChild(columnaP);
              filaP.appendChild(columnaP2);
              filaP.appendChild(columnaP3);
              filaP.appendChild(columnaP4);
              columnaP.appendChild(textNodeP);
              columnaP2.appendChild(textNodeP2);
              columnaP3.appendChild(textNodeP3);
              columnaP4.appendChild(textNodeP4);
              tableI.setAttribute("border","2");
              
              
           		 
           		$.each(obj['datosFac'], function (index, obj) {
           			
           			console.log(obj)
           		   var filaI= document.createElement("tr");
           		   var columna1= document.createElement("td");
           		   var columna2= document.createElement("td");
           		   var columna3= document.createElement("td");
           		   var columna4= document.createElement("td");
           		   var textNode1 = document.createTextNode(obj.factura_id);
           		   var textNode2 = document.createTextNode(obj.titulo);
           		   var textNode3= document.createTextNode(obj.fecha);
           		   //var textNode4= document.createTextNode('<button class="remodal-confirm" type="submit" onclick="descargarFactura('+obj.factura_id+')">Descargar</button>');
           		   
           		   
           		
           		   
           		   
           		tableI.appendChild(filaI);
                filaI.appendChild(columna1);
                filaI.appendChild(columna2);
                filaI.appendChild(columna3);
                filaI.appendChild(columna4);
                columna1.appendChild(textNode1);
                columna2.appendChild(textNode2);
                columna3.appendChild(textNode3);
                columna4.innerHTML='<button class="remodal-confirm descargar" type="submit" id="'+obj.factura_id+'">Descargar</button>';
               
           			
           		});
           		
           		console.log(tableI)
           		
           		document.getElementById("containerUser").appendChild(tableI);
           		 
           		
           		 
           		 
           		 
           		
           		
           		 
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
		
		
		
		
		
		
	}
	
	
		
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