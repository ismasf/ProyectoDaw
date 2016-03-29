<?php
require_once ('application/libraries/rb.php');
class Sesion_model extends CI_Model{
	
	public function getSesionPelicula($idPelicula, $dia){
		
		$sesion = R::getAll("SELECT * FROM sesion WHERE hora >= \"2016-03-20 00:00:00\" AND hora < \"2016-03-21 00:00:00\" AND pelicula_id = :id", array(':id'=>$idPelicula));
		
		
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