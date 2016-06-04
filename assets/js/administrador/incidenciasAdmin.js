$(document).ready(function() {

	$('div#containerChat').scrollTop($('div#containerChat')[0].scrollHeight);
	
	$('body').on('click', '#buttonEstadoUser', cambiarEstadoIncidencia);
	
	$('#btnReloadSms').css('background-image', "url("+baseUrl+"assets/img/buttons/reload.png)");
		
		$('body').on('click', '#btnReloadSms', function(){
			
			
			refreshSms(idIncidencia);
		});
		

		$('body').on('mouseenter', '#btnReloadSms', function(){
			
			$('#btnReloadSms').css('background-image', "url("+baseUrl+"assets/img/buttons/reload-hover.png)");
			
			
			
		});
		
$('body').on('mouseleave', '#btnReloadSms', function(){
			
			$('#btnReloadSms').css('background-image', "url("+baseUrl+"assets/img/buttons/reload.png)");
			
			
			
		});
	
	

});


function addNuevoMensaje(idIncidencia, idUsuario){
	
	
	mensaje=$('#idmensajenuevo').val();
	
	if(mensaje.length>250 || mensaje.length<5){
		
		$('#errorNuevo').html('<span>El mensaje debe ser mayor de 5 caracteres y menor de 250.</span>')
		
		
	}else{
		
		
		$.ajax({
            type: "POST",
            url: baseUrl+"Incidencias/nuevoMensajeAdmin",
            data: {idIncidencia:idIncidencia, txtMensaje:mensaje, idUsuario:idUsuario}, 
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

function cargarMensajesIncidencias(idIncidencia){
	
	
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
       				$('div#containerChat').append(mensaje);
       				
       				
       			}else{
       				
       				mensaje='<div class="row"> <div class="bubble2"><p><strong>'+obj.remitente+':</strong><br>'+obj.mensaje+'<br><strong>'+obj.fecha_hora+'</strong></p></div></div>';
       				$('div#containerChat').append(mensaje);
       				
       				
       			}
       			
       			
       			
       		});
       		 
       		
       		
       		 
       	 }else{
       		 alert("No hemos podido actualizar su informacion, por favor intentelo mas tarde")
       	 }
       	 
        }
            });
	
	
	
	
	
	$('div#containerChat').scrollTop($('div#containerChat')[0].scrollHeight);
	
	
	
	
	
}

function refreshSms(idIncidencia){
	
	$.ajax({
        type: "POST",
        url: baseUrl+"Incidencias/mensajesIncidenciasAdminId",
        data: {idIncidencia:idIncidencia}, 
        success: function (response) {
            
       	 if(response.trim()!="ok"){
       		
       		objeto = JSON.parse(response);
       		
       		$('div#containerChat').html("");
       		$.each(objeto, function (index, obj) {
       			
       			if(obj.remitente.trim() == "soporte"){
       				
       				incidenciaId=obj.incidencia_id;
       				
       				mensaje='<div class="row"> <div class="bubble2"><p><strong>'+obj.remitente+'</strong>:<br>'+obj.mensaje+'<br><strong>'+obj.fecha_hora+'</strong></p></div></div>';
       				$('div#containerChat').append(mensaje).scrollTop($('div#containerChat')[0].scrollHeight);;
       				
       				
       			}else{
       				
       				mensaje='<div class="row"> <div class="bubble"><p><strong>'+obj.remitente+':</strong><br>'+obj.mensaje+'<br><strong>'+obj.fecha_hora+'</strong></p></div></div>';
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
	
	uniqId=$('p#nInc').attr('data-uniqId');
	
	
	$.ajax({
        type: "POST",
        url: baseUrl+"Incidencias/cambiarEstadoIncidenciaAdmin",
        data: {uniqId:uniqId, operacion:operacion}, 
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