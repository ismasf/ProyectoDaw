<?php

require_once ('application/libraries/rb.php');
class Principal extends CI_Controller{
	
	
	public function index(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		$this->load->model ( 'cartelera_model');
		
		$datos["cartelera"]= $this->cartelera_model->getCartelera();
		
		R::close();
		$this->load->view("principal",$datos);
		
	}
	
	
	
	
	
	
	
}






?>
