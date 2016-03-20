
<?php 
print_r($cartelera);
?>
<br>_________<br>
CARTELERA:<br>

<?php foreach ($cartelera as $pelicula):?>
<a href="<?=base_url()."pelicula?id=".$pelicula["id"]?>"><?=$pelicula["titulo"]?></a><br>
<?php endforeach;?>
