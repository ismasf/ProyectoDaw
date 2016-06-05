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

	public function informeFactura(){
		$result = R::getAll("SELECT SUM(er.precio) Precio, f.id, u.nombre, COUNT(er.asientos_id) Asientos FROM entradareserva er, entradareserva_factura erf, factura f, usuario u where erf.entradareserva_id = er.id AND f.id = erf.factura_id AND u.id = f.usuario_id GROUP BY erf.factura_id");
		
		return $result;
	}

	public function ingresosTotales(){
		$result = R::getAll("SELECT SUM(precio) precio FROM entradareserva");
		
		return $result;
	}
	
	
	public function obtenerFacturas($idUser){
		
		//$result = R::getAll("SELECT DISTINCT  erf.factura_id, f.usuario_id, er.fecha, p.titulo  FROM entradareserva_factura erf, factura f, entradareserva er, pelicula p, sesion s WHERE er.id=erf.entradareserva_id AND s.id = er.sesion_id AND p.id = s.pelicula_id AND f.usuario_id=:idUser group by erf.factura_id;", array(':idUser'=>$idUser));
		
		$result = R::getAll("SELECT  erf.factura_id, f.usuario_id, er.fecha,  p.titulo FROM entradareserva_factura erf, pelicula p, entradareserva er, sesion s, asientos a, usuario u, factura f WHERE  er.id=erf.entradareserva_id AND s.id = er.sesion_id AND p.id = s.pelicula_id AND a.id = er.asientos_id AND f.id = erf.factura_id AND u.id = f.usuario_id AND f.usuario_id=:idUser group by erf.factura_id
		;", array(':idUser'=>$idUser));
		
		
		
		//var_dump (json_encode($result, JSON_UNESCAPED_UNICODE));
		return $result;
	}
	
	
	
	public function obtenerClienteFactura($idFac){
		
		
		
		
	}
	
	
	
	public function obteneDatosEntradaFac($idFact){
		
		
		
		$result= R::getAll("SELECT DISTINCT u.nombre, u.apellidos, er.fecha, er.sala_id, a.nom, p.titulo, s.hora, u.id FROM entradareserva_factura ef, pelicula p, entradareserva er, sesion s, asientos a, usuario u, factura f WHERE ef.factura_id = :idFact AND er.id=ef.entradareserva_id AND s.id = er.sesion_id AND p.id = s.pelicula_id AND a.id = er.asientos_id AND f.id = ef.factura_id AND u.id = f.usuario_id;", array(':idFact'=>$idFact));
		
		return $result;
		//SELECT u.nombre, u.apellidos, er.fecha, a.nom, p.titulo FROM entradareserva_factura ef, pelicula p, entradareserva er, sesion s, asientos a, usuario u, factura f WHERE ef.factura_id = :idFactura AND er.id=ef.entradareserva_id AND s.id = er.sesion_id AND p.id = s.pelicula_id AND a.id = er.asientos_id AND f.id = ef.factura_id AND u.id = f.usuario_id", array(':idFactura'=>$idFactura
		
		
		
		
	}
}



?>