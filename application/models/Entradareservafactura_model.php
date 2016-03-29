<?php
require_once ('application/libraries/rb.php');
class Entradareservafactura_model extends CI_Model{
	
	
	public function crearEntradareservafactura($idFactura,$idEntradas){
		
		foreach ($idEntradas as $idEntrada){
			/*$entradareservafactura = R::dispense("entradareserva_factura");
			$entradareservafactura -> factura_id = $idFactura;
			$entradareservafactura -> entradareserva_id = $idEntrada;
			R::store($entradareservafactura);*/
			$entradaReserva = R::load("entradareserva",$idEntrada);
			$factura = R::load("factura",$idFactura);
			$entradaReserva -> sharedEntradaList [ ] = $factura;
			R::store($entradaReserva);
			
		}
		
	
	}
	
	
	
	
	
}



?>