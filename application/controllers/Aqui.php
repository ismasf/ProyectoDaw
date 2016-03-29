<?php
require_once ('application/libraries/rb.php');
class Aqui extends CI_Controller{
	
	public function index(){
		$this->template->load("plantilla","estatico/estamosaqui");
	}	
}
?>