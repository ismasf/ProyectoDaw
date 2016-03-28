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
                 url: "Usuarios/login",
                 data: $(form).serialize(),
                 success: function (response) {
                     
                	 if(response.trim()=="ok"){
                		 
                		 $('li#menuLogin').removeClass('open');
                		 usuario=$('input[name="username"]').val();
                		 $('a#navLogin').text(usuario);
                		 $('div.dropdown-menu').html('<a href="#">'+"Mi cuenta"+'</a>');
                		 
                		 
                		 
                	 }else{
                		 alert(response)
                	 }
                	 
                 }
                     });
        	 
        	 
        	 
        	 
  } 
        	 
        	 
          
          
          
          
      }); 
	
	
	
});
