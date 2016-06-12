<?php
require_once ('application/libraries/rb.php');
class Pelicula_model extends CI_Model{


	public function getPeliculaPorId($id){
		
		$pelicula = R::load("pelicula",$id);
		
		
		return $pelicula;

	}

	public function modificarPelicula($id){
		$titulo= $_POST['titulo'];
		$director= $_POST['director'];
		$dura = $_POST['duracion'];
		$pelicula = R::load("pelicula",$id);
		$pelicula -> titulo = $titulo;
		$pelicula -> director = $director;
		$pelicula -> duracion = $dura;
		R::store($pelicula);
		$a = 'id'.$id;
		$str_datos = file_get_contents("assets/json/peliculas.json");
		$datos = json_decode($str_datos,true);
		$datos["peliculas"][$a]["Sinopsis"]=$_POST['sino'];
		$fh = fopen("assets/json/peliculas.json", 'w');
		fwrite($fh, json_encode($datos,JSON_UNESCAPED_UNICODE));
		fclose($fh);
		if($_FILES [ 'userfile' ]['size']>0){
			$i = $id.'.png';
			move_uploaded_file( $_FILES [ 'userfile' ][ 'tmp_name' ],"assets/img/pelicula/$i");
		}
		if($_FILES [ 'userfile2' ]['size']>0){
			move_uploaded_file( $_FILES [ 'userfile2' ][ 'tmp_name' ],"assets/img/pelicula/c$id.jpg");
		}

	}

	public function crearPelicula(){
		$titulo= $_POST['titulo'];
		$director= $_POST['director'];
		$dura = $_POST['duracion'];
		//echo $_GET['sino'].'<br>';
		$pelicula = R::dispense("pelicula");
		$pelicula -> titulo = $titulo;
		$pelicula -> director = $director;
		$pelicula -> duracion = $dura;
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
		/*//----------------


		$rutaImagenOriginal="assets/img/pelicula/$i";
	
		//Creamos una variable imagen a partir de la imagen original
		$img_original = imagecreatefromjpeg($rutaImagenOriginal);
	
		//Se define el maximo ancho o alto que tendra la imagen final
		$max_ancho = 1919;
		$max_alto = 687;
	
		//Ancho y alto de la imagen original
		list($ancho,$alto)=getimagesize($rutaImagenOriginal);
	
		//Se calcula ancho y alto de la imagen final
		$x_ratio = $max_ancho / $ancho;
		$y_ratio = $max_alto / $alto;
	
		//Si el ancho y el alto de la imagen no superan los maximos, 
		//ancho final y alto final son los que tiene actualmente
		if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho 
			$ancho_final = $ancho;
			$alto_final = $alto;
		}
		
		 * si proporcion horizontal*alto mayor que el alto maximo,
		 * alto final es alto por la proporcion horizontal
		 * es decir, le quitamos al alto, la misma proporcion que 
		 * le quitamos al alto
		 * 
		
		elseif (($x_ratio * $alto) < $max_alto){
			$alto_final = ceil($x_ratio * $alto);
			$ancho_final = $max_ancho;
		}
		/*
		 * Igual que antes pero a la inversa
		*/
		/*else{
			$ancho_final = ceil($y_ratio * $ancho);
			$alto_final = $max_alto;
		}
		
		//Creamos una imagen en blanco de tamaño $ancho_final  por $alto_final .
		$tmp=imagecreatetruecolor($ancho_final,$alto_final);	
		
		//Copiamos $img_original sobre la imagen que acabamos de crear en blanco ($tmp)
		imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
		
		//Se destruye variable $img_original para liberar memoria
		imagedestroy($img_original);
		
		//Definimos la calidad de la imagen final
		$calidad=95;
		
		//Se crea la imagen final en el directorio indicado
		imagejpeg($tmp,"assets/img/pelicula/$i",$calidad);*/

		//----------------*/
		move_uploaded_file( $_FILES [ 'userfile2' ][ 'tmp_name' ],"assets/img/pelicula/c$pelicula->id.jpg");
		//----------------


		/*$rutaImagenOriginal="assets/img/pelicula/c$pelicula->id.jpg";
	
		//Creamos una variable imagen a partir de la imagen original
		$img_original = imagecreatefromjpeg($rutaImagenOriginal);
	
		//Se define el maximo ancho o alto que tendra la imagen final
		$max_ancho = 150;
		$max_alto = 200;
	
		//Ancho y alto de la imagen original
		list($ancho,$alto)=getimagesize($rutaImagenOriginal);
	
		//Se calcula ancho y alto de la imagen final
		$x_ratio = $max_ancho / $ancho;
		$y_ratio = $max_alto / $alto;
	
		//Si el ancho y el alto de la imagen no superan los maximos, 
		//ancho final y alto final son los que tiene actualmente
		if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho 
			$ancho_final = $ancho;
			$alto_final = $alto;
		}
		
		 * si proporcion horizontal*alto mayor que el alto maximo,
		 * alto final es alto por la proporcion horizontal
		 * es decir, le quitamos al alto, la misma proporcion que 
		 * le quitamos al alto
		 * 
		
		elseif (($x_ratio * $alto) < $max_alto){
			$alto_final = ceil($x_ratio * $alto);
			$ancho_final = $max_ancho;
		}
		/*
		 * Igual que antes pero a la inversa
		
		else{
			$ancho_final = ceil($y_ratio * $ancho);
			$alto_final = $max_alto;
		}
		
		//Creamos una imagen en blanco de tamaño $ancho_final  por $alto_final .
		$tmp=imagecreatetruecolor($ancho_final,$alto_final);	
		
		//Copiamos $img_original sobre la imagen que acabamos de crear en blanco ($tmp)
		imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
		
		//Se destruye variable $img_original para liberar memoria
		imagedestroy($img_original);
		
		//Definimos la calidad de la imagen final
		$calidad=95;
		
		//Se crea la imagen final en el directorio indicado
		imagejpeg($tmp,"assets/img/pelicula/c$pelicula->id.jpg",$calidad);

		//----------------*/

		return $pelicula-> id;
	}



	public function getTodasPeliculas(){
		
		$peli = R::getAll("Select * from pelicula");
		
		return $peli;
		
		
	}

	public function getPeliculasTop(){
		$peli = R::getAll("SELECT COUNT(erf.Id) cant, er.sesion_id, p.titulo FROM entradareserva_factura erf, entradareserva er, sesion s, pelicula p WHERE erf.entradareserva_id = er.id AND er.sesion_id = s.id AND s.pelicula_id = p.id GROUP BY p.titulo ORDER BY cant DESC LIMIT 3");

		return $peli;
	}

	
	public function getIdPelicula($titulo){
		
		
		$result=R::getAll("SELECT id FROM pelicula WHERE titulo=:titulo", array(':titulo'=>$titulo));
		
		return $result;
		
		
	}

	public function eliminarPelicula($id){
		$pelicula = R::load("pelicula",$id);
		
		R::trash($pelicula);
		
		
	}

	

}