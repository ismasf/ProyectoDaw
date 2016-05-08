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
	R::close();
	
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
	R::close();
	
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
	R::close();
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
		R::close();
	}
	
}

function desconectar(){
	
	session_name ( "cineProyecto" );
	ini_set ( "session.cookie_lifetime", "7200" );
	ini_set ( "session.gc_maxlifetime", "7200" );
	session_start ();
	
	
	$this->load->model ( 'Usuarios_model', '', true );
	$datos ['status'] = $this->Usuarios_model->desconectarUser ();
	R::close();
	
	
}

function pdfEntrada(){
	
	
	$this->load->library('m_pdf');
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	session_name ( "cineProyecto" );
	ini_set ( "session.cookie_lifetime", "7200" );
	ini_set ( "session.gc_maxlifetime", "7200" );
	session_start ();
	
	$idFactura=$this->input->get('f')!=null?$this->input->get('f'):null;
	$usuario=isset($_SESSION['correoUser'])?$_SESSION['correoUser']:null;
	
	if($idFactura!=null){
		
		$this->load->model("factura_model");
		$datos['datosFac'] = $this->factura_model->datosFactura ($idFactura);
		
		$this->load->model ( 'Usuarios_model', '', true );
		$datos ['status'] = $this->Usuarios_model->emailExiste ("charly.9349@gmail.com");
		
		
		
		print_r($datos);
		//var_dump($datos);
		
		
	}else{
		
		
		echo "error page";
		
	}
	
	
	
	
	$this->load->helper('entradas');
	entradaPdf("Carlos","Garbajosa Barroso","charly.9349@gmail.com","Batman v Superman","30/03/2016","1aac06","20:00");
	echo "ok";
	R::close();
	
	
}




/*function descargarEntrada(){
	
	$this->load->library('m_pdf');
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	session_name ( "cineProyecto" );
	ini_set ( "session.cookie_lifetime", "7200" );
	ini_set ( "session.gc_maxlifetime", "7200" );
	session_start ();
	
	
	
	
	
}*/


 function descargarEntrada(){

	
	
	
	session_name ( "cineProyecto" );
	ini_set ( "session.cookie_lifetime", "7200" );
	ini_set ( "session.gc_maxlifetime", "7200" );
	session_start ();
	
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	$idFact=$this->input->get('idFact');
	$this->load->model ( 'factura_model', '', true );
	$datos=$this->factura_model->obteneDatosEntradaFac ($idFact);
	
	
	$this->load->model ( 'pelicula_model', '', true );
	
	
	if(isset($datos) && $datos!=null ){
		
		$datosID=$this->pelicula_model->getIdPelicula ($datos[0]['titulo']);
		$idPelicula=$datosID[0]['id'];
		
		
		if(isset($idPelicula) || $idPelicula!=""){
			
			$this->load->helper('entradas');
			descargarEntradaPdf($datos,$idPelicula);
			
			$this->output->set_output(json_encode("si"));
			
		}else{
			
			
			$this->output->set_output(json_encode("no"));
			
			
		}
		
		
		
		
		
		/*if($datos[0]['id']==$_SESSION['idUser']){
			
			
			$this->load->helper('entradas');
			entradaPdf("Carlos","Garbajosa Barroso","charly.9349@gmail.com","Batman v Superman","30/03/2016","1aac06","20:00");
			
			
		}else{
			
			$this->template->load("plantilla","usuarios/noLogin");
			
			
		}*/
		
		
	}
	
	


}




function zonaUser(){
	
	session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
	
	
	
	$usuarioId= isset($_SESSION['idUser'])?$_SESSION['idUser']:"";
	
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	
	/*$this->load->model ( 'Usuarios_model', '', true );
	$datos['datos']=$this->Usuarios_model->datosUser ($usuarioId);
	
	R::close();*/
	
	if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){
		
	$this->template->load("plantilla","usuarios/zona");
	
	}else{
		$this->template->load("plantilla","usuarios/noLogin");
		
	}
	
}

function obtenerDatos(){
	
	session_name ( "cineProyecto" );
	ini_set ( "session.cookie_lifetime", "7200" );
	ini_set ( "session.gc_maxlifetime", "7200" );
	session_start ();
	
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	$nombre=$this->input->post('username');
	$this->load->model ( 'Usuarios_model', '', true );
	$datos=$this->Usuarios_model->informacionZonaUser ($_SESSION['idUser']);
	
	
	$this->output->set_output(json_encode($datos));
	
	
	
	
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
	R::close();
	
}



function obtenerFacturas() {
	
	
	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	session_name ( "cineProyecto" );
	ini_set ( "session.cookie_lifetime", "7200" );
	ini_set ( "session.gc_maxlifetime", "7200" );
	session_start ();
	
	$idUser=$_SESSION['idUser'];
	
	
	//$idFactura=$this->input->get('f')!=null?$this->input->get('f'):null;
	
	if($idUser!=null){
	
		$this->load->model("factura_model");
		$datos['datosFac'] = $this->factura_model->obtenerFacturas ($idUser);
		
		$this->output->set_output(json_encode($datos));
		
	}else{
		
		$this->output->set_output("NO");
		
	}
	
	
}

}



?>