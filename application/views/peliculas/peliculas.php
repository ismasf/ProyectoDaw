<div class="container" >
		<div class="row">
		<div>
		<?php $cont=0;?>
		<?php foreach ($cartelera as $pelicula):?>
			<div class="col-sm-12" >
				
				<a href="<?=base_url()."pelicula?id=".$pelicula["id"]?>"><img src="<?= base_url()?>assets/img/pelicula/<?='c'.$pelicula["id"]?>.jpg" class="grow tamanio"/></a><a href="<?=base_url()."pelicula?id=".$pelicula["id"]?>"><?=$pelicula["titulo"]?></a><br>
			</div>
			
			<div class="col-sm-8" >
				<?php //$arraSesiones[$pelicula["id"]];?>
				<? //var_dump($arraSesiones[$cont++]);?>
				<?php 
				?>
				
				
			</div>
		<?php endforeach;?>
		<?// sizeof($cartelera);?>
		<? //sizeof($arraSesiones);?>
		</div>
	</div>
	</div>