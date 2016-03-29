<?php
require_once ('application/libraries/rb.php');
class Factura_model extends CI_Model{
	
	public function crearFactura($usuario_id){
		$factura = R::dispense("factura");
		$factura -> usuario_id = $usuario_id;
		R::store($factura);
		return $factura->id;
	
	}
	
	
}



?>