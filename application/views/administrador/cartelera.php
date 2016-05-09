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
    <script src="<?=base_url()?>assets/css/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/Flot/jquery.flot.resize.js"></script>
    <script src="<?=base_url()?>assets/css/jquery.flot.spline.js"></script>
    <script src="<?=base_url()?>assets/css/curvedLines.js"></script>
    <script src="<?=base_url()?>assets/css/custom.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/moment/min/moment.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/fastclick/lib/fastclick.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/nprogress/nprogress.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/switchery/dist/switchery.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/jquery-knob/dist/jquery.knob.min.js"></script>