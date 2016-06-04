<?php
require_once ('application/libraries/rb.php');
class Asientos_model extends CI_Model{
	
	public function getAsientosSala($idSala){
		$asiento = R::getAll("SELECT * FROM asientos WHERE sala_id = :id", array(':id'=>$idSala));
		
		return $asiento;
	
	}

	public function crearAsientos1(){
		for($i=1; $i<15; $i++){
			for($j=1; $j<20; $j++){
				$asiento = R::dispense("asientos");
				$asiento->nom = "f".$i."a".$j;
				$asiento->sala_id = 1;
				R::store($asiento);
			}
			
		}
		
	}

	public function crearAsientos2(){
		for($i=1; $i<15; $i++){
			for($j=1; $j<20; $j++){
				$asiento = R::dispense("asientos");
				$asiento->nom = "f".$i."a".$j;
				$asiento->sala_id = 2;
				R::store($asiento);
			}
			
		}
		
	}

	public function crearAsientos3(){
		for($i=1; $i<9; $i++){
			for($j=6; $j<15; $j++){
				$asiento = R::dispense("asientos");
				$asiento->nom = "f".$i."a".$j;
				$asiento->sala_id = 3;
				R::store($asiento);
			}
			
		}

		for($i=9; $i<15; $i++){
			for($j=1; $j<20; $j++){
				$asiento = R::dispense("asientos");
				$asiento->nom = "f".$i."a".$j;
				$asiento->sala_id = 3;
				R::store($asiento);
			}

		}
		
	}
	
	
	
	
	
}



?>