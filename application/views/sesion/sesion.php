
<!-- <?= script_tag('assets/js/jquery.js') ?> -->

<script>

$(document).ready(function(){

	$.get('<?= base_url()?>sesion/getMapaAsientos/<?=$idAle ?>', { sesion: "<?=$_GET["idSesion"]?>" }, function(datos) {
	    //alert('Respuesta = '+datos);
	    $("#divAsientos").html(datos);
	  });
	/*
	$("body").on("click",function (){
		$.get('<?= base_url()?>sesion/getMapaAsientos', { sesion: "<?=$_GET["idSesion"]?>" }, function(datos) {
		    //alert('Respuesta = '+datos);
		    $("#divAsientos").html(datos);
		  });
	});*/

	setInterval(function() {
		$.get('<?= base_url()?>sesion/getMapaAsientos/<?=$idAle ?>', { sesion: "<?=$_GET["idSesion"]?>" }, function(datos) {
		    //alert('Respuesta = '+datos);
		    $("#divAsientos").html(datos);
		  });
		
	}, <?=$conf->tiemporecarga?>);
	
	
});

function asiento(id){
	$.get('<?= base_url()?>sesion/asientoBloqueado/<?=$idAle ?>', { sesion: "<?=$_GET["idSesion"]?>", asiento : id }, function(datos) {
	    alert("bloquear");
	  });
	  
	  
}
function asientoDesbloquear(id){
	$.get('<?= base_url()?>sesion/asientoDesbloquear/<?=$idAle ?>', { sesion: "<?=$_GET["idSesion"]?>", asiento : id }, function(datos) {
	    alert("desbloquear"+datos);
	  });
}

</script>

	<br><div class="container"><h2>Elige tus asientos  <?=isset($_SESSION["idUser"])?"":"No has iniciado sesion"?></h2></div><br>
		<div id="divAsientos" class="container forimg"></div>
		
		
		
<div class="container"><form action="<?=base_url()?>entrada" method="POST">
<br><input type="hidden" id="asientos" name="asientos">
<br><input type="hidden" id="sesion" name="sesion" value="<?=$_GET["idSesion"]?>">
<br><input type="submit" class="btn btn-info" value="Confirmar">
</form>
</div>





