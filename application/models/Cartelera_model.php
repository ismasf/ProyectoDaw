<?php
require_once ('application/libraries/rb.php');
class Cartelera_model extends CI_Model{
	
	
	public function getCartelera(){
		
		$cartelera = R::getAll("Select p.id, p.titulo from pelicula p, cartelera c where c.pelicula_id = p.id");
		
		return $cartelera;
		
		
	}

	public function getCarteleraId(){
		
		$cartelera = R::getAll("Select c.id, p.titulo from pelicula p, cartelera c where c.pelicula_id = p.id");
		
		return $cartelera;
		
		
	}

	public function eliminarId($id){
		$pelicula = R::load("cartelera",$id);
		R::trash($pelicula);
	}

	public function anadirId($id){
		$cartelera = R::dispense("cartelera");
		$cartelera->pelicula_id = $id;
		R::store($cartelera);
	}
	
	
}