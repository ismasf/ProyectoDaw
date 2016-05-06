<?php
//session_name("cineProyecto");
//session_start();

require_once ('application/libraries/rb.php');


class Usuarios_model extends CI_Model{

	
	
	
	public function emailExiste($correo){
		
		$result = R::getAll("SELECT * FROM usuario WHERE user = :correo", array(':correo'=>$correo));
		
		$cantidad=count($result);
	
		if($cantidad=="0"){
			echo "true";
	
		}else{
			echo "false";
		}
		
		
		
	}
	
	public function emailOlvidado($correo){
		
		$result = R::getAll("SELECT * FROM usuario WHERE user = :correo", array(':correo'=>$correo));
		
		$cantidad=count($result);
		
		if($cantidad=="0"){
			echo "false";
		
		}else{
			echo "true";
		}
		
		
		
		
	}
	
	
	public function restablecerClaveEmail($correo){
		
		$ci =& get_instance();
		$ci->load->helper('correo');
		$result=restablecerClave2($correo);
		
		if(strlen($result)=="8"){
		
			$password = password_hash($result, PASSWORD_BCRYPT);
		
			$query="UPDATE usuario SET hash='$password' WHERE user='$correo'";
		
			$estado=R::exec( $query );
		
			if($estado){
				echo "ok";
			}else{
				echo "false";
			}
			
	}
	}
	
	
	public function guardarUsuario($nombre, $apellidos, $correo, $ciudad, $contraseña, $fecha){
		
		
		$result = R::getAll("SELECT * FROM usuario WHERE user = :correo", array(':correo'=>$correo));
		
		$cantidad=count($result);
		
		if($cantidad=="0"){
			
			$password = password_hash($contraseña, PASSWORD_BCRYPT);
			
			//recuperar con $iguales = password_verify($original, $codificado);
			
			
			$date = str_replace('/', '-', $fecha);
			$dateFormat= date('Y-m-d', strtotime($date));
			
			$uniqid=uniqid ();
			$usuario = R::dispense('usuario');
			$usuario->uniqid =$uniqid;
			$usuario->nombre=$nombre;
			$usuario->apellidos=$apellidos;
			$usuario->user=$correo;
			$usuario->ciudad=$ciudad;
			$usuario->hash=$password;
			$usuario->fechanacimiento=$dateFormat;
			$usuario->verificado="NO";
			
			$id=R::store($usuario);
			
			
			//....::::EMAIL VERIFICACION::::......
			
			//https://github.com/ivantcholakov/codeigniter-phpmailer
			
			/*$this->load->library('email');

            $subject = 'Verificacion Cine DAW2';
            $message = '<p>Por favor verifique su correo electronico atraves de este enlace: </p><br>';
            $message.=base_url().'Usuarios/verificarCorreo?correo='.$correo;

            // Get full html:
            $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
'.$message.'
</body>
</html>';
            // Also, for getting full html you may use the following internal method:
            //$body = $this->email->full_html($subject, $message);
            
            $this->load->library('email');
            
            
            $result = $this->email
                ->from('cinemaproyecto2016@gmail.com')
                ->reply_to('cinemaproyecto2016@gmail.com')    // Optional, an account where a human being reads.
                ->to($correo)
                ->subject($subject)
                ->message($body)
                ->send();

            //var_dump($result);
            //echo '<br />';
            //echo $this->email->print_debugger();
			
		///..:::FIN ENVIAR CORREO::....	
			
		
        ///...:::Respuesta AJAX:::......*/
        
			$ci =& get_instance();
			$ci->load->helper('correo');
        
			$result=enviarCorreoConfirmacionUsuario($nombre, $apellidos, $correo, $uniqid);
        
            
            if($result){
            	echo "ok";
            }else{
            	echo "false";
            }
			
			
			
			
		
		}else{
			echo "false";
		}
		
		
		
		
		
		
	
	
	}


	public function verificarCorreo($uniqid){
		
		$query="UPDATE usuario SET verificado='SI' WHERE uniqid='$uniqid'";
		
		$estado=R::exec( $query );
		return $estado;
		
	}
	
	public function hacerLogin($correo, $contraseña) {
		
		$fila = R::getAll("SELECT * FROM usuario WHERE verificado='SI' and user = :correo", array(':correo'=>$correo));
		
		
		if(count($fila)!="0"){
			
			$hash=$fila['0']['hash'];
			
			if(password_verify($contraseña, $hash)){
				
				$_SESSION['idUser']=$fila['0']['id'];
				$_SESSION['correoUser']=$correo;
				
				echo "ok";
					
			}else{
					
				echo "mal";
					
			}
			
			
		}else{
					
				echo "mal";
		}
		
		
		
		
	}
	
	function desconectarUser(){
		
		unset($_SESSION['idUser']);
		unset($_SESSION['correoUser']);
		
		echo "ok";
		
		
	}

	public function datosUser($usuarioId) {
		
		$result = R::getAll("SELECT * FROM usuario WHERE id = :usuarioId", array(':usuarioId'=>$usuarioId));
		
		return $result;
		
		
	}

	
	public function actualizarUsuario($nombre, $apellidos, $ciudad, $contraseña, $fecha){
	
	
		
	
		
				
			$password = password_hash($contraseña, PASSWORD_BCRYPT);
				
			//recuperar con $iguales = password_verify($original, $codificado);
				
				
			$date = str_replace('/', '-', $fecha);
			$dateFormat= date('Y-m-d', strtotime($date));
				
			$usuario= R::load( 'usuario', $_SESSION['idUser'] );
			
			
			$usuario->nombre=$nombre;
			$usuario->apellidos=$apellidos;
			
			$usuario->ciudad=$ciudad;
			$usuario->hash=$password;
			$usuario->fechanacimiento=$dateFormat;
			
				
			$id=R::store($usuario);
				
				
	
			///...:::Respuesta AJAX:::......*/
	
			
	
	
			if($id){
				echo "ok";
			}else{
				echo "false";
			}
				
				
				
				
	
		
	
	
	
	
	
	
	
	
	}
}







?>