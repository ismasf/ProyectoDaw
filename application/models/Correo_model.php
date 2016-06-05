<?php
require_once ('application/libraries/rb.php');
class Correo_model extends CI_Model{
	
	
	public function enviarCorreo($para,$asunto,$de,$mensaje){
		$cabeceras = "From: $de" . "\r\n" .
				"Reply-To: $de" . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
		
		mail($para, $asunto, $mensaje, $cabeceras);
		return true;
		
	}

	
	
}