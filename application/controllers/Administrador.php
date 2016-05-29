<?php
require_once ('application/libraries/rb.php');
class Administrador extends CI_Controller{
	
	public function index(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		
		R::close();
		//$this->template->load("plantilla","administrador/index");
		if(isset($_SESSION["idUserAdmin"])){
			header("Location: ".base_url()."administrador/principal" );
			
		}else{
			$this->load->view("administrador/index");
		}
		
		
	}
	public function getAdmin(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		
		$user = $_GET['user'];
		$pass = $_GET['pass'];
		
		$fila = R::getAll("SELECT * FROM usuario WHERE admin='SI' and user = :correo", array(':correo'=>$user));
		if(count($fila)!="0"){
			
			$hash=$fila['0']['hash'];
			if(password_verify($pass, $hash)){
				
				$_SESSION['idUserAdmin']['id']=$fila['0']['id'];
				$_SESSION['idUserAdmin']['nombre']=$fila['0']['nombre'];
				
				
				if(isset($_SESSION['idUserAdmin']['id']) && $_SESSION['idUserAdmin']['id']!=null){
				
				
					$imagenUserJpeg = 'assets/img/photoUser/imageUser'.$_SESSION['idUserAdmin']['id'].'.jpeg';
					$imagenUserJpg = 'assets/img/photoUser/imageUser'.$_SESSION['idUserAdmin']['id'].'.jpg';
					$imagenUserPng = 'assets/img/photoUser/imageUser'.$_SESSION['idUserAdmin']['id'].'.png';
				
					if (file_exists($imagenUserJpeg)) {
							
						$imagen='imageUser'.$_SESSION['idUserAdmin']['id'].'.jpeg';
							
							
							
							
					}else if(file_exists($imagenUserJpg)){
							
						$imagen='imageUser'.$_SESSION['idUserAdmin']['id'].'.jpg';
							
					}else if(file_exists($imagenUserPng)){
							
							
						$imagen='imageUser'.$_SESSION['idUserAdmin']['id'].'.png';
							
							
					}else{
							
						$imagen='anonimo.png';
						//$imagen='/assets/img/photoUser/imageUser'.$_SESSION['idUser'].'.jpeg';
					}
				
				
						
				
					$_SESSION['imagenUser']=$imagen;
				
				
				}
				
				
				
				
				echo "OK";
			}else{
				echo "FAIL";
			}
		}else{
			echo "FAIL";
		}


		R::close();
		
		
	}

	public function desconectar(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		
		unset($_SESSION["idUserAdmin"]);
		$this->load->view("administrador/index");
		R::close();
	}

	public function principal(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model('usuarios_model');
			$datos['cUsuarios']= $this->usuarios_model->getCantidadUsuarios();
			$this->load->model('factura_model');
			$datos['ingresosTotales']= $this->factura_model->ingresosTotales();
			$this->load->model('entradareserva_model');
			$datos['datoCant']=$this->entradareserva_model->datosCantidadSemana();
			$this->load->model('pelicula_model');
			$datos['topPelis']=$this->pelicula_model->getPeliculasTop();
			$this->template->load("plantillaAdmin","administrador/principal", $datos);
		}else{
			$this->load->view("administrador/error");
		}
		
		
		R::close();
		
		//$this->template->load("plantilla","administrador/principal");
		// $this->load->view("prueba/Prue",$datos);
		//$this->load->view("entrada/aConfirmar");
	}

	public function crearSesiones(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();

		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("cartelera_model");
			$datos['peliculas'] = $this->cartelera_model->getCartelera();

			$this->load->model("sala_model");
			$datos['salas'] = $this->sala_model->getSalas();
			$this->template->load("plantillaAdmin","administrador/crearSesiones",$datos);
		}else{
			$this->load->view("administrador/error");
		}

		
		
		R::close();
		
		//$this->load->view("entrada/aConfirmar");
	}
	public function crearSesionesPost(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		
		
		if(isset($_SESSION["idUserAdmin"])){
			if(isset($_POST["horaSesion"])){
				$this->load->model("sesion_model");
				$this->sesion_model->crearSesiones();
			}
			
			$this->template->load("plantillaAdmin","administrador/crearSesionesPost");
		}else{
			$this->load->view("administrador/error");
		}

		R::close();

		//$this->load->view("entrada/aConfirmar");
	}

	public function crearPelicula(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->template->load("plantillaAdmin","administrador/crearPelicula");
		}else{
			$this->load->view("administrador/error");
		}
		
		
		R::close();
		
		
		
		//$this->template->load("plantilla","administrador/crearPelicula");

	}

	public function crearPeliculaPost(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("pelicula_model");
			$this->load->model("cartelera_model");
			$data['idPeli']=$this->pelicula_model->crearPelicula();
			print_r($data["idPeli"]);
			if(isset($_POST["cartelera"])){
			
				$this->cartelera_model->anadirId($data['idPeli']);
			}
		}else{
			$this->load->view("administrador/error");
		}
		
		R::close();
		$this->template->load("plantillaAdmin","administrador/crearPeliculaPost");
	}

	public function cartelera(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("pelicula_model");
			$data['peliculas']=$this->pelicula_model->getTodasPeliculas();

			$this->load->model("cartelera_model");
			$data['cartelera']=$this->cartelera_model->getCarteleraId();
			$this->template->load("plantillaAdmin","administrador/cartelera",$data);
		}else{
			$this->load->view("administrador/error");
		}

		
		
		R::close();
		
	}

	public function carteleraEliminar($id){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("cartelera_model");
			$this->cartelera_model->eliminarId($id);
			$this->template->load("plantillaAdmin","administrador/carteleraEliminar");
		}else{
			$this->load->view("administrador/error");
		}
		
		
		R::close();
		
	}

	public function carteleraAnadir($id){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("cartelera_model");
			$this->cartelera_model->anadirId($id);
			$this->template->load("plantillaAdmin","administrador/carteleraAnadir");
		}else{
			$this->load->view("administrador/error");
		}
		
		R::close();
		
	}

	//SELECT SUM(er.precio) Precio, f.id, u.nombre, COUNT(er.asientos_id) Asientos FROM entradareserva er, entradareserva_factura erf, factura f, usuario u where erf.entradareserva_id = er.id AND f.id = erf.factura_id AND u.id = f.usuario_id GROUP BY erf.factura_id

	//SELECT erf.id, SUM(er.precio), f.id, u.nombre FROM entradareserva er, entradareserva_factura erf, factura f, usuario u where erf.entradareserva_id = er.id AND f.id = erf.factura_id AND u.id = f.usuario_id GROUP BY erf.factura_id
	
	public function informeFacturas(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("factura_model");
			$data['informe'] = $this->factura_model->informeFactura();
			$this->template->load("plantillaAdmin","administrador/informeFactura",$data);
		}else{
			$this->load->view("administrador/error");
		}
		
		
		R::close();
		
	}

	public function eliminarSesiones(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("sesion_model");
			$data['sesi']=$this->sesion_model->pruebaSesionSelect();
			//print_r($data['sesi']);
			$this->template->load("plantillaAdmin","administrador/eliminarSesion",$data);
		}else{
			$this->load->view("administrador/error");
		}
		
		
		R::close();
		
	}

	public function modificarPelicula(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("pelicula_model");
			$data['peliculas']=$this->pelicula_model->getTodasPeliculas();
			$this->template->load("plantillaAdmin","administrador/modificarPelicula",$data);
		}else{
			$this->load->view("administrador/error");
		}
		
		
		R::close();
		
		//$this->load->view("administrador/modificarPelicula");
	}

	public function modificarPeliculaGet($id){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("pelicula_model");
			$data['pelicula']=$this->pelicula_model->getPeliculaPorId($id);
			$data['id']=$id;
			$this->template->load("plantillaAdmin","administrador/modificarPeliculaGet",$data);
		}else{
			$this->load->view("administrador/error");
		}
		
		
		R::close();
		
	}

	public function modificarPeliculaPost($id){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("pelicula_model");
			$this->pelicula_model->modificarPelicula($id);
			$this->template->load("plantillaAdmin","administrador/modificarPeliculaPost");
		}else{
			$this->load->view("administrador/error");
		}
		
		
		R::close();
		
	}

	public function eliminarPelicula(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("pelicula_model");
			$data['peliculas']=$this->pelicula_model->getTodasPeliculas();
			$this->template->load("plantillaAdmin","administrador/eliminarPelicula",$data);
		
		}else{
			$this->load->view("administrador/error");
		}
		
		R::close();
		
		
		
	}

	public function eliminarPeliculaGet($id){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("pelicula_model");
			$this->pelicula_model->eliminarPelicula($id);
			$this->template->load("plantillaAdmin","administrador/eliminarPeliculaGet");
		}else{
			$this->load->view("administrador/error");
		}
		
		R::close();
		
		
		
	}

	public function eliminarSesionGet($id){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("sesion_model");
			$this->sesion_model->eliminarSesionId($id);
			$this->template->load("plantillaAdmin","administrador/eliminarSesionGet");
		
		}else{
			$this->load->view("administrador/error");
		}
		
		R::close();
	}

	public function activarUsuario(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("usuarios_model");
			$data['usuario']=$this->usuarios_model->getListaUsuarios();
			//print_r($data['usuario']);
			$this->template->load("plantillaAdmin","administrador/activarUsuario",$data);
		
		}else{
			$this->load->view("administrador/error");
		}
		
		R::close();
		
		
		
	}

	public function activarUsuarioGet($id){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("usuarios_model");
			$this->usuarios_model->activarUsuario($id);
			$this->template->load("plantillaAdmin","administrador/activarUsuarioGet");
		}else{
			$this->load->view("administrador/error");
		}
		
		R::close();
	}

	public function eliminarUsuario(){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("usuarios_model");
			$data['usuario']=$this->usuarios_model->getListaUsuariosTodos();
			//print_r($data['usuario']);
			$this->template->load("plantillaAdmin","administrador/eliminarUsuario",$data);
		
		}else{
			$this->load->view("administrador/error");
		}
		
		R::close();
		
		
		
	}

	public function eliminarUsuarioGet($id){
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
			$this->load->model("usuarios_model");
			$this->usuarios_model->eliminarUsuario($id);
			$this->template->load("plantillaAdmin","administrador/eliminarUsuarioGet");
		}else{
			$this->load->view("administrador/error");
		}
		
		R::close();
	}

	
	public function incidencias(){
		
		R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
		session_name ( "cineProyecto" );
		ini_set ( "session.cookie_lifetime", "7200" );
		ini_set ( "session.gc_maxlifetime", "7200" );
		session_start ();
		if(isset($_SESSION["idUserAdmin"])){
		
		
		
		
		$this->load->model ( 'Incidencias_model', '', true );
		$datos['incidencias'] = $this->Incidencias_model->getAllIncidenciasActive ();
		R::close();
		
		if($datos==[]){
				
			$this->template->load("plantillaAdmin","administrador/error");
				
				
		}else{
				
			$this->template->load("plantillaAdmin","administrador/incidencias",$datos);
		}
		
		
		}else{
			
			$this->load->view("administrador/error");
			
		}
		
		
	}




//	 public function crearAsientos(){
//	 	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
//	 	session_name ( "cineProyecto" );
//	 	ini_set ( "session.cookie_lifetime", "7200" );
//	 	ini_set ( "session.gc_maxlifetime", "7200" );
//	 	session_start ();
//	 	$this->load->model('asientos_model');
//	 	$this->asientos_model->crearAsientos();
//		
//		
//	 	R::close();
//	 	$this->template->load("plantillaAdmin","administrador/principal", $datos);
//	 	//$this->template->load("plantilla","administrador/principal");
//	 	// $this->load->view("prueba/Prue",$datos);
//	 	//$this->load->view("entrada/aConfirmar");
//	 }

		//  public function crearAdmin(){
	 // 	R::setup('mysql:host=localhost;dbname=proyecto', 'root', '');
	 // 	session_name ( "cineProyecto" );
	 // 	ini_set ( "session.cookie_lifetime", "7200" );
	 // 	ini_set ( "session.gc_maxlifetime", "7200" );
	 // 	session_start ();
	 // 	$pelicula = R::dispense("usuario");
		// $pelicula -> admin = "SI";
		
		// R::store($pelicula);
		
		
	 // 	R::close();
	 // 	$this->template->load("plantillaAdmin","administrador/principal", $datos);
	 // 	//$this->template->load("plantilla","administrador/principal");
	 // 	// $this->load->view("prueba/Prue",$datos);
	 // 	//$this->load->view("entrada/aConfirmar");
	 // }
	
	
}
?>