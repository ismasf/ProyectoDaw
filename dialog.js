$(document).ready(function(){
    
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
    
    
    jQuery.validator.addMethod('lettersonly', function(value, element) {
    return this.optional(element) || /^[a-z áãâäàéêëèíîïìóõôöòúûüùç]+$/i.test(value);
}, "Letras y espacios solo");
    
    
    
$.validator.addMethod("dateFormat",
    function(value, element) {
        return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
    },
    "Por favor introduce una fecha con el formato dd-mm-yyyy.");
    
   
    
    
    
    
    
    
    
    $('#abrir').on('click',function(){
        
        
       var inst = $('[data-remodal-id=modal]').remodal();
        
        inst.open();
        
        
        
    });
    
    
    
    
    
    
    $('#miForm').validate(
        
      {
          
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
            idFechaN: {
                
                dateFormat: true,
                required: true
            },
            
            idCorreo: {
                
                email:true,
                required:true,
                remote: {
                                url: "check-email.php",
                                type: "post",
                                data: {
                                username: function() {
                                    return $( "#idCorreo" ).val();
                                            }
                                    }
                }
                
            }
            
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
                
                
            }
        },
          
         submitHandler: function(form) {
            
        $(form).ajaxSubmit();
  } 
          
          
          
          
      }); 

          $('#miForm').on('submit',function(e){
    
    e.preventDefault();
    isValid=$('#miForm').valid();
    
    if(!isValid){
        alert("no");
    }else{
        alert("si");
        inst.close();
    }
    
})
    
    
});



    
    
