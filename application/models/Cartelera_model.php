<?php
require_once ('application/libraries/rb.php');
class Cartelera_model extends CI_Model{
	
	
	public function getCartelera(){
		
		$cartelera = R::getAll("Select p.id, p.titulo from pelicula p, cartelera c where c.pelicula_id = p.id");
		
		return $cartelera;
		
		
	}
	
	
}