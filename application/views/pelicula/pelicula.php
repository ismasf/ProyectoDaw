<?php
$hoy = date("N");
$lunes = ($hoy==1?'class="active"':"");
$martes = ($hoy==2?'class="active"':"");
$miercoles = ($hoy==3?'class="active"':"");
$jueves = ($hoy==4?'class="active"':"");
$viernes = ($hoy==5?'class="active"':"");
$sabado = ($hoy==6?'class="active"':"");
$domingo = ($hoy==7?'class="active"':"");
$a = date("d");
$l = "";$ma = ""; $mi = ""; $j = ""; $v = ""; $s = ""; $d = "";
switch ($hoy) {
    case 1:
       $l = $a;
       $ma = $a+1;
       $mi = $a+2;
       $j = $a+3;
       $v = $a+4;
       $s = $a+5;
       $d = $a+6;
        break;

    case 2:
        $l = $a+6;
        $ma = $a;
        $mi = $a+1;
        $j = $a+2;
        $v = $a+3;
        $s = $a+4;
        $d = $a+5;

        break;

    case 3:
        $l = $a+5;
        $ma = $a+6;
        $mi = $a;
        $j = $a+1;
        $v = $a+2;
        $s = $a+3;
        $d = $a+4;
        break;

    case 4:
        $l = $a+4;
        $ma = $a+5;
        $mi = $a+6;
        $j = $a;
        $v = $a+1;
        $s = $a+2;
        $d = $a+3;
        break;

    case 5:
        $l = $a+3;
        $ma = $a+4;
        $mi = $a+5;
        $j = $a+6;
        $v = $a;
        $s = $a+1;
        $d = $a+2;
        break;

    case 6:
        $l = $a+2;
        $ma = $a+3;
        $mi = $a+4;
        $j = $a+5;
        $v = $a+6;
        $s = $a;
        $d = $a+1;
        break;

    case 0:
        $l = $a+1;
        $ma = $a+2;
        $mi = $a+3;
        $j = $a+4;
        $v = $a+5;
        $s = $a+6;
        $d = $a;
        break;
    
    default:
        # code...
        break;
}

?>

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
                                     <?php $lun="";$mar="";$mie="";$jue="";$vie="";$sab="";$dom="";?>
                                        <?php foreach ($sesiones as $sesion):?>
                                            <?php $hora=strtotime(substr($sesion["hora"],0,10));
                                                if(date("w",$hora)==1){
                                                    $lun.='<a href="'.base_url().'sesion?idSesion='.$sesion["id"].'">'.substr($sesion["hora"], 11).'</a><br/>';
                                                    $diaL=date("d",$hora);
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
		                                <div class="col-md-8">
                                    <!-- Nav tabs --><div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" <?=$lunes?>><a href="#lunes" aria-controls="lunes" role="tab" data-toggle="tab"><?=$l?> Lunes</a></li>
                                        <li role="presentation" <?=$martes?>><a href="#martes" aria-controls="martes" role="tab" data-toggle="tab"><?=$ma?> Martes</a></li>
                                        <li role="presentation" <?=$miercoles?>><a href="#miercoles" aria-controls="miercoles" role="tab" data-toggle="tab"><?=$mi?> Miercoles</a></li>
                                        <li role="presentation" <?=$jueves?>><a href="#jueves" aria-controls="jueves" role="tab" data-toggle="tab"><?=$j?> Jueves</a></li>
                                        <li role="presentation" <?=$viernes?>><a href="#viernes" aria-controls="viernes" role="tab" data-toggle="tab"><?=$v?> Viernes</a></li>
                                        <li role="presentation" <?=$sabado?>><a href="#sabado" aria-controls="sabado" role="tab" data-toggle="tab"><?=$s?> Sabado</a></li>
                                        <li role="presentation" <?=$domingo?>><a href="#domingo" aria-controls="domingo" role="tab" data-toggle="tab"><?=$d?> Domingo</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                    	
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

