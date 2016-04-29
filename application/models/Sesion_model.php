<?php
require_once ('application/libraries/rb.php');
class Sesion_model extends CI_Model{
	
	public function getSesionPelicula($idPelicula, $dia){
		
		// $sesion = R::getAll("SELECT * FROM sesion WHERE hora >= \"2016-03-20 00:00:00\" AND hora < \"2016-03-21 00:00:00\" AND pelicula_id = :id", array(':id'=>$idPelicula));

		$hoy = date("Y-m-d H:i:s");
		
		$semana = date("Y-m-d H:i:s",strtotime ('+7 day', strtotime ($hoy)));
		//$sesion = R::getAll("SELECT * FROM sesion WHERE hora >= \"2016-04-28 00:00:00\" AND hora < \"2016-04-29 00:00:00\" AND pelicula_id = :id", array(':id'=>$idPelicula));
		$sesion = R::getAll("SELECT * FROM sesion WHERE hora >= :h AND hora < :s AND pelicula_id = :id", array(':id'=>$idPelicula,':h'=>$hoy, ':s' => $semana));
		
		
		return $sesion;
	
	}
	
	public function getSesionId($id){
	
		$sesion =R::load("sesion",$id);
	
	
		return $sesion;
	
	}
	
	public function getSalaSesion($idSesion){
		$sesion =R::load("sesion",$idSesion);
		return $sesion->sala_id;
	}

	public function crearSesiones(){
		$dia1 = date("Y-m-d H:i:s",mktime(0,0,0,$_GET['mes1'],$_GET['dia1'],$_GET['ano1']));
 		$dia2 = date("Y-m-d H:i:s",mktime(0,0,0,$_GET['mes2'],$_GET['dia2'],$_GET['ano2']));

		$fecha1=mktime(0,0,0,$_GET['mes1'],$_GET['dia1'],$_GET['ano1']);
		$fecha2=mktime(0,0,0,$_GET['mes2'],$_GET['dia2'],$_GET['ano2']);

		$diferencia=$fecha2-$fecha1;
		$dias=$diferencia/(60*60*24);

		$peli = $_GET['pelicula'];
		$sala = $_GET['sala'];

		for($i=0;$i<$dias;$i++){

			foreach ($_GET['hora'] as $k) {
				$hor = explode(':', $k);
				$ses = R::dispense("sesion");
		
				$dia1 = date("Y-m-d H:i:s",strtotime ("+$hor[0] hour", strtotime ($dia1)));
				$ses->hora = $dia1;
				$ses->pelicula_id = $peli;
				$ses->sala_id = $sala;
				R::store($ses);

				//echo $dia1."<BR>";
				$dia1 = date("Y-m-d H:i:s",strtotime ("-$hor[0] hour", strtotime ($dia1)));
			}

			$dia1 = date("Y-m-d H:i:s",strtotime ('+1 day', strtotime ($dia1)));

		}
	}
	
	
	
	
}



?>