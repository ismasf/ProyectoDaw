<?php 
	print_r($pelicula);
	print_r($sesiones);
?>
<br>__________________________<br>


Pagina de Pelicula

<h1><?=$pelicula->titulo?></h1>
<img width="150" height="200" src="<?= base_url()?>assets/img/<?=$pelicula->id?>.png">

Director: <?= $pelicula->director?>
<br>
<?php 

$data = file_get_contents(base_url()."assets/json/peliculas.json");
$json = json_decode($data, true);
//print_r($products);
echo $json["peliculas"]["id".$pelicula->id]["Sinopsis"];

/*$json["peliculas"]["id3"]["Sinopsis"]="Pruebaaaaa";

$fh = fopen("assets/json/peliculas.json", 'w');
fwrite($fh, json_encode($json,JSON_UNESCAPED_UNICODE));
fclose($fh);
*/

?>
<br>
______________________
<br>
Tiene estas sesiones:
<br>
<?php foreach ($sesiones as $sesion):?>
<a href="<?=base_url()?>sesion?idSesion=<?=$sesion["id"]?>"><?= substr($sesion["hora"], 11)?></a><br>
<?php endforeach;?>







