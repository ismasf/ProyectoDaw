<?php
require_once ('application/libraries/rb.php');
class Asientos_model extends CI_Model{
	
	public function getAsientosSala($idSala){
		$asiento = R::getAll("SELECT * FROM asientos WHERE sala_id = :id", array(':id'=>$idSala));
		
		return $asiento;
	
	}

	public function crearAsientos(){
		for($i=0; $i<15; $i++){
			for($j=0; $j<19; $j++){
				$asiento = R::dispense("asientos");
				$asiento->nom = "f".$i."a".$j;
				$asiento->sala_id = 2;
				R::store($asiento);
			}
			
		}
		
	}
	
	
	
	
	
}



?>