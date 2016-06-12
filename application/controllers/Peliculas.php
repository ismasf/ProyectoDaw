<?php
require_once ('application/libraries/rb.php');
class Peliculas extends CI_Controller{
	
public function index(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		$this->load->model ( 'cartelera_model');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		
		$data["cartelera"]= $this->cartelera_model->getCartelera();
		$this->load->model("sesion_model");
		$cartelera=$data["cartelera"];
		$arra=[];
		foreach ($cartelera as $pelicula){
			$sesionesPelicula=$this->sesion_model->getSesionPelicula($pelicula["id"],"a");
			//Insertamos la pelicula con su sesion al array
			$arra["pelicula-".$pelicula["id"]]=$sesionesPelicula;
				
		}
		$data["arraSesiones"]=$arra;
		R::close();
		$this->template->load("plantilla","peliculas/peliculas",$data);
		
	}
}
?>