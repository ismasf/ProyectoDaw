<?php


require_once ('application/libraries/rb.php');
class Prueba extends CI_Controller{

	public function index(){
		
		
		/*R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		
		$incidencias=R::dispense('incidencias');
		$incidencias->uniqid= uniqid();
		$incidencias-> problema ="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
		
		
		$time = time();
		$date= date("Y-m-d H:i:s", $time);
		$incidencias->fecha_incidencia=$date;
		$incidencias->estado="activa";
		
		$id=R::store($incidencias);
		
		$incidencia=R::load('incidencias',$id);
		
		
		
		
		$usuario=R::load('usuario',67);
		
		
		
		//var_dump($usuario);
		
		//var_dump($incidencias);
		
		$usuario->ownIncidencia[ ]=$incidencia;
		
		R::store($usuario);
		
		
		$mensajeIn=R::dispense('mensajes');
		
		
		$mensajeIn->incidencia=$incidencia;
		$mensajeIn->mensaje="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbccccccccccccccccccccccccccccccccccjjjjjjjjjjjjjjjjjjjjjjjjjjjj";
		$mensajeIn->remitente="aaaaa@aaaaa.com";
		$mensajeIn->fecha_hora=date("Y-m-d H:i:s", $time);
		
		$idM=R::store($mensajeIn);
		
		$incidencia=R::load('incidencias',$id);
		
		$incidencia->ownMensaje($mensajeIn);
		
		
		
		//echo $id;*/
		
		
		
		
		
		
		
		
		
		
		
		
		
		$incidencias=R::dispense('incidencias');
		$incidencias->uniqid= uniqid();
		$incidencias-> problema ="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
		
		
		$time = time();
		$date= date("Y-m-d H:i:s", $time);
		$incidencias->fecha_incidencia=$date;
		$incidencias->estado="activa";
		
		$idIncidencia=R::store($incidencias);
		
		if($idIncidencia){
				
				
			//Cargamos Usuario y le añadimos la incidencia
				
			$usuario=R::load('usuario',$idUsuario);
			$usuario->ownIncidencia[ ]=$incidencias;
			$idUsuario=R::store($usuario);
				
				
			if($idUsuario){
		
				$mensajeIn=R::dispense('mensajes');
		
		
				$mensajeIn->incidencia=$incidencias;
				$mensajeIn->mensaje=$mensaje;
				$mensajeIn->remitente=$usuario;
				$mensajeIn->fecha_hora=date("Y-m-d H:i:s", $time);
		
				$idM=R::store($mensajeIn);
		
				$incidencia=R::load('incidencias',$idIncidencia);
		
				$incidencia->ownMensaje($mensajeIn);
		
				R::store($incidencia);
		
		
			}else{
		
		
		
			}
				
		}else{
				
				
		}
		
		
		
		
		
		
		
		
		
		
		
		
	}

	


}
?>
