<?php
require_once ('application/libraries/rb.php');
class Entrada extends CI_Controller{
	
	public function index(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		
		R::close();
		$this->template->load("plantilla","entrada/aConfirmar");
		//$this->load->view("entrada/aConfirmar");
	}
	
	public function confirmar(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		$hoy = date("Y-m-d H:i:s");
		$asientos = preg_split("/[,]/",$_POST["asientos"]);
		//print_r($asientos);
		$idUsuario = $_SESSION['idUser'];
		$idSesion = $_POST["sesion"];
		$this->load->model("sesion_model");
		$idSala = $this->sesion_model->getSalaSesion($idSesion);
		
		$this->load->model("factura_model");
		$idFactura = $this->factura_model->crearFactura($idUsuario);
		
		$this->load->model("entradareserva_model");
		$idEntradas = $this->entradareserva_model->crearEntradaReserva($hoy,$idSala,$idSesion,$asientos,$_POST['precio']);
		
		$this->load->model("entradareservafactura_model");
		$this->entradareservafactura_model->crearEntradareservafactura($idFactura,$idEntradas);
		
		R::close();
		
		
		$ci =& get_instance();
		$ci->load->helper('correo');
		$result=confirmacionEntradas($_SESSION['correoUser'], $idFactura);
		
		if($result){
		
			//$this->load->view("entrada/Confirmar");
		$this->template->load("plantilla","entrada/confirmar");
				
		}else{
			$this->template->load("plantilla","errors/html/error_general");
			
		}
		
		
		
		
		
		
	}
	
	
}
?>