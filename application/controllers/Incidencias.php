<?php
require_once ('application/libraries/rb.php');
class Incidencias extends CI_Controller{

	/*public function index(){
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		$this->template->load("plantilla","estatico/estamosaqui");
	}*/
	
	
	
	public function incidenciasUsuario(){
		
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		
		
		$idUsuario=$_SESSION['idUser'];
		
		$this->load->model ( 'Incidencias_model', '', true );
		$datos = $this->Incidencias_model->getIncidenciasUsuario ($idUsuario);
		R::close();
		
		if($datos==[]){
			
			$this->output->set_output("no");
			
			
		}else{
			
			$incidenciasJson=json_encode($datos);
		
		
		$this->output->set_output($incidenciasJson);
		}
		
		
		
		
		
		
		
		
		
		
	}
	
	
	
	public function crearNuevaIncidencia(){
		
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		
		
		$idUsuario=$_SESSION['idUser'];
		$usuario=$_SESSION['correoUser'];
		$problema=$this->input->post('idproblema');
		$mensaje=$this->input->post('idmensaje');
		
		if(!(strlen($mensaje)>250) && !(strlen($problema)>50)){
			
			
			$this->load->model ( 'Incidencias_model', '', true );
			$estado = $this->Incidencias_model->nuevaIncidenciaUser ($idUsuario,$usuario,$problema,$mensaje);
		
			
			if($estado){
				
				$this->output->set_output("true");
				
			}else{
				
				$this->output->set_output($estado);
				
			}
		
			
			
		}else{
			
			$this->output->set_output("formatoErroneo");
			
			
			
		}
		
		
		
		
		
		
		
	}
	
	public function getAllMensajes(){
		
		
		
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		
		
		$idUsuario=$_SESSION['idUser'];
		$usuarioEmail=$_SESSION['correoUser'];
		$idIncidencia=$this->input->post('idIncidencia');
		
		$this->load->model ( 'Incidencias_model', '', true );
		$mensajes = $this->Incidencias_model->getAllMensajes ($idIncidencia,$idUsuario,$usuarioEmail);
		
		$mensajesJson=json_encode($mensajes);
		
		
		$this->output->set_output($mensajesJson);
		
		
		
		
	}


	public function nuevoMensaje(){
		
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		
		
		$idUsuario=$_SESSION['idUser'];
		$usuarioEmail=$_SESSION['correoUser'];
		$idIncidencia=$this->input->post('idIncidencia');
		$mensaje=$this->input->post('txtMensaje');
		
		$this->load->model ( 'Incidencias_model', '', true );
		$mensajes = $this->Incidencias_model->nuevoMensaje ($idIncidencia,$idUsuario,$usuarioEmail,$mensaje);
		
		
		if($mensajes){
			
			$this->output->set_output(true);
			
		}else{
			
			$this->output->set_output(false);
			
		}
		
		
		
		
	}
	
	
	
	public function mensajesIncidenciasAdmin($uniqid){
		
		
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();

		
		$this->load->model ( 'Incidencias_model', '', true );
		
		
		
		$datosIncidencia=$this->Incidencias_model->getIdIncidencia ($uniqid);
		
		$idUsuaio=$datosIncidencia[0]['usuario_id'];
		$idIncidencia=$datosIncidencia[0]['id'];
		
		$datos['usuario']=$this->Incidencias_model->datosUser ($idUsuaio);
		
		
		$mensajes = $this->Incidencias_model->verMensajesAdmin ($idIncidencia);
		
		$datos['mensajes']=$mensajes;
		
		
		$this->template->load("plantillaAdmin","administrador/mensajesIncidencias",$datos);
		
		
		
	}


}


?>