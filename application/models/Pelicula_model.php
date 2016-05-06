<?php
require_once ('application/libraries/rb.php');
class Pelicula_model extends CI_Model{


	public function getPeliculaPorId($id){
		
		$pelicula = R::load("pelicula",$id);
		
		
		return $pelicula;

	}

	public function crearPelicula(){
		$titulo= $_POST['titulo'];
		$director= $_POST['director'];
		//echo $_GET['sino'].'<br>';
		$pelicula = R::dispense("pelicula");
		$pelicula -> titulo = $titulo;
		$pelicula -> director = $director;
		R::store($pelicula);
		$a = 'id'.$pelicula->id;
		$str_datos = file_get_contents("assets/json/peliculas.json");
		$datos = json_decode($str_datos,true);
		$datos["peliculas"][$a]["Sinopsis"]=$_POST['sino'];
		$fh = fopen("assets/json/peliculas.json", 'w');
		fwrite($fh, json_encode($datos,JSON_UNESCAPED_UNICODE));
		fclose($fh);
		$i = $pelicula->id.'.png';
		move_uploaded_file( $_FILES [ 'userfile' ][ 'tmp_name' ],"assets/img/pelicula/$i");
	}

	public function getTodasPeliculas(){
		
		$peli = R::getAll("Select * from pelicula");
		
		return $peli;
		
		
	}

	public function getPeliculasTop(){
		$peli = R::getAll("SELECT COUNT(erf.Id) cant, er.sesion_id, p.titulo FROM entradareserva_factura erf, entradareserva er, sesion s, pelicula p WHERE erf.entradareserva_id = er.id AND er.sesion_id = s.id AND s.pelicula_id = p.id GROUP BY p.titulo ORDER BY cant DESC LIMIT 3");

		return $peli;
	}


}