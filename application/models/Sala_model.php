<?php
require_once ('application/libraries/rb.php');
class Sala_model extends CI_Model{


	public function getSalaId($id){
		
		$sala = R::load("sala",$id);
		
		
		return $sala;

	}

	public function getSalas(){
		$sala = R::getAll("Select id From Sala");
		return $sala;
	}


}