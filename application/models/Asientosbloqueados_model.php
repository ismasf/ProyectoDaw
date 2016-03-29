<?php
require_once ('application/libraries/rb.php');
class Asientosbloqueados_model extends CI_Model{
	
	public function getAsientosBloqueadoSesion($idSesion){
		$asiento = R::getAll("SELECT * FROM asientosbloqueados WHERE id_sesion = :id", array(':id'=>$idSesion));
		
		return $asiento;
	
	}
	
	public function insertarAsientosBloqueados($asiento,$sesion,$usuario,$hora){
		$asientoBloqueado = R::dispense("asientosbloqueados");
		
		$asientoBloqueado -> id_asiento = $asiento;
		$asientoBloqueado -> id_sesion = $sesion;
		$asientoBloqueado -> id_usuario = $usuario;
		$asientoBloqueado -> hora = $hora;
		R::store($asientoBloqueado);
	
		
	
	}
	
	public function borrarAsientosBloqueados($asiento,$sesion,$usuario) {
		$id = R::getAll( 'SELECT a.id FROM asientosbloqueados a where id_asiento = :asiento and id_sesion = :sesion and id_usuario = :usuario ', array(':asiento'=>$asiento,':sesion'=>$sesion,':usuario'=>$usuario)  );
		$asientoBloqueado = R::load("asientosbloqueados",$id[0]["id"]);
		R::trash($asientoBloqueado);
	}
	
	public function getActuales($idSesion,$idAle){
		$asiento = R::getAll("SELECT * FROM asientosbloqueados WHERE id_sesion = :id AND id_usuario = :idAle", array(':id'=>$idSesion,':idAle'=>$idAle));
	
		return $asiento;
	
	}
	
	public function borrarAsientosInactivos(){
		// Tiempo máximo de espera
		//$fecha = date('Y-m-d H:i:s',strtotime("-5 minutes"));
		$fecha = date('Y-m-d H:i:s',strtotime("-1 minutes"));
		echo $fecha;
		R::exec("delete from asientosbloqueados where hora < :fecha",array(':fecha'=>$fecha)) ;
	}
	
}



?>