<?php
require_once ('application/libraries/rb.php');
class Pelicula_model extends CI_Model{


	public function getPeliculaPorId($id){
		
		$pelicula = R::load("pelicula",$id);
		
		
		return $pelicula;

	}


}