<!--  /*<?php
print_r ( $pelicula );
print_r ( $sesiones );
?>*/
--> 

<div class="container">
	<h1><?=$pelicula->titulo?></h1>
	<div class="row">
		<div class="media-left">
			<img 
				src="<?= base_url()?>assets/img/pelicula/<?='c'.$pelicula->id?>.jpg">
		</div>
		<div class="media-body">
			
			Director: <?= $pelicula->director?>
			<br>
			<?php
			
			$data = file_get_contents ( base_url () . "assets/json/peliculas.json" );
			$json = json_decode ( $data, true );
			// print_r($products);
			echo $json ["peliculas"] ["id" . $pelicula->id] ["Sinopsis"];
			
			/*
			 * $json["peliculas"]["id3"]["Sinopsis"]="Pruebaaaaa";
			 *
			 * $fh = fopen("assets/json/peliculas.json", 'w');
			 * fwrite($fh, json_encode($json,JSON_UNESCAPED_UNICODE));
			 * fclose($fh);
			 */
			
			?>
			<br>
		</div>
	</div>
</div>
______________________
<br>
Tiene estas sesiones:
<br>

<div class="container">
	<div class="row">
		                                <div class="col-md-8">
                                    <!-- Nav tabs --><div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#lunes" aria-controls="lunes" role="tab" data-toggle="tab">Lunes</a></li>
                                        <li role="presentation"><a href="#martes" aria-controls="martes" role="tab" data-toggle="tab">Martes</a></li>
                                        <li role="presentation"><a href="#miercoles" aria-controls="miercoles" role="tab" data-toggle="tab">Miercoles</a></li>
                                        <li role="presentation"><a href="#jueves" aria-controls="jueves" role="tab" data-toggle="tab">Jueves</a></li>
                                        <li role="presentation"><a href="#viernes" aria-controls="viernes" role="tab" data-toggle="tab">Viernes</a></li>
                                        <li role="presentation"><a href="#sabado" aria-controls="sabado" role="tab" data-toggle="tab">Sabado</a></li>
                                        <li role="presentation"><a href="#domingo" aria-controls="domingo" role="tab" data-toggle="tab">Domingo</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                    	<?php $lun="";$mar="";$mie="";$jue="";$vie="";$sab="";$dom="";?>
                                        <?php foreach ($sesiones as $sesion):?>
                                        	<?php $hora=strtotime(substr($sesion["hora"],0,10));
                                        		if(date("w",$hora)==1){
                                        			$lun.='<a href="'.base_url().'sesion?idSesion='.$sesion["id"].'">'.substr($sesion["hora"], 11).'</a><br/>';
                                        		}
                                        		elseif(date("w",$hora)==2){
                                        			$mar.='<a href="'.base_url().'sesion?idSesion='.$sesion["id"].'">'.substr($sesion["hora"], 11).'</a><br/>';
                                        		}
                                        		
                                        		elseif(date("w",$hora)==3){
                                        			$mie.='<a href="'.base_url().'sesion?idSesion='.$sesion["id"].'">'.substr($sesion["hora"], 11).'</a><br/>';
                                        		}
                                        		
                                        		elseif(date("w",$hora)==4){
                                        			$jue.='<a href="'.base_url().'sesion?idSesion='.$sesion["id"].'">'.substr($sesion["hora"], 11).'</a><br/>';
                                        		}
                                        		elseif(date("w",$hora)==5){
                                        			$vie.='<a href="'.base_url().'sesion?idSesion='.$sesion["id"].'">'.substr($sesion["hora"], 11).'</a><br/>';
                                        		}
                                        		elseif(date("w",$hora)==6){
                                        			$sab.='<a href="'.base_url().'sesion?idSesion='.$sesion["id"].'">'.substr($sesion["hora"], 11).'</a><br/>';
                                        		}
                                        		elseif(date("w",$hora)==0){
                                        			$dom.='<a href="'.base_url().'sesion?idSesion='.$sesion["id"].'">'.substr($sesion["hora"], 11).'</a><br/>';
                                        		}
                                        	
                                        	?>
                                        
                                        <?php endforeach;?>
                                        <div role="tabpanel" class="tab-pane active" id="lunes"><?=$lun ?></div>
                                        <div role="tabpanel" class="tab-pane" id="martes"><?=$mar ?></div>
                                        <div role="tabpanel" class="tab-pane" id="miercoles"><?=$mie ?></div>
                                        <div role="tabpanel" class="tab-pane" id="jueves"><?=$jue ?></div>
                                        <div role="tabpanel" class="tab-pane" id="viernes"><?=$vie ?></div>
                                        <div role="tabpanel" class="tab-pane" id="sabado"><?=$sab ?></div>
                                        <div role="tabpanel" class="tab-pane" id="domingo"><?=$dom ?></div>
                                    </div>
</div>
                                </div>
	</div>
</div>

