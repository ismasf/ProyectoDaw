<!-- <html>
	<head>

	</head>
	<body>
			<br><br>
		<form action="<?= base_url()?>administrador/principal">
			Usuario: <input type="text"></input><br>
			Contraseña: <input type="password"></input>
			<br>
			<input type="submit"></input>

		</form>


	</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <!-- Bootstrap -->
    <link href="<?=base_url()?>assets/css/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url()?>assets/css/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">
    <style type="text/css">
      .mal{
        color:red;
        visibility: hidden;
      }
      .bien{
        color:red;
      }

    </style>
    <script src="<?=base_url()?>assets/css/vendors/jquery/dist/jquery.min.js"></script>
    <script>

      s=false;
      function entrar(){
        
        // $.ajax({url: "<?=base_url()?>administrador/getAdmin/",data : { user : $("#user").val(), pass: $("#pass").val() },type:'GET'},function(){
        //   alert("a");
        // });
      
        $.ajax({
        url : "<?=base_url()?>administrador/getAdmin/",
        data : { user : $("#user").val(), pass: $("#pass").val() },
        type: 'GET',
        success : function(b){
          if(b.trim()=="OK"){
            //alert("BIEN");
            myForm.submit();
          }else{
            //alert("MAL");
            $("#mal").removeClass("mal").addClass("bien");

            s=false;
          }
         
          
        }
    });

        return s;
        
      }

      function a(b){
        return false;
      }





    </script>




  </head>

  <body style="background:#F7F7F7;">
  <div id="div1"></div>
    <div class="">
      <a class="hiddenanchor" id="toregister"></a>
      <a class="hiddenanchor" id="tologin"></a>

      <div id="wrapper">
        <div id="login" class=" form">
          <section class="login_content">
            <form name="myForm" action="<?= base_url()?>administrador/principal" onsubmit="return entrar()">
              <h1>Iniciar sesión</h1>
              
              <div>
                <input id="user" type="text" class="form-control" placeholder="Usuario" required="" value="" />
              </div>
              <div>
                <input id="pass" type="password" class="form-control" placeholder="Contraseña" required="" value="" />
              </div>
              <div id="mal" class="mal">
                Pon un usuario y contraseña validos.
              </div>
              <div>
              	<input type="submit" class="btn btn-default" value="ENTRAR"></input>
                <!-- <a class="btn btn-default submit" href="index.html">Conectar</a> -->
                
              </div>
              <div class="clearfix"></div>
              <div class="separator">

                
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-video-camera" style="font-size: 26px;"></i> CinemaDaw</h1>

                  <p>Sitio administrador de CinemaDaw.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>