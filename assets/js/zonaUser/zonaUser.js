/**
 * 
 */




$(document).ready(function(){
	
$('body').on('click', 'button.descargar', function(e){
	
	
	//alert($(e.target).attr('id'));
	
	var facturaID=e.target.id;
	
	window.location.replace(baseUrl+"Usuarios/descargarEntrada?idFact="+facturaID);
	
	
	/*$.ajax({
        type: "POST",
        url: baseUrl+"Usuarios/descargarEntrada",
        data: {idFact:facturaID},
        success: function (response) {
       	 
       	 $(document).html(response);
            
       	 if(response!="si"){
       		
 
       		 /*$('div.remodal').html('<h1>No hemos podido obtener la de sus entradas<h1><br><br><p>Si quieres permanecer en la pagina de usuarios, presione <a href="# id="zonaSocios">Aqui</a></p>');
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
            });*/
	
	
	
	
	
	
	
	
	
	
	
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
	
	

	$('body').on('click', '#buttonEstadoUser', cambiarEstadoIncidencia);
	
	
	
	
	
	
	
	
	function cargarDatosFacturas(){
	
		
		
		$.ajax({
            type: "POST",
            url: baseUrl+"Usuarios/obtenerFacturas",
            data: {username:""},
            success: function (response) {
           	 
           	 
                
           	 if(response.trim()!=""){
           		
           		 
           		 var obj = JSON.parse(response);
           		
           		 
           	  var tableI= document.createElement("table");
           	 
           	  var cabecera=document.createElement("thead");
              var filaP= document.createElement("tr");
              var columnaP= document.createElement("td");
               var columnaP2= document.createElement("td");
               var columnaP3= document.createElement("td");
               var columnaP4= document.createElement("td");
              var textNodeP = document.createTextNode("Id Factura");
              var textNodeP2 = document.createTextNode("Nombre de Pelicula");
              var textNodeP3= document.createTextNode("Fecha de la compra");
              var textNodeP4= document.createTextNode("Descargar");
              var cuerpo=document.createElement("tbody");
              
              tableI.appendChild(cabecera);
              cabecera.appendChild(filaP);
              filaP.appendChild(columnaP);
              filaP.appendChild(columnaP2);
              filaP.appendChild(columnaP3);
              filaP.appendChild(columnaP4);
              columnaP.appendChild(textNodeP);
              columnaP2.appendChild(textNodeP2);
              columnaP3.appendChild(textNodeP3);
              columnaP4.appendChild(textNodeP4);
              tableI.setAttribute("border","2");
              
              tableI.setAttribute("class"," table table-hover");
              tableI.setAttribute("id","tableFac");
             
              
              
           		 
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
           		   
           		   
           		
           		   
           		   
           		cuerpo.appendChild(filaI);
                filaI.appendChild(columna1);
                filaI.appendChild(columna2);
                filaI.appendChild(columna3);
                filaI.appendChild(columna4);
                columna1.appendChild(textNode1);
                columna2.appendChild(textNode2);
                columna3.appendChild(textNode3);
                columna4.innerHTML='<button class="remodal-confirm descargar" type="submit" id="'+obj.factura_id+'">Descargar</button>';
               
           			
           		});
           		
           	 tableI.appendChild(cuerpo);
           		
           		console.log(tableI)
           		
           		document.getElementById("containerUser").appendChild(tableI);
           		 
           		$.extend( true, $.fn.dataTable.defaults, {
           		    "searching": false,
           		 "language": {
                     "lengthMenu": "Display _MENU_ records per page",
                     "zeroRecords": "Nothing found - sorry",
                     "info": "Ver paginas _PAGE_ de _PAGES_",
                     "infoEmpty": "No records available",
                     "infoFiltered": "(filtered from _MAX_ total records)",
                     "oPaginate": {
                 		"sFirst":    	"Primera",
                 		"sPrevious": 	"Anterior",
                 		"sNext":     	"Siguiente",
                 		"sLast":     	"Ultima"
                 	},
                 }
           		} );
           		
           		 $('#tableFac').DataTable();
           		 
           		 
           		
           		
           		 
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
    
    $('#idFechaN').attr('readOnly', 'true');
    $user=document.getElementById("navLogin").innerHTML;
        
    
    		$.ajax({
	                 type: "POST",
	                 url: baseUrl+"Usuarios/obtenerDatos",
	                 data: {username:$user},
	                 success: function (response) {
	                	 
	                	 
	                     
	                	 if(response.trim()!=""){
	                		
	                		 
	                		 
	                		 var obj = JSON.parse(response);
	                		 console.log(obj.imagen);
	                		 
	                		document.getElementById("idNombre").value=obj[0].nombre;
	                		document.getElementById("idApellidos").value=obj[0].apellidos;
	                		document.getElementById("idCiudad").value=obj[0].ciudad;
	                		fechaN=obj[0].fechanacimiento;
	                		f=fechaN.split("-");
	                		
	                		document.getElementById("idFechaN").value=f[2]+"/"+f[1]+"/"+f[0];
	                		
	                		//console.log(baseUrl);
	                		// $('img#imageUser').attr('src',baseUrl+'assets/img/photoUser/'+obj.imagen);
	                		 
	                		$('.circularUser').css("background-image", "url('"+baseUrl+"assets/img/photoUser/"+obj.imagen+"')");  
	                		
	                		
	                		 
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
	        	 
	        	 $('#idBtnRegistrar').prop("disabled", true);
	            
	        /*$(form).ajaxSubmit();*/
	        	 

	        	 $.ajax({
	                 type: "POST",
	                 url: baseUrl+"Usuarios/actualizar",
	                 data: $(form).serialize(), 
	                 success: function (response) {
	                     
	                	 if(response.trim()=="ok"){
	                		 $('#idBtnRegistrar').prop("disabled", false);
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
		
		
		
	$('body').on('click','div.circularUser', function(){
		
		
		$('input#fileImage').click();
		
		
		
		
	});
	
	
		
	
		
		$(document).on('change', 'input[type="file"]' , function(e){
			var _URL = window.URL || window.webkitURL;
		
			 var file, img;


			    if ((file = this.files[0])) {
			    	
			        img = new Image();
			        img.onload = function() {
			            //alert(this.width + " " + this.height);
			        	
			        	if(file.type=="image/jpeg" || file.type=="image/png" || file.type=="image/jpg"){
			        		
			        		
			        		
			        		if(file.size<=1500000){
			        			
			        			
			        			if(this.width<=900 && this.height<=900){
			        				
			        				
			        				
			        				 
			       	        	 var file_data = $('#fileImage').prop('files')[0];   
			       	             var form_data = new FormData();                  
			       	             form_data.append('file', file_data);
			       	        	 
			       	          $.ajax({
			 	                 type: "POST",
			 	                dataType: 'text',  // what to expect back from the PHP script, if anything
			 	                cache: false,
			 	                contentType: false,
			 	                processData: false,
			 	                 url: baseUrl+"Usuarios/guardarImage",
			 	                 data: form_data, 
			 	                 success: function (response) {
			 	                     
			 	                	 if(response.trim()!="no"){
			 	                		 
			 	                		 
			 	                		$('.circularUser').css("background-image", "url('"+baseUrl+"assets/img/photoUser/"+response.trim()+"')");
			 	                		$('#errorImage').html("La imagen se ha guardado correctamente");
			 	                		$('#errorImage').addClass("successImg");
			 	                		
			 	                		$('#navImagenUser').attr('src', baseUrl+"assets/img/photoUser/"+response.trim());
			 	                		console.log("'"+baseUrl+"assets/img/photoUser/"+response.trim()+"'");
			 	                		
			 	                		//location.reload();
			 	                		 
			 	                		 //alert("bien")
			 	                		 /*$('div.remodal').html('<h1>Se ha actualizado su informacion correctamente, se le va a redirigir a la pagina principal<h1><br><br><p>Si quieres permanecer en la misma pagina, presione <a href="# id="seguirAqui">Aqui</a></p>');
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
			 	                			
			 	                			
			 	                		},500);*/
			 	                		
			 	                		
			 	                		 
			 	                	 }else{
			 	                		 
			 	                		$('#errorImage').html("La imagen no se ha podido guardar");
			 	                		$('#errorImage').removeClass("successImg"); 
			 	                		 
			 	                	 }
			 	                	 
			 	                 }
			 	                     });
			       	        	 
			        				
			        				
			        				
			        				
			        				
			        				
			        				
			        				
			        				
			        				
			        				
			        			}else{
			        				$('#errorImage').html("La imagen seleccionada excede las medidas maximas permitidas, 900px X 900px");
			        				$('#errorImage').removeClass("successImg"); 
			        				imageData="ninguna";
			        				this.files[0]=null;
			        				
			        			}
			        			
			        			
			        			
			        		}else{
			        			$('#errorImage').html("La imagen seleccionada excede del tamaño maximo, que son 1,5Mb.");
			        			$('#errorImage').removeClass("successImg"); 
			        			imageData="ninguna";
			        			this.files[0]=null;
			        			
			        			
			        		}
			        		
			        	}else{
			        		
			        		$('#errorImage').html("Solo son permitidos los formatos de imagen: JPEG, PNG");
			        		$('#errorImage').removeClass("successImg"); 
			        		imageData="ninguna";
			        		this.files[0]=null;
			        	}
			        	
			        	
			        	
			        };
			        img.onerror = function() {
			            alert( "Imagen no valida: " + file.type);
			        };
			        img.src = _URL.createObjectURL(file);


			    }
	});
		
		
		
		
		
		
		
		
		
		
		$('a#idIncidencias').on('click',  function(event){
			
			event.preventDefault();
			$('div#containerUser').load(baseUrl+"assets/html/zonaUser/incidencias.html",cargarDatosIncidencias);
			
		});

		
		
		
		$('body').on('mouseenter', '#btnReloadSms', function(){
			
			$('#btnReloadSms').css('background-image', "url("+baseUrl+"assets/img/buttons/reload-hover.png)");
			
			
			
		});
		
$('body').on('mouseleave', '#btnReloadSms', function(){
			
			$('#btnReloadSms').css('background-image', "url("+baseUrl+"assets/img/buttons/reload.png)");
			
			
			
		});
		
		


		


			function cargarDatosIncidencias(){
				
				
				
				
				$.ajax({
	                type: "POST",
	                url: baseUrl+"Incidencias/incidenciasUsuario",
	                data: {username:""} ,
	                success: function (response) {
	                    
	               	 if(response.trim()!="" && response.trim()!="no" && response.trim()!=[]){
	               		 
	               		objeto = JSON.parse(response);
	               		
	               		$.each(objeto, function (index, obj) {
	               			
	               			
	               		   var filaI= document.createElement("tr");
	               		   var columna1= document.createElement("td");
	               		   var columna2= document.createElement("td");
	               		   var columna3= document.createElement("td");
	               		   var columna4= document.createElement("td");
	               		 
	               		   var columna5= document.createElement("td");
	               		   var textNode1 = document.createTextNode(obj.uniqid);
	               		   var textNode2 = document.createTextNode(obj.problema);
	               		   var textNode3= document.createTextNode(obj.fecha_incidencia);
	               		   var textNode4= document.createTextNode(obj.estado);
	               		   //var textNode5= document.createTextNode('<input type="button" id="button.'+obj.id+'" value="Ver">');
	               		   
	               		  $('table#tablaIncidencias tbody').append(filaI);
	               		   
	               		
	                       filaI.appendChild(columna1);
	                       filaI.appendChild(columna2);
	                       filaI.appendChild(columna3);
	                       filaI.appendChild(columna4);
	                       filaI.appendChild(columna5);
	                       columna1.appendChild(textNode1);
	                       columna2.appendChild(textNode2);
	                       columna3.appendChild(textNode3);
	                       columna4.appendChild(textNode4);
	                       columna5.innerHTML='<button id="button.'+obj.id+'" data-estado="'+obj.estado+'" class="verMensajes">Ver</button> ';
	               			
	               		});
	               		
	               		
	               		
	               		 
	               		 
	               	 }else{
	               		 
	               		
	               	 }
	               	 
	               	 
	               	 $.extend( true, $.fn.dataTable.defaults, {
	            		    "searching": true,
	            		 "language": {
	                      "lengthMenu": "Display _MENU_ records per page",
	                      "zeroRecords": "Nothing found - sorry",
	                      "info": "Ver paginas _PAGE_ de _PAGES_",
	                      "infoEmpty": "No existen incidencias",
	                      "infoFiltered": "(filtered from _MAX_ total records)",
	                      "searching": "Busqueda",
	                      "oPaginate": {
	                  		"sFirst":    	"Primera",
	                  		"sPrevious": 	"Anterior",
	                  		"sNext":     	"Siguiente",
	                  		"sLast":     	"Ultima"
	                  	},
	                  }
	            		} );
	               	  $('#tablaIncidencias').DataTable();
	               	
				
				
				
				if($('td.dataTables_empty').length>0){
					
					$('td.dataTables_empty').html("No existen incidencias");
					
					
					
				}
				
				if($('div#tablaIncidencias_filter').length>0){
					
					$('div#tablaIncidencias_filter label').html('Buscar:<input type="search" class="" placeholder="" aria-controls="tablaIncidencias">');
					
					
					
				}
				
				$('div.dataTables_length').css('visibility','hidden');
	               	 
	                }
	                
	               
	                
	                
	                
	                    });
				
				
				
				
				
				//DataTable
				
				
				
				
				
				
				
				
				
				
				/*Validate Incidencias*/
				
				
				$('#formNuevaIncidencia').validate({
			        
			    	errorElement: 'span',
			        errorClass: 'help-inline',
			        
			        errorPlacement: function(error, element) {error.appendTo (element.siblings(".errordiv")); },
			    	
			    	
			        rules: 
			        {
			          idproblema: {
			            required: true,
			           
			              maxlength: 50,
			              minlength: 3
			          },
			            idmensaje: {
			                required: true,
			                
			              maxlength: 250,
			              minlength: 4
			                
			                
			            },
			            
			            
			            
			            
			        },
			          
			        messages: 
			        {
			        	idproblema:{
			            required: "Por favor, introduzca un problema",
			              maxlength: "Problema demasiado largo",
			              minlength: "Problema demasiado corto"
			          },
			            
			          idmensaje:{
			            required: "Por favor, introduzca un mensaje",
			              maxlength: "Mensaje demasiados largos",
			              minlength: "Mensaje demasiados cortos"
			          }
			            
			            
			        },
			          
			         submitHandler: function(form) {
			        	 
			        	 $('#idBtnRegistrar').prop("disabled", true);
			            
			        /*$(form).ajaxSubmit();*/
			        	 

			        	 $.ajax({
			                 type: "POST",
			                 url: baseUrl+"Incidencias/crearNuevaIncidencia",
			                 data: $(form).serialize(), 
			                 success: function (response) {
			                     
			                	 if(response.trim()){
			                		
			                		 cargarDatosIncidencias();
			                		
			                		
			                		 
			                	 }else{
			                		 alert("No hemos podido actualizar su informacion, por favor intentelo mas tarde")
			                	 }
			                	 
			                 }
			                     });
			        	        	 
			                    	 
			                    	 
			                    
			        	 
			        	
			        	 
			        	 
			        	 
			  } 
			        	 
			        	 
			          
			          
			          
			          
			      });
				
				
				
				
				
				
				
				
			}	
		
		
		$('body').on('click', 'table#tablaIncidencias button', function(){
			
			idButton=$(this).prop('id');
			
			estado=$(this).attr('data-estado');
			
			partesIdButton=idButton.split(".");
			
			idIncidencia=partesIdButton[1].trim();
			
			$('div#containerUser').load(baseUrl+"assets/html/zonaUser/mensajesIncidencias.html",cargarMensajesIncidencias(idIncidencia, estado));
			
			
			
			
					
		})
		
		function cargarMensajesIncidencias(idIncidencia, estado){
			
			//console.log(estado);
			
			
			
			
			$.ajax({
                type: "POST",
                url: baseUrl+"Incidencias/getAllMensajes",
                data: {idIncidencia:idIncidencia}, 
                success: function (response) {
                    
               	 if(response.trim()!="ok"){
               		
               		objeto = JSON.parse(response);
               		
               		$('div#containerChat').html("");
               		$.each(objeto, function (index, obj) {
               			
               			if(obj.remitente.trim() == "soporte"){
               				
               				incidenciaId=obj.incidencia_id;
               				
               				mensaje='<div class="row"> <div class="bubble"><p><strong>'+obj.remitente+'</strong>:<br>'+obj.mensaje+'<br><strong>'+obj.fecha_hora+'</strong></p></div></div>';
               				$('div#containerChat').append(mensaje).scrollTop($('div#containerChat')[0].scrollHeight);;
               				$('div#containerChat').scrollTop($('div#containerChat')[0].scrollHeight);
               				
               				
               			}else{
               				
               				mensaje='<div class="row"> <div class="bubble2"><p><strong>'+obj.remitente+':</strong><br>'+obj.mensaje+'<br><strong>'+obj.fecha_hora+'</strong></p></div></div>';
               				$('div#containerChat').append(mensaje).scrollTop($('div#containerChat')[0].scrollHeight);;
               				$('div#containerChat').scrollTop($('div#containerChat')[0].scrollHeight);
               				
               				
               			}
               			
               			
               			
               			
               			
               		});
               		 
               		
               		if(estado.trim()=="activa"){
        				
        				
        				$('#buttonEstadoUser').addClass("incidenciaActiva").html("Desactivar");
        				
        				
        			}else if(estado=="desactivado"){
        				
        				
        				$('#buttonEstadoUser').addClass("incidenciaDesactivada").html("Activar");
        				
        				
        			}
               		
               		
               		$('#btnReloadSms').css('background-image', "url("+baseUrl+"assets/img/buttons/reload.png)");
               		
               		$('body').on('click', '#btnReloadSms', function(){
               			
               			
               			refreshSms(idIncidencia);
               		});
               		
               		 
               	 }else{
               		 alert("No hemos podido actualizar su informacion, por favor intentelo mas tarde")
               	 }
               	 
                }
                    });
			
			
			
			
			
			
			
			
			
			
			
		}
		
		
		
		
		
	
});


function addNuevoMensaje(){
	
	
	mensaje=$('#idmensajenuevo').val();
	
	if(mensaje.length>250 || mensaje.length<5){
		
		$('#errorNuevo').html('<span>El mensaje debe ser mayor de 5 caracteres y menor de 250.</span>')
		
		
	}else{
		
		
		$.ajax({
            type: "POST",
            url: baseUrl+"Incidencias/nuevoMensaje",
            data: {idIncidencia:idIncidencia, txtMensaje:mensaje}, 
            success: function (response) {
                
           	 if(response.trim()){
           		
           		refreshSms(idIncidencia);
           		 
           		
           		
           		 
           	 }else{
           		alert("mal")
           	 }
           	 
            }
                });
		
		
	}
	
	
	
}


function refreshSms(idIncidencia){
	
	$.ajax({
        type: "POST",
        url: baseUrl+"Incidencias/getAllMensajes",
        data: {idIncidencia:idIncidencia}, 
        success: function (response) {
            
       	 if(response.trim()!="ok"){
       		
       		objeto = JSON.parse(response);
       		
       		$('div#containerChat').html("");
       		$.each(objeto, function (index, obj) {
       			
       			if(obj.remitente.trim() == "soporte"){
       				
       				incidenciaId=obj.incidencia_id;
       				
       				mensaje='<div class="row"> <div class="bubble"><p><strong>'+obj.remitente+'</strong>:<br>'+obj.mensaje+'<br><strong>'+obj.fecha_hora+'</strong></p></div></div>';
       				$('div#containerChat').append(mensaje).scrollTop($('div#containerChat')[0].scrollHeight);;
       				$('div#containerChat').scrollTop($('div#containerChat')[0].scrollHeight);
       				
       				
       			}else{
       				
       				mensaje='<div class="row"> <div class="bubble2"><p><strong>'+obj.remitente+':</strong><br>'+obj.mensaje+'<br><strong>'+obj.fecha_hora+'</strong></p></div></div>';
       				$('div#containerChat').append(mensaje).scrollTop($('div#containerChat')[0].scrollHeight);;
       				$('div#containerChat').scrollTop($('div#containerChat')[0].scrollHeight);
       				
       				
       			}
       			
       			
       			
       		});
       		 
       		
       		
       		 
       	 }else{
       		 alert("No hemos podido actualizar su informacion, por favor intentelo mas tarde")
       	 }
       	 
        }
            });
	
	
}


function cambiarEstadoIncidencia(){
	
	$( "#buttonEstadoUser" ).prop( "disabled", true );
	
	estadoI=$(this).html();
	
	if(estadoI.trim()=="Desactivar"){
		
		
		operacion="desactivado";
		
		
	}else if(estadoI.trim()=="Activar"){
		
		
		operacion="activa";
		
	}
	
	
	
	$.ajax({
        type: "POST",
        url: baseUrl+"Incidencias/cambiarEstadoIncidenciaUser",
        data: {idIncidencia:idIncidencia, operacion:operacion}, 
        success: function (response) {
        	$( "#buttonEstadoUser" ).prop( "disabled", false );
            
       	 if(response.trim()){
       		
       		
       		 if(operacion.trim()=="desactivado"){
       			 
       			 
       			$('#buttonEstadoUser').removeClass('incidenciaActiva').addClass("incidenciaDesactivada").html("Activar");
       			 
       		 }else if(operacion.trim()=="activa"){
       			 
       			$('#buttonEstadoUser').removeClass('incidenciaDesactivada').addClass("incidenciaActiva").html("Desactivar");
       			 
       		 }
       		
       		 
       	 }else{
       		 
       		 
       		 alert("No hemos podido actualizar su informacion, por favor intentelo mas tarde")
       	 }
       	 
        }
            });
	
	
	
	
}