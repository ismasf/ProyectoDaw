<?php

require_once ('application/libraries/rb.php');
class Usuarios extends CI_Controller{

function comprobarEmail(){
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	$correo=$this->input->post('idCorreo');
	$this->load->model ( 'Usuarios_model', '', true );
	$this->Usuarios_model->emailExiste ($correo);
	//$this->load->view ('welcome_message');
	
	
	
	
}

function guardar(){
	
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	$nombre=$this->input->post('idNombre');
	$apellidos=$this->input->post('idApellidos');
	$ciudad=$this->input->post('idCiudad');
	$correo=$this->input->post('idCorreo');
	$contraseña=$this->input->post('idPassword');
	$fecha=$this->input->post('idFechaN');
	
	$this->load->model ( 'Usuarios_model', '', true );
	$datos ['status'] = $this->Usuarios_model->guardarUsuario ($nombre, $apellidos, $correo, $ciudad, $contraseña, $fecha);
	
	
}

function verificarCorreo(){
	
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	
	$correo=$this->input->get('correo');
	
	$this->load->model ( 'Usuarios_model', '', true );
	$datos ['status'] = $this->Usuarios_model->verificarCorreo ($correo);
	$this->load->view('registro/verificado',$datos);
	
	
}

function login(){
	
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	
	$correo=$this->input->post('username');
	$contraseña=$this->input->post('loginpassword');
	
	if(trim($correo)!="" && trim($contraseña)!=""){
		
		$this->load->model ( 'Usuarios_model', '', true );
		$datos ['status'] = $this->Usuarios_model->hacerLogin ($correo, $contraseña);
		
	}
	
}




}



?>