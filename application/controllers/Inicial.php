<?php

require_once ('application/libraries/rb.php');
class Inicial extends CI_Controller{
	
	
	public function index(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		$this->load->model ( 'cartelera_model');
		
		$data["cartelera"]= $this->cartelera_model->getCartelera();
		
		R::close();
		$this->template->load("plantilla","inicio",$data);
		
	}
	
	
	
	
	
	
	
}






?>