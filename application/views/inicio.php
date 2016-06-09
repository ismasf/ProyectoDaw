<br/>
<div class="container">
	<div class="cabe">
		<h1>CARTELERA</h1>
	</div>
</div>
<?php //$this->load->view('registro/dialogRegistrar');?>


<!-- <a href="<?php  echo base_url("Usuarios/compraEntada"); ?>">Prueba compra pdf</a> -->
 
<!-- <a id="registrar">Registrar</a><br> -->

<div class="container">
<br/>
<div class="row">
	<div class="col-xs-12">
		<div id="carousel-1" class="carousel slide" data-ride="carousel">
			<!-- Señaladores -->
			<ol class="carousel-indicators">
				<?php for ($i=0;$i<sizeof($cartelera);$i++) : ?>
					<li data-target="#carousel-1" data-slide-to="<?=$i?>" <?php if ($i==0):?>class="active"<?php endif;?>></li>
				<?php endfor;?>
			</ol>
			<!-- Contenedor de slides -->
			<div class="carousel-inner fixImg" role="listbox">
				<?php $b=0;?>
				<?php foreach ($cartelera as $pelicula):?>
				
					<div class="item <?php if ($b==0):?>active<?php endif;?>">
						<div class="contenedor">
						<img src="<?= base_url()?>assets/img/pelicula/<?=$pelicula["id"]?>.png" class="img-responsive"/>
						</div>
						<div class="carousel-caption">
							<h3><?=$pelicula["titulo"]?></h3>
						</div>
					</div>
					<?php $b++;?>
				<?php endforeach;?>
					
			</div>
		</div>
		
	</div>
	</div>	

</div>
<div class="container" >
<div class="container" >
<div class="container" >
<div class="container" >
		<div class="row">
		<div>
		<?php foreach ($cartelera as $pelicula):?>
			<div class="col-xs-6 col-md-3 col-xl-4" >
				<a href="<?=base_url()."pelicula?id=".$pelicula["id"]?>"><?=$pelicula["titulo"]?></a><br>
				<a href="<?=base_url()."pelicula?id=".$pelicula["id"]?>"><img src="<?= base_url()?>assets/img/pelicula/<?='c'.$pelicula["id"]?>.jpg" class="grow tamanio"/></a>
			</div>
			<div class="col-xs-6 col-md-3 col-xl-4">
				<a href="<?=base_url()."pelicula?id=".$pelicula["id"]?>"><?=$pelicula["titulo"]?></a><br>
				<a href="<?=base_url()."pelicula?id=".$pelicula["id"]?>"><img src="<?= base_url()?>assets/img/pelicula/<?='c'.$pelicula["id"]?>.jpg" class="grow tamanio"/></a>
			</div>
		<?php endforeach;?>
		</div>
	</div>
	</div>
	</div>
	</div>
</div>
