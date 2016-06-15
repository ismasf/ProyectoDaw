<?php


require_once ('application/libraries/rb.php');
class Prueba extends CI_Controller{

	public function index(){
		
		
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		
		for($i=1; $i<15; $i++){
			for($j=1; $j<20; $j++){
				$asiento = R::dispense("asientos");
				$asiento->nom = "f".$i."a".$j;
				$asiento->sala_id = 7;
				R::store($asiento);
			}
				
		}
		
		
		for($i=1; $i<15; $i++){
			for($j=1; $j<20; $j++){
				$asiento = R::dispense("asientos");
				$asiento->nom = "f".$i."a".$j;
				$asiento->sala_id = 8;
				R::store($asiento);
			}
				
		}
		
		
		
		
		
		/////////////////
		
		
		for($i=1; $i<9; $i++){
			for($j=6; $j<15; $j++){
				$asiento = R::dispense("asientos");
				$asiento->nom = "f".$i."a".$j;
				$asiento->sala_id = 9;
				R::store($asiento);
			}
				
		}
		
		for($i=9; $i<15; $i++){
			for($j=1; $j<20; $j++){
				$asiento = R::dispense("asientos");
				$asiento->nom = "f".$i."a".$j;
				$asiento->sala_id = 9;
				R::store($asiento);
			}
		
		}
		
		
		
		
		
	}

	


}
?>
