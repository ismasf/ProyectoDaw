<?php
require_once ('application/libraries/rb.php');
class Pelicula extends CI_Controller{
	
	public function index(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		$idPelicula =  $_GET["id"];
		$this->load->model("pelicula_model");
		$data["pelicula"]=$this->pelicula_model->getPeliculaPorId($idPelicula);
		$this->load->model("sesion_model");
		$data["sesiones"]=$this->sesion_model->getSesionPelicula($idPelicula,"a");
		
		R::close();
		
		
		$trailer720p="assets/mp4/".$idPelicula."/".$idPelicula."-720p.mp4";
		$trailer360p="assets/mp4/".$idPelicula."/".$idPelicula."-360p.mp4";
		
		
		$contMps4=0;
		$optionsMp4="";
		
		if(file_exists($trailer360p)){
			
			
			$optionsMp4.='<source src="'.base_url().'assets/mp4/'.$idPelicula.'/'.$idPelicula.'-360p.mp4" type="video/mp4" label="SD" res="360">';
			
			$contMps4++;
			$data['trailerName']="Trailer de ".$data["pelicula"]['titulo'];
			
		}
		
		
		if(file_exists($trailer720p)){
				
				
				
				
			$optionsMp4.='<source src="'.base_url().'assets/mp4/'.$idPelicula.'/'.$idPelicula.'-720p.mp4" type="video/mp4" label="HD" res="720">';
				
			$contMps4++;
			$data['trailerName']="Trailer de ".$data["pelicula"]['titulo'];
				
		}
		
		if($contMps4==0){
			$optionsMp4.='<source src="'.base_url().'assets/mp4/proximamente.mp4" type="video/mp4" label="SD" res="360">';
			$data['trailerName']="Trailer de proximos lanzamientos";
			
		}
		
		$data['trailers']=$optionsMp4;
		
		
		
		
		$this->template->load("plantilla","pelicula/pelicula",$data);
	}

	
	
	
	
}



?>