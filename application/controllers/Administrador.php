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

		$this->load->model("sala_model");
		$datos['salas'] = $this->sala_model->getSalas();
		
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

		$this->load->model("sesion_model");
		$this->sesion_model->crearSesiones();
		
		R::close();
		$this->template->load("plantilla","administrador/crearSesionesPost");
		//$this->load->view("entrada/aConfirmar");
	}

	public function crearPelicula(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();

		
		
		R::close();
		$this->template->load("plantilla","administrador/crearPelicula");

	}

	public function crearPeliculaPost(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();

		$this->load->model("pelicula_model");
		$this->pelicula_model->crearPelicula();
		
		R::close();
		$this->template->load("plantilla","administrador/crearPeliculaPost");
	}
	
	
	
	
}
?>