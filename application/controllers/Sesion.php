<?php

require_once ('application/libraries/rb.php');
class Sesion extends CI_Controller{

	
	public function index(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		/*$idSesion = $_GET["idSesion"];
		$this->load->model("sesion_model");
		$datos["sesion"]=$this->sesion_model->getSesionId($idSesion);
		$this->load->model("asientos_model");
		$datos["asientos"]=$this->asientos_model->getAsientosSala($datos["sesion"]->sala_id);
		$this->load->model("entradareserva_model");
		$datos["reservas"]=$this->entradareserva_model->getAsientosReservadosSesion($datos["sesion"]->id);
		*/
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		
		//$datos["sesion"]=$_SESSION;
		$datos["idAle"]=$idAleatoria = rand(1, 20000);
		R::close();
		//$this->load->view("sesion/sesion",$datos);
		$this->template->load("plantilla","sesion/sesion",$datos);
	}

	public function getMapaAsientos($idAle){
		
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		$idSesion = $_GET["sesion"];
		
		$this->load->model("sesion_model");
		$datos["sesion"]=$this->sesion_model->getSesionId($idSesion);
		
		$this->load->model("asientos_model");
		$datos["asientos"]=$this->asientos_model->getAsientosSala($datos["sesion"]->sala_id);
		
		$this->load->model("entradareserva_model");
		$datos["reservas"]=$this->entradareserva_model->getAsientosReservadosSesion($datos["sesion"]->id);

		$this->load->model("sala_model");
		$datos["sala"]=$this->sala_model->getSalaId($datos["sesion"]->sala_id);
		
		$this->load->model("asientosbloqueados_model");
		$this->asientosbloqueados_model->borrarAsientosInactivos();
		$datos["bloqueados"]=$this->asientosbloqueados_model->getAsientosBloqueadoSesion($datos["sesion"]->id);
		$datos["actuales"]=$this->asientosbloqueados_model->getActuales($datos["sesion"]->id,$idAle);
		
		R::close();
		$this->load->view("sesion/asientos",$datos);
		
		//echo $_GET["sesion"];
	}
	
	
	public function asientoBloqueado($idAle) {
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		$idSesion = $_GET["sesion"];
		$idAsiento = $_GET["asiento"];
		$idUsuario = $idAle;
		$hoy = date("Y-m-d H:i:s");
		$this->load->model("asientosbloqueados_model");
		$this->asientosbloqueados_model->insertarAsientosBloqueados($idAsiento,$idSesion,$idUsuario,$hoy);
		//echo $idSesion." / ".$idAsiento." / ".$idUsuario." / ".$hoy;
		R::close();
	}
	
	public function asientoDesbloquear($idAle) {
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		$idSesion = $_GET["sesion"];
		$idAsiento = $_GET["asiento"];
		$idUsuario = $idAle;
		$this->load->model("asientosbloqueados_model");
		//$this->asientosbloqueados_model->insertarAsientosBloqueados($idAsiento,$idSesion,$idUsuario,$hoy);
		$this->asientosbloqueados_model->borrarAsientosBloqueados($idAsiento,$idSesion,$idUsuario);
		//echo $idSesion." / ".$idAsiento." / ".$idUsuario." / ".$hoy;
		R::close();
	}


}






?>