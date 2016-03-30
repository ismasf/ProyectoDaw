<?php

require_once ('application/libraries/rb.php');
class Inicial extends CI_Controller{
	
	
	public function index(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		$this->load->model ( 'cartelera_model');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		
		$data["cartelera"]= $this->cartelera_model->getCartelera();
		
		R::close();
		$this->template->load("plantilla","inicio",$data);
		
	}
	
	
	
	
	
	
	
}






?>