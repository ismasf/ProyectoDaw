<?php
require_once ('application/libraries/rb.php');
class Entrada extends CI_Controller{
	
	public function index(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		
		R::close();
		$this->load->view("entrada/aConfirmar");
	}
	
	public function confirmar(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		$hoy = date("Y-m-d H:i:s");
		$asientos = preg_split("/[,]/",$_GET["asientos"]);
		//print_r($asientos);
		$idUsuario = 1;
		$idSesion = $_GET["sesion"];
		$this->load->model("sesion_model");
		$idSala = $this->sesion_model->getSalaSesion($idSesion);
		
		$this->load->model("factura_model");
		$idFactura = $this->factura_model->crearFactura($idUsuario);
		
		$this->load->model("entradareserva_model");
		$idEntradas = $this->entradareserva_model->crearEntradaReserva($hoy,$idSala,$idSesion,$asientos);
		
		$this->load->model("entradareservafactura_model");
		$this->entradareservafactura_model->crearEntradareservafactura($idFactura,$idEntradas);
		
		R::close();
		$this->load->view("entrada/Confirmar");
	}
	
	
}
?>