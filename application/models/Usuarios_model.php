<?php


require_once ('application/libraries/rb.php');


class Usuarios_model extends CI_Model{

	
	
	
	public function emailExiste($correo){
		
		$result = R::getAll("SELECT * FROM usuario WHERE user = '$correo'");
		
		$cantidad=count($result);
	
		if($cantidad=="0"){
			echo "true";
	
		}else{
			echo "false";
		}
		
		
		
	}
	
	
	public function guardarUsuario($nombre, $apellidos, $correo, $ciudad, $contraseña, $fecha){
		
		
		$result = R::getAll("SELECT * FROM usuario WHERE user = '$correo'");
		
		$cantidad=count($result);
		
		if($cantidad=="0"){
			
			$password = password_hash($contraseña, PASSWORD_BCRYPT);
			
			//recuperar con $iguales = password_verify($original, $codificado);
			
			
			$date = str_replace('/', '-', $fecha);
			$dateFormat= date('Y-m-d', strtotime($date));
			
			$usuario = R::dispense('usuario');
			$usuario->nombre=$nombre;
			$usuario->apellidos=$apellidos;
			$usuario->user=$correo;
			$usuario->ciudad=$ciudad;
			$usuario->hash=$password;
			$usuario->fechanacimiento=$dateFormat;
			$usuario->verificado="NO";
			
			$id=R::store($usuario);
			
			$to = $correo;
			$message = 'Hello etc';
			
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$headers .= 'From: Website <admin@example.com>' . "\r\n";
			mail($to, 'User Registration', $message, $headers);
			
			
			
			
			echo "ok";
			
			
			
		
		}else{
			echo "false";
		}
		
		
		
		
		
		
	
	
	}





}







?>