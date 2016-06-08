<?php
require_once ('application/libraries/rb.php');
class Configuraciones_model extends CI_Model{
	
	

	public function getDatos(){
		$conf = R::load("configuracion",1);
		return $conf;
	}

	public function modificarDatos(){
		$conf = R::load("configuracion",1);
		$conf->precio = $_POST["precio"];
		$conf->tiemporecarga = $_POST["tiempoRecarga"];
		R::store($conf);
	}











	// public function crearBD(){
	// 	$conf = R::dispense("configuracion");
	// 	$conf->precio = "6.7";
	// 	$conf->tiemporecarga = "1.5";
	// 	R::store($conf);

		

		
	// }

	
	
	
	
	
	
	
}



?>