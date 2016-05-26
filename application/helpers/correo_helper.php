<?php

function enviarCorreoConfirmacionUsuario($nombre, $apellido, $correo, $uniqid){
	
	
	
	/*...:::CARGAR LIBRARY CORREO:::.....*/
	
	
	$ci =& get_instance();
	$ci->load->library('email');
	
	/*....::::CIERRE LIBRARY CORREO:::....*/
	
	
	
	
	/*....::::MENSAJE:::........*/
	
	
	
	$subject = 'Verificacion Cine DAW2';
	//$message="<meta charset='utf-8'>";
	$message= '<h1>Gracias por registrarte en nuestro cine, '.$nombre.' '.$apellido.'.</h1><br><p>Por favor verifique su correo electronico a través de este enlace: </p><br>';
	$message.=base_url().'Usuarios/verificarCorreo?id='.$uniqid;
	
	// Get full html:
	$body =
	'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
'.$message.'
</body>
</html>';
	
	
	
/*.....:::::::CIERRE MENSAJE::::::::...........*/	
	
	
	
/*.....:::::::ENVIAR EMAIL:::::::::::.........*/
	

	$result = $ci->email
	->from('cinemaproyecto2016@gmail.com')
	->reply_to('cinemaproyecto2016@gmail.com')    // Optional, an account where a human being reads.
	->to($correo)
	->subject($subject)
	->message($body)
	->send();
	
	return $result;
	
	
}


function restablecerClave2($correo){
	
	$autoClave = substr( md5(microtime()), 1, 8);
	



	/*...:::CARGAR LIBRARY CORREO:::.....*/
	
	
	$ci =& get_instance();
	$ci->load->library('email');
	
	/*....::::CIERRE LIBRARY CORREO:::....*/
	
	
	
	
	/*....::::MENSAJE:::........*/
	
	
	
	$subject = 'Contraseña Cine DAW2';
	//$message="<meta charset='utf-8'>";
	$message= '<h1>Te mandamos en este correo la nueva contraseña</h1><br><p>Por favor, modifique su contraseña por una facil de recordar en los ajustes de usuario. </p><br>';
	$message.="<h1>$autoClave</h1>";
	
	// Get full html:
	$body =
	'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
'.$message.'
</body>
</html>';
	
	
	
	/*.....:::::::CIERRE MENSAJE::::::::...........*/
	
	
	
	/*.....:::::::ENVIAR EMAIL:::::::::::.........*/
	
	
	$result = $ci->email
	->from('cinemaproyecto2016@gmail.com')
	->reply_to('cinemaproyecto2016@gmail.com')    // Optional, an account where a human being reads.
	->to($correo)
	->subject($subject)
	->message($body)
	->send();
	
	if($result){
		return $autoClave;
	}else{
		return $result;
	}
	
	
	
}



function confirmacionEntradas($correo, $idFactura){
	
	
	//http://localhost/Proyecto/Usuarios/descargarEntrada?idFact=6
	
	


	/*...:::CARGAR LIBRARY CORREO:::.....*/
	
	
	$ci =& get_instance();
	$ci->load->library('email');
	
	/*....::::CIERRE LIBRARY CORREO:::....*/
	
	
	
	
	/*....::::MENSAJE:::........*/
	
	
	
	$subject = 'Tus Entradas Cine DAW2';
	//$message="<meta charset='utf-8'>";
	$message= '<h1>Gracias por comprar en nuestro cine.</h1><br><p>En este correo se encuentra el enlace para descargar sus entradas, o tambien puede hacerlo desde la zona usuario de su cuenta.</p><br>';
	$message.=base_url().'Usuarios/descargarEntrada?idFact='.$idFactura;
	
	// Get full html:
	$body =
	'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
'.$message.'
</body>
</html>';
	
	
	
	/*.....:::::::CIERRE MENSAJE::::::::...........*/
	
	
	
	/*.....:::::::ENVIAR EMAIL:::::::::::.........*/
	
	
	$result = $ci->email
	->from('cinemaproyecto2016@gmail.com')
	->reply_to('cinemaproyecto2016@gmail.com')    // Optional, an account where a human being reads.
	->to($correo)
	->subject($subject)
	->message($body)
	->send();
	
	return $result;
	
	
	
	
}
?>