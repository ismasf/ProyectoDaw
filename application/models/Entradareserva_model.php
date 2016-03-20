<?php
require_once ('application/libraries/rb.php');
class Entradareserva_model extends CI_Model{
	
	public function getAsientosReservadosSesion($idSesion){
		$asiento = R::getAll("SELECT * FROM entradareserva WHERE sesion_id = $idSesion");
		
		return $asiento;
	
	}
	
	
	
	
	
}



?>