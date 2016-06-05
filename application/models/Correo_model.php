<?php
require_once ('application/libraries/rb.php');
class Correo_model extends CI_Model{
	
	public function enviarCorreo($para,$asunto,$de,$mensaje){
		$ci =& get_instance();
		$ci->load->library('email');
		
		$cabeceras = "From: $de" . "\r\n" .
				"Reply-To: $de" . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
		
		/*mail($para, $asunto, $mensaje, $cabeceras);
		return true;*/
		
		$result = $ci->email
		->from($de)
		->reply_to($de)    // Optional, an account where a human being reads.
		->to($para)
		->subject($asunto)
		->message($mensaje)
		->send();
		
		return true;
		
	}

	
	
}