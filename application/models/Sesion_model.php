<?php
require_once ('application/libraries/rb.php');
class Sesion_model extends CI_Model{
	
	public function getSesionPelicula($idPelicula, $dia){
		
		// $sesion = R::getAll("SELECT * FROM sesion WHERE hora >= \"2016-03-20 00:00:00\" AND hora < \"2016-03-21 00:00:00\" AND pelicula_id = :id", array(':id'=>$idPelicula));

		$hoy = date("Y-m-d H:i:s");
		
		$semana = date("Y-m-d H:i:s",strtotime ('+7 day', strtotime ($hoy)));
		//$sesion = R::getAll("SELECT * FROM sesion WHERE hora >= \"2016-04-28 00:00:00\" AND hora < \"2016-04-29 00:00:00\" AND pelicula_id = :id", array(':id'=>$idPelicula));
		$sesion = R::getAll("SELECT * FROM sesion WHERE hora >= :h AND hora < :s AND pelicula_id = :id", array(':id'=>$idPelicula,':h'=>$hoy, ':s' => $semana));
		
		
		return $sesion;
	
	}
	
	public function getSesionId($id){
	
		$sesion =R::load("sesion",$id);
	
	
		return $sesion;
	
	}
	
	public function getSalaSesion($idSesion){
		$sesion =R::load("sesion",$idSesion);
		return $sesion->sala_id;
	}
	
	
	
	
}



?>