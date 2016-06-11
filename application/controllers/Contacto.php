<?php
require_once ('application/libraries/rb.php');
class Contacto extends CI_Controller{
	
	public function index(){
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		$zonaUser=$this->input->post('zonaUser');
		
		if(isset($zonaUser) && $zonaUser!=null && $zonaUser!="" && isset($_SESSION['idUser'])){
			$this->load->model ( 'Usuarios_model', '', true );
			$datos['usuarioInfo']=$this->Usuarios_model->informacionZonaUser ($_SESSION['idUser']);
			$this->template->load("plantilla","estatico/contacto", $datos);
			
		}else{
			
			$this->template->load("plantilla","estatico/contacto");
		}
		
	}
	
	public function correo(){
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		$administrador="cinemaproyecto2016@gmail.com";
		if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["mensaje"]) && isset($_POST["email"])){
			$de=$_POST["email"];
			$para=$administrador;
			$asunto="Contactar";
			$mensaje=$_POST["mensaje"];
			
			$this->load->model("correo_model");
			if($this->correo_model->enviarCorreo($para,$asunto,$de,$mensaje)){
				$this->template->load("plantilla","correoContacto/enviado");
			}
			
		}
	}
	
}
?>