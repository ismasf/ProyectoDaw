<?php
require_once ('application/libraries/rb.php');
class Factura_model extends CI_Model{
	
	public function crearFactura($usuario_id){
		$factura = R::dispense("factura");
		$factura -> usuario_id = $usuario_id;
		R::store($factura);
		return $factura->id;
	
	}
	
	
	
	public function datosFactura($idFactura){
		
		//echo $idFactura;
		

		
		
		
		
		$result = R::getAll("SELECT u.nombre, u.apellidos, er.fecha, a.nom, p.titulo FROM entradareserva_factura ef, pelicula p, entradareserva er, sesion s, asientos a, usuario u, factura f WHERE ef.factura_id = :idFactura AND er.id=ef.entradareserva_id AND s.id = er.sesion_id AND p.id = s.pelicula_id AND a.id = er.asientos_id AND f.id = ef.factura_id AND u.id = f.usuario_id", array(':idFactura'=>$idFactura));
		//$result = R::getAll("SELECT * FROM usuario WHERE id = 1", array(':usuarioId'=>"1"));
		
		return $result;
		
	}
	
	
}



?>