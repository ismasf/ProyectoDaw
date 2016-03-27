
<html>


<head>
<?php 
print_r($cartelera);
$this->load->view('registro/scripts');
?>

</head>

<body>

<?php //$this->load->view('registro/dialogRegistrar');?>
<div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">
  <button data-remodal-action="close" class="remodal-close"></button>
  </div>
<a id="registrar">Registrar</a>
<br>_________<br>
CARTELERA:<br>

<?php foreach ($cartelera as $pelicula):?>
<a href="<?=base_url()."pelicula?id=".$pelicula["id"]?>"><?=$pelicula["titulo"]?></a><br>
<?php endforeach;?>

</body>
</html>