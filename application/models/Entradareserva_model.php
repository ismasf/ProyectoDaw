<?php
require_once ('application/libraries/rb.php');
class Entradareserva_model extends CI_Model{
	
	public function getAsientosReservadosSesion($idSesion){
		$asiento = R::getAll("SELECT * FROM entradareserva WHERE sesion_id = :id", array(':id'=>$idSesion));
		
		return $asiento;
	
	}
	
	public function crearEntradaReserva($fecha,$sala,$sesion,$asientos,$precio){
		$id=array();
		foreach ($asientos as $asiento){
			$entradareserva = R::dispense("entradareserva");
			$entradareserva -> fecha = $fecha;
			$entradareserva -> asientos_id = $asiento;
			$entradareserva -> sala_id = $sala;
			$entradareserva -> sesion_id = $sesion;
			$entradareserva -> precio = $precio;
			R::store($entradareserva);
			array_push($id, $entradareserva-> id);
		}
		return $id;
	
	}
	
	
	
	
	
}



?>