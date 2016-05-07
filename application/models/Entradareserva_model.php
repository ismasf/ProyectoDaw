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

	public function datosCantidadSemana(){
		$hoyP =date("Y-m-d H:i:s",mktime(0, 0, 0, date("m")  , date("d"), date("Y")));
		$hoyT =date("Y-m-d H:i:s",mktime(23, 59, 59, date("m")  , date("d"), date("Y")));
		$result = R::getAll("SELECT COUNT(Id) con, fecha FROM entradareserva WHERE fecha>=:f1 AND fecha<=:f2",array(':f1'=>$hoyP, ':f2'=>$hoyT));

		$hoyP =date("Y-m-d H:i:s",mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")));
		$hoyT =date("Y-m-d H:i:s",mktime(23, 59, 59, date("m")  , date("d")-1, date("Y")));
		$a = R::getAll("SELECT COUNT(Id) con, fecha FROM entradareserva WHERE fecha>=:f1 AND fecha<=:f2",array(':f1'=>$hoyP, ':f2'=>$hoyT));
		array_push($result, $a[0]);

		$hoyP =date("Y-m-d H:i:s",mktime(0, 0, 0, date("m")  , date("d")-2, date("Y")));
		$hoyT =date("Y-m-d H:i:s",mktime(23, 59, 59, date("m")  , date("d")-2, date("Y")));
		$a = R::getAll("SELECT COUNT(Id) con, fecha FROM entradareserva WHERE fecha>=:f1 AND fecha<=:f2",array(':f1'=>$hoyP, ':f2'=>$hoyT));
		array_push($result, $a[0]);

		$hoyP =date("Y-m-d H:i:s",mktime(0, 0, 0, date("m")  , date("d")-3, date("Y")));
		$hoyT =date("Y-m-d H:i:s",mktime(23, 59, 59, date("m")  , date("d")-3, date("Y")));
		$a = R::getAll("SELECT COUNT(Id) con, fecha FROM entradareserva WHERE fecha>=:f1 AND fecha<=:f2",array(':f1'=>$hoyP, ':f2'=>$hoyT));
		array_push($result, $a[0]);

		$hoyP =date("Y-m-d H:i:s",mktime(0, 0, 0, date("m")  , date("d")-4, date("Y")));
		$hoyT =date("Y-m-d H:i:s",mktime(23, 59, 59, date("m")  , date("d")-4, date("Y")));
		$a = R::getAll("SELECT COUNT(Id) con, fecha FROM entradareserva WHERE fecha>=:f1 AND fecha<=:f2",array(':f1'=>$hoyP, ':f2'=>$hoyT));
		array_push($result, $a[0]);

		$hoyP =date("Y-m-d H:i:s",mktime(0, 0, 0, date("m")  , date("d")-5, date("Y")));
		$hoyT =date("Y-m-d H:i:s",mktime(23, 59, 59, date("m")  , date("d")-5, date("Y")));
		$a = R::getAll("SELECT COUNT(Id) con, fecha FROM entradareserva WHERE fecha>=:f1 AND fecha<=:f2",array(':f1'=>$hoyP, ':f2'=>$hoyT));
		array_push($result, $a[0]);
		return $result;
	}
	
	
	
	
	
}



?>