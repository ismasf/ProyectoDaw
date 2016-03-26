





<br>_________<br>
CARTELERA:<br>
<?php $this->load->view('registro/dialogRegistrar');?>
<a id="registrar">Registrar</a><br>

<?php foreach ($cartelera as $pelicula):?>
<a href="<?=base_url()."pelicula?id=".$pelicula["id"]?>"><?=$pelicula["titulo"]?></a><br>
<?php endforeach;?>
