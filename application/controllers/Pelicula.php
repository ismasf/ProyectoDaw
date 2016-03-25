<?php
require_once ('application/libraries/rb.php');
class Pelicula extends CI_Controller{
	
	public function index(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		$idPelicula =  $_GET["id"];
		$this->load->model("pelicula_model");
		$datos["pelicula"]=$this->pelicula_model->getPeliculaPorId($idPelicula);
		$this->load->model("sesion_model");
		$datos["sesiones"]=$this->sesion_model->getSesionPelicula($idPelicula,"a");
		
		R::close();
		$this->load->view("pelicula/pelicula",$datos);
	}
	
	
	
	
}



?>