<?php
session_name("cineProyecto");
session_start();

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
	
	
	public function guardarUsuario($nombre, $apellidos, $correo, $ciudad, $contraseņa, $fecha){
		
		
		$result = R::getAll("SELECT * FROM usuario WHERE user = :correo", array(':correo'=>$correo));
		
		$cantidad=count($result);
		
		if($cantidad=="0"){
			
			$password = password_hash($contraseņa, PASSWORD_BCRYPT);
			
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
			
			
			//....::::EMAIL VERIFICACION::::......
			
			//https://github.com/ivantcholakov/codeigniter-phpmailer
			
			$this->load->library('email');

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
			
		
        ///...:::Respuesta AJAX:::......
        
            
            if($result){
            	echo "ok";
            }else{
            	echo "false";
            }
			
			
			
			
		
		}else{
			echo "false";
		}
		
		
		
		
		
		
	
	
	}


	public function verificarCorreo($correo){
		
		$query="UPDATE usuario SET verificado='SI' WHERE user='$correo'";
		
		$estado=R::exec( $query );
		return $estado;
		
	}
	
	public function hacerLogin($correo, $contraseņa) {
		
		$fila = R::getAll("SELECT * FROM usuario WHERE verificado='SI' and user = :correo", array(':correo'=>$correo));
		
		
		if(count($fila)!="0"){
			
			$hash=$fila['0']['hash'];
			
			if(password_verify($contraseņa, $hash)){
				
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



}







?>