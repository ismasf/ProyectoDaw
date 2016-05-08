<!--  /*<?php
print_r ( $pelicula );
print_r ( $sesiones );
?>*/
--> 

<div class="container">
	<h1><?=$pelicula->titulo?></h1>
	<div class="row">
		<div class="media-left">
			<img 
				src="<?= base_url()?>assets/img/pelicula/<?='c'.$pelicula->id?>.jpg">
		</div>
		<div class="media-body">
			
			Director: <?= $pelicula->director?>
			<br>
			<?php
			
			$data = file_get_contents ( base_url () . "assets/json/peliculas.json" );
			$json = json_decode ( $data, true );
			// print_r($products);
			echo $json ["peliculas"] ["id" . $pelicula->id] ["Sinopsis"];
			
			/*
			 * $json["peliculas"]["id3"]["Sinopsis"]="Pruebaaaaa";
			 *
			 * $fh = fopen("assets/json/peliculas.json", 'w');
			 * fwrite($fh, json_encode($json,JSON_UNESCAPED_UNICODE));
			 * fclose($fh);
			 */
			
			?>
			<br>
		</div>
	</div>
</div>
______________________
<br>
Tiene estas sesiones:
<br>
<?php foreach ($sesiones as $sesion):?>

Dia:<?=substr($sesion["hora"],8,2)?> <a href="<?=base_url()?>sesion?idSesion=<?=$sesion["id"]?>"><?= substr($sesion["hora"], 11)?></a>
<br>
<?php endforeach;?>







