
<html>


<head>
<?php 
print_r($cartelera);
$this->load->view('registro/scripts');
?>

</head>

<body>

<?php $this->load->view('registro/dialogRegistrar');?>
<a id="registrar">Registrar</a>
<br>_________<br>
CARTELERA:<br>

<?php foreach ($cartelera as $pelicula):?>
<a href="<?=base_url()."pelicula?id=".$pelicula["id"]?>"><?=$pelicula["titulo"]?></a><br>
<?php endforeach;?>

</body>
</html>