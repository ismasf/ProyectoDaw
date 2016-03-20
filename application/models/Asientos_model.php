<?php
require_once ('application/libraries/rb.php');
class Asientos_model extends CI_Model{
	
	public function getAsientosSala($idSala){
		$asiento = R::getAll("SELECT * FROM asientos WHERE sala_id = $idSala");
		
		return $asiento;
	
	}
	
	
	
	
	
}



?>