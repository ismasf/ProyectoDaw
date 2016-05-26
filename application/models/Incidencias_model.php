<?php
require_once ('application/libraries/rb.php');
class Incidencias_model extends CI_Model{

	public function getIncidenciasUsuario($idUsuario){
		
		
		$incidencias = R::getAll("SELECT * FROM incidencias WHERE usuario_id = :id ORDER BY fecha_incidencia", array(':id'=>$idUsuario));

		return $incidencias;

	}
	
	
	
	
	public function getAllIncidencias(){
		
		$incidencias = R::getAll("SELECT * FROM incidencias  ORDER BY fecha_incidencia", array());
		
		return $incidencias;
		
	}
	
	
	
	public function nuevaIncidenciaUser ($idUsuario,$usuarioEmail,$problema,$mensaje){
		
		
		
		
		//Creamos la nueva incidencia
		$incidencias=R::dispense('incidencias');
		$incidencias->uniqid= uniqid();
		$incidencias-> problema =$problema;
		
		
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
				$mensajeIn->remitente=$usuarioEmail;
				$mensajeIn->fecha_hora=date("Y-m-d H:i:s", $time);
				$mensajeIn->remitente_id=$idUsuario;
				
				$idM=R::store($mensajeIn);
				
				$incidencia=R::load('incidencias',$idIncidencia);
				
				$incidencia->ownMensaje($mensajeIn);
				
				R::store($incidencia);
				
				
			}else{
				
				
				
			}
			
		}else{
			
			
		}
		
		
		
		
		
		
		
		
	}
	
	
	
	public function getAllMensajes ($idIncidencia,$idUsuario,$usuarioEmail){
		
		
		$mensajes = R::getAll("SELECT * FROM mensajes WHERE (remitente_id = :id AND incidencia_id= :idIncidencia) OR (remitente = 'soporte' AND incidencia_id= :idIncidencia) ORDER BY fecha_hora ASC", array(':id'=>$idUsuario, ':idIncidencia'=>$idIncidencia));
		
		
		return $mensajes;
	}
	
	
	
	public function nuevoMensaje ($idIncidencia,$idUsuario,$usuarioEmail,$mensaje){
		
		$incidencias=R::load('incidencias',$idIncidencia);
		$mensajeIn=R::dispense('mensajes');
		$time = time();
		
		$mensajeIn->incidencia=$incidencias;
		$mensajeIn->mensaje=$mensaje;
		$mensajeIn->remitente=$usuarioEmail;
		$mensajeIn->fecha_hora=date("Y-m-d H:i:s", $time);
		$mensajeIn->remitente_id=$idUsuario;
		
		$idM=R::store($mensajeIn);
		
		//$incidencia=R::load('incidencias',$idIncidencia);
		
		$incidencias->ownMensaje($mensajeIn);
		
		$idInc=R::store($incidencias);
		
		
		if($idInc && $idM){
			return true;
		}else{
			return false;
		}
		
	}

	public function crearAsientos(){
		for($i=0; $i<15; $i++){
			for($j=0; $j<19; $j++){
				$asiento = R::dispense("asientos");
				$asiento->nom = "f".$i."a".$j;
				$asiento->sala_id = 2;
				R::store($asiento);
			}
				
		}

	}





}



?>