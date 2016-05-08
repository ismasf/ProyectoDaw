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
		$this->load->model('usuarios_model');
		$datos['cUsuarios']= $this->usuarios_model->getCantidadUsuarios();
		$this->load->model('factura_model');
		$datos['ingresosTotales']= $this->factura_model->ingresosTotales();
		$this->load->model('entradareserva_model');
		$datos['datoCant']=$this->entradareserva_model->datosCantidadSemana();
		$this->load->model('pelicula_model');
		$datos['topPelis']=$this->pelicula_model->getPeliculasTop();
		
		R::close();
		$this->template->load("plantillaAdmin","administrador/principal", $datos);
		//$this->template->load("plantilla","administrador/principal");
		// $this->load->view("prueba/Prue",$datos);
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
		$this->template->load("plantillaAdmin","administrador/crearSesiones",$datos);
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

		$this->template->load("plantillaAdmin","administrador/crearSesionesPost");
		//$this->load->view("entrada/aConfirmar");
	}

	public function crearPelicula(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();

		
		
		R::close();
		
		$this->template->load("plantillaAdmin","administrador/crearPelicula");
		
		//$this->template->load("plantilla","administrador/crearPelicula");

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
		$this->template->load("plantillaAdmin","administrador/crearPeliculaPost");
	}

	public function cartelera(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();


		$this->load->model("pelicula_model");
		$data['peliculas']=$this->pelicula_model->getTodasPeliculas();

		$this->load->model("cartelera_model");
		$data['cartelera']=$this->cartelera_model->getCarteleraId();
		
		R::close();
		$this->template->load("plantillaAdmin","administrador/cartelera",$data);
	}

	public function carteleraEliminar($id){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();

		$this->load->model("cartelera_model");
		$this->cartelera_model->eliminarId($id);
		
		R::close();
		$this->template->load("plantillaAdmin","administrador/carteleraEliminar");
	}

	public function carteleraAnadir($id){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();

		$this->load->model("cartelera_model");
		$this->cartelera_model->anadirId($id);
		
		R::close();
		$this->template->load("plantillaAdmin","administrador/carteleraAnadir");
	}

	//SELECT SUM(er.precio) Precio, f.id, u.nombre, COUNT(er.asientos_id) Asientos FROM entradareserva er, entradareserva_factura erf, factura f, usuario u where erf.entradareserva_id = er.id AND f.id = erf.factura_id AND u.id = f.usuario_id GROUP BY erf.factura_id

	//SELECT erf.id, SUM(er.precio), f.id, u.nombre FROM entradareserva er, entradareserva_factura erf, factura f, usuario u where erf.entradareserva_id = er.id AND f.id = erf.factura_id AND u.id = f.usuario_id GROUP BY erf.factura_id
	
	public function informeFacturas(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();

		$this->load->model("factura_model");
		$data['informe'] = $this->factura_model->informeFactura();
		
		R::close();
		$this->template->load("plantillaAdmin","administrador/informeFactura",$data);
	}

//	 public function crearAsientos(){
//	 	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
//	 	session_name ( "cineProyecto" );
//	 	ini_set ( "session.cookie_lifetime", "7200" );
//	 	ini_set ( "session.gc_maxlifetime", "7200" );
//	 	session_start ();
//	 	$this->load->model('asientos_model');
//	 	$this->asientos_model->crearAsientos();
//		
//		
//	 	R::close();
//	 	$this->template->load("plantillaAdmin","administrador/principal", $datos);
//	 	//$this->template->load("plantilla","administrador/principal");
//	 	// $this->load->view("prueba/Prue",$datos);
//	 	//$this->load->view("entrada/aConfirmar");
//	 }
	
	
}
?>