<br><br>
<h1>Cual quieres añadir a la cartelera?</h1>
<?php foreach ($peliculas as $k):?>
	<a href="<?= base_url()?>administrador/carteleraAnadir/<?=$k['id']?>"><?=$k['titulo']?></a><br>
<?php endforeach;?>
<br><br>
<h1>Cual quieres eliminar de la cartelera?</h1>
<?php foreach ($cartelera as $k):?>
	<a href="<?= base_url()?>administrador/carteleraEliminar/<?=$k['id']?>"><?=$k['titulo']?></a><br>
<?php endforeach;?>

<script src="<?=base_url()?>assets/css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>assets/css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>