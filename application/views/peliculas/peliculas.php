
<?php
$hoy = date("N");
$lunes = ($hoy==1?'class="active"':"");
$martes = ($hoy==2?'class="active"':"");
$miercoles = ($hoy==3?'class="active"':"");
$jueves = ($hoy==4?'class="active"':"");
$viernes = ($hoy==5?'class="active"':"");
$sabado = ($hoy==6?'class="active"':"");
$domingo = ($hoy==7?'class="active"':"");


$lunesP = ($hoy==1?'class="active tab-pane"':"class='tab-pane'");
$martesP = ($hoy==2?'class="active tab-pane"':"class='tab-pane'");
$miercolesP = ($hoy==3?'class="active tab-pane"':"class='tab-pane'");
$juevesP = ($hoy==4?'class="active tab-pane"':"class='tab-pane'");
$viernesP = ($hoy==5?'class="active tab-pane"':"class='tab-pane'");
$sabadoP = ($hoy==6?'class="active tab-pane"':"class='tab-pane'");
$domingoP = ($hoy==7?'class="active tab-pane"':"class='tab-pane'");


//var_dump($trailers);

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
       $diaLetter="Lunes";
        break;

    case 2:
        $l = $a+6;
        $ma = $a;
        $mi = $a+1;
        $j = $a+2;
        $v = $a+3;
        $s = $a+4;
        $d = $a+5;
        $diaLetter="Martes";
        break;

    case 3:
        $l = $a+5;
        $ma = $a+6;
        $mi = $a;
        $j = $a+1;
        $v = $a+2;
        $s = $a+3;
        $d = $a+4;
        $diaLetter="Miercoles";
        break;

    case 4:
        $l = $a+4;
        $ma = $a+5;
        $mi = $a+6;
        $j = $a;
        $v = $a+1;
        $s = $a+2;
        $d = $a+3;
        $diaLetter="Jueves";
        break;

    case 5:
        $l = $a+3;
        $ma = $a+4;
        $mi = $a+5;
        $j = $a+6;
        $v = $a;
        $s = $a+1;
        $d = $a+2;
        $diaLetter="Viernes";
        break;

    case 6:
        $l = $a+2;
        $ma = $a+3;
        $mi = $a+4;
        $j = $a+5;
        $v = $a+6;
        $s = $a;
        $d = $a+1;
        $diaLetter="Sabado";
        break;

    case 7:
        $l = $a+1;
        $ma = $a+2;
        $mi = $a+3;
        $j = $a+4;
        $v = $a+5;
        $s = $a+6;
        $d = $a;
        $diaLetter="Domingo";
        break;
        
    
    default:
        # code...
        break;
}

?>





<div class="container" >
		<div class="row">
		<div>
		<?php $cont=0;?>
		<?php foreach ($cartelera as $pelicula):?>
		
		<a href="<?=base_url()."pelicula?id=".$pelicula["id"]?>"><h1><?=$pelicula["titulo"]?></h1></a>
		<div class="row">
			<div class="col-sm-3" id="imgPeliculaSection">
				
				<a href="<?=base_url()."pelicula?id=".$pelicula["id"]?>"><img src="<?= base_url()?>assets/img/pelicula/<?='c'.$pelicula["id"]?>.jpg" class="grow tamanio"/></a><br>
			</div>
			
			<div class="col-sm-9 card colorActive" id="peliculas" style="min-width:667px">
			 <?php $lun="";$mar="";$mie="";$jue="";$vie="";$sab="";$dom="";?>
			
				<?php foreach ($arraSesiones["pelicula-".$pelicula["id"]] as $sesion):?>
				
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
				
				 <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" id="idlunes" <?=$lunes?>><a href="#lunes" aria-controls="lunes" role="tab" data-toggle="tab"><?=$l?> Lunes</a></li>
                                        <li role="presentation" <?=$martes?>><a href="#martes" aria-controls="martes" role="tab" data-toggle="tab"><?=$ma?> Martes</a></li>
                                        <li role="presentation" <?=$miercoles?>><a href="#miercoles" aria-controls="miercoles" role="tab" data-toggle="tab"><?=$mi?> Miercoles</a></li>
                                        <li role="presentation" <?=$jueves?>><a href="#jueves" aria-controls="jueves" role="tab" data-toggle="tab"><?=$j?> Jueves</a></li>
                                        <li role="presentation" <?=$viernes?>><a href="#viernes" aria-controls="viernes" role="tab" data-toggle="tab"><?=$v?> Viernes</a></li>
                                        <li role="presentation" <?=$sabado?>><a href="#sabado" aria-controls="sabado" role="tab" data-toggle="tab"><?=$s?> Sabado</a></li>
                                        <li role="presentation" <?=$domingo?>><a href="#domingo" aria-controls="domingo" role="tab" data-toggle="tab"><?=$d?> Domingo</a></li>
                                    </ul>
                                    
                                   <div class="tab-content">
                                    	
                                        <div role="tabpanel" <?=$lunesP?> id="lunes"><?=$lun ?></div>
                                        <div role="tabpanel" <?=$martesP?> id="martes"><?=$mar ?></div>
                                        <div role="tabpanel" <?=$miercolesP?> id="miercoles"><?=$mie ?></div>
                                        <div role="tabpanel" <?=$juevesP?> id="jueves"><?=$jue ?></div>
                                        <div role="tabpanel" <?=$viernesP?> id="viernes"><?=$vie ?></div>
                                        <div role="tabpanel" <?=$sabadoP?> id="sabado"><?=$sab ?></div>
                                        <div role="tabpanel" <?=$domingoP?> id="domingo"><?=$dom ?></div>
                                    </div>
				
				
			
				<?php //$arraSesiones[$pelicula["id"]];?>
				<?php //var_dump($arraSesiones);?>
				<?php 
				?>
				
				
			</div></div>
		<?php endforeach;?>
		<?// sizeof($cartelera);?>
		<? //sizeof($arraSesiones);?>
		</div>
	</div>
	</div>