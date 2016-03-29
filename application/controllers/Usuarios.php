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
	$contrase�a=$this->input->post('idPassword');
	$fecha=$this->input->post('idFechaN');
	
	$this->load->model ( 'Usuarios_model', '', true );
	$datos ['status'] = $this->Usuarios_model->guardarUsuario ($nombre, $apellidos, $correo, $ciudad, $contrase�a, $fecha);
	
	
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
	$contrase�a=$this->input->post('loginpassword');
	
	if(trim($correo)!="" && trim($contrase�a)!=""){
		
		$this->load->model ( 'Usuarios_model', '', true );
		$datos ['status'] = $this->Usuarios_model->hacerLogin ($correo, $contrase�a);
		
	}
	
}

function desconectar(){
	
	$this->load->model ( 'Usuarios_model', '', true );
	$datos ['status'] = $this->Usuarios_model->desconectarUser ();
	
	
}

function crearPdf(){
	//$this->load->library('m_pdf');
	$this->load->helper('entradas');
	entradaPdf("Carlos","Garbajosa Barroso","charly.9349@gmail.com","Batman v Superman","30/03/2016","1aac06","20:00");
	echo "ok";
	
	
	
}




}



?>