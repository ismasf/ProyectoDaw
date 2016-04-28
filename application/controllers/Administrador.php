<?php
require_once ('application/libraries/rb.php');
class Administrador extends CI_Controller{
	
	public function index(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		
		R::close();
		$this->template->load("plantilla","administrador/index");
		//$this->load->view("entrada/aConfirmar");
	}
	public function principal(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		
		R::close();
		$this->template->load("plantilla","administrador/principal");
		//$this->load->view("entrada/aConfirmar");
	}

	public function crearSesiones(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();

		$this->load->model("cartelera_model");
		$datos['peliculas'] = $this->cartelera_model->getCartelera();
		
		R::close();
		$this->template->load("plantilla","administrador/crearSesiones",$datos);
		//$this->load->view("entrada/aConfirmar");
	}
	public function crearSesionesPost(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();

		
		
		R::close();
		$this->template->load("plantilla","administrador/crearSesionesPost");
		//$this->load->view("entrada/aConfirmar");
	}
	
	
	
	
}
?>