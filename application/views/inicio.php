





<br>_________<br>
CARTELERA:<br>
<?php $this->load->view('registro/dialogRegistrar');?>
<a id="registrar">Registrar</a><br>

<div class="container">
<br/>
	<div class="col-md-6">
		<div id="carousel-1" class="carousel slide" data-ride="carousel">
			<!-- Señaladores -->
			<ol class="carousel-indicators">
				<?php for ($i=0;$i<sizeof($cartelera);$i++) : ?>
					<li data-target="#carousel-1" data-slide-to="<?=$i?>" <?php if ($i==0):?>class="active"<?php endif;?>></li>
				<?php endfor;?>
			</ol>
			<!-- Contenedor de slides -->
			<div class="carousel-inner" role="listbox">
					<?php $b=0;?>
					<?php foreach ($cartelera as $pelicula):?>
					
						<div class="item <?php if ($b==0):?>active<?php endif;?>">
							<div class="contenedor">
							<img src="<?= base_url()?>assets/img/<?=$pelicula["id"]?>.png" class="img-responsive"/>
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

<?php foreach ($cartelera as $pelicula):?>
<a href="<?=base_url()."pelicula?id=".$pelicula["id"]?>"><?=$pelicula["titulo"]?></a><br>
<?php endforeach;?>
