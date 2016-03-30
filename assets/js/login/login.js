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
	
	
	
	
	
});
