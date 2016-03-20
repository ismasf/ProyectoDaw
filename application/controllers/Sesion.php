<?php

require_once ('application/libraries/rb.php');
class Sesion extends CI_Controller{

	public function index(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		$idSesion = $_GET["idSesion"];
		$this->load->model("sesion_model");
		$datos["sesion"]=$this->sesion_model->getSesionId($idSesion);
		$this->load->model("asientos_model");
		$datos["asientos"]=$this->asientos_model->getAsientosSala($datos["sesion"]->sala_id);
		$this->load->model("entradareserva_model");
		$datos["reservas"]=$this->entradareserva_model->getAsientosReservadosSesion($datos["sesion"]->id);
		
		R::close();
		$this->load->view("sesion",$datos);
	}




}






?>