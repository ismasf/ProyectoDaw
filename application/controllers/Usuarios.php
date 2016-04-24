<?php

require_once ('application/libraries/rb.php');
class Usuarios extends CI_Controller{

function comprobarEmail(){
	
	session_name ( "cineProyecto" );
	ini_set ( "session.cookie_lifetime", "7200" );
	ini_set ( "session.gc_maxlifetime", "7200" );
	session_start ();
	
	
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	$correo=$this->input->post('idCorreo');
	$this->load->model ( 'Usuarios_model', '', true );
	$this->Usuarios_model->emailExiste ($correo);
	//$this->load->view ('welcome_message');
	
	
	
	
}

function comprobarEmailOlvidado(){
	
	session_name ( "cineProyecto" );
	ini_set ( "session.cookie_lifetime", "7200" );
	ini_set ( "session.gc_maxlifetime", "7200" );
	session_start ();
	
	
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	$correo=$this->input->post('idCorreoOlvidado');
	$this->load->model ( 'Usuarios_model', '', true );
	$this->Usuarios_model->emailOlvidado ($correo);
	//$this->load->view ('welcome_message');




}


function restablecerClave(){
	
	session_name ( "cineProyecto" );
	ini_set ( "session.cookie_lifetime", "7200" );
	ini_set ( "session.gc_maxlifetime", "7200" );
	session_start ();
	
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	$correo=$this->input->post('idCorreoOlvidado');
	$this->load->model ( 'Usuarios_model', '', true );
	$this->Usuarios_model->restablecerClaveEmail($correo);
	
	
}

function guardar(){
	
	session_name ( "cineProyecto" );
	ini_set ( "session.cookie_lifetime", "7200" );
	ini_set ( "session.gc_maxlifetime", "7200" );
	session_start ();
	
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
	
	session_name ( "cineProyecto" );
	ini_set ( "session.cookie_lifetime", "7200" );
	ini_set ( "session.gc_maxlifetime", "7200" );
	session_start ();
	
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	
	$uniqid=$this->input->get('id');
	
	$this->load->model ( 'Usuarios_model', '', true );
	$datos ['status'] = $this->Usuarios_model->verificarCorreo ($uniqid);
	$this->load->view('registro/verificado',$datos);
	
	
}

function login(){
	session_name ( "cineProyecto" );
	ini_set ( "session.cookie_lifetime", "7200" );
	ini_set ( "session.gc_maxlifetime", "7200" );
	session_start ();
	
	
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	
	$correo=$this->input->post('username');
	$contraseña=$this->input->post('loginpassword');
	
	if(trim($correo)!="" && trim($contraseña)!=""){
		
		$this->load->model ( 'Usuarios_model', '', true );
		$datos ['status'] = $this->Usuarios_model->hacerLogin ($correo, $contraseña);
		
	}
	
}

function desconectar(){
	
	session_name ( "cineProyecto" );
	ini_set ( "session.cookie_lifetime", "7200" );
	ini_set ( "session.gc_maxlifetime", "7200" );
	session_start ();
	
	
	$this->load->model ( 'Usuarios_model', '', true );
	$datos ['status'] = $this->Usuarios_model->desconectarUser ();
	
	
}

function crearPdf(){
	//$this->load->library('m_pdf');
	session_name ( "cineProyecto" );
	ini_set ( "session.cookie_lifetime", "7200" );
	ini_set ( "session.gc_maxlifetime", "7200" );
	session_start ();
	
	
	$this->load->helper('entradas');
	entradaPdf("Carlos","Garbajosa Barroso","charly.9349@gmail.com","Batman v Superman","30/03/2016","1aac06","20:00");
	echo "ok";
	
	
	
}


function zonaUser(){
	
	session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
	
	
	
	$usuarioId= isset($_SESSION['idUser'])?$_SESSION['idUser']:"";
	
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	
	$this->load->model ( 'Usuarios_model', '', true );
	$datos['datos']=$this->Usuarios_model->datosUser ($usuarioId);
	
	R::close();
	$this->template->load("plantilla","usuarios/zona", $datos);
	
}

function actualizar(){
	
	session_name ( "cineProyecto" );
	ini_set ( "session.cookie_lifetime", "7200" );
	ini_set ( "session.gc_maxlifetime", "7200" );
	session_start ();
	
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	$nombre=$this->input->post('idNombre');
	$apellidos=$this->input->post('idApellidos');
	$ciudad=$this->input->post('idCiudad');
	
	$contraseña=$this->input->post('idPassword');
	$fecha=$this->input->post('idFechaN');
	$id=uniqid();
	
	$this->load->model ( 'Usuarios_model', '', true );
	$datos ['status'] = $this->Usuarios_model->actualizarUsuario ($nombre, $apellidos, $ciudad, $contraseña, $fecha);
	
	
}


}



?>