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
		R::close();
		$this->load->view("sesion/sesion");
	}

	public function getMapaAsientos(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		$idSesion = $_GET["sesion"];
		$this->load->model("sesion_model");
		$datos["sesion"]=$this->sesion_model->getSesionId($idSesion);
		$this->load->model("asientos_model");
		$datos["asientos"]=$this->asientos_model->getAsientosSala($datos["sesion"]->sala_id);
		$this->load->model("entradareserva_model");
		$datos["reservas"]=$this->entradareserva_model->getAsientosReservadosSesion($datos["sesion"]->id);
		$this->load->model("asientosbloqueados_model");
		$datos["bloqueados"]=$this->asientosbloqueados_model->getAsientosBloqueadoSesion($datos["sesion"]->id);
		R::close();
		$this->load->view("sesion/asientos",$datos);
		
		//echo $_GET["sesion"];
	}
	
	
	public function asientoBloqueado() {
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		$idSesion = $_GET["sesion"];
		$idAsiento = $_GET["asiento"];
		$idUsuario = "1";
		$hoy = date("Y-m-d H:i:s");
		$this->load->model("asientosbloqueados_model");
		$this->asientosbloqueados_model->insertarAsientosBloqueados($idAsiento,$idSesion,$idUsuario,$hoy);
		//echo $idSesion." / ".$idAsiento." / ".$idUsuario." / ".$hoy;
		R::close();
	}
	
	public function asientoDesbloquear() {
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		$idSesion = $_GET["sesion"];
		$idAsiento = $_GET["asiento"];
		$idUsuario = "1";
		$this->load->model("asientosbloqueados_model");
		//$this->asientosbloqueados_model->insertarAsientosBloqueados($idAsiento,$idSesion,$idUsuario,$hoy);
		$this->asientosbloqueados_model->borrarAsientosBloqueados($idAsiento,$idSesion,$idUsuario);
		//echo $idSesion." / ".$idAsiento." / ".$idUsuario." / ".$hoy;
		R::close();
	}


}






?>