<html>
<head>
<?= script_tag('assets/js/jquery.js') ?>

<script>

$(document).ready(function(){

	$.get('<?= base_url()?>sesion/getMapaAsientos', { sesion: "<?=$_GET["idSesion"]?>" }, function(datos) {
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
		$.get('<?= base_url()?>sesion/getMapaAsientos', { sesion: "<?=$_GET["idSesion"]?>" }, function(datos) {
		    //alert('Respuesta = '+datos);
		    $("#divAsientos").html(datos);
		  });
	}, 1500);
	
	
});

function asiento(id){
	$.get('<?= base_url()?>sesion/asientoBloqueado', { sesion: "<?=$_GET["idSesion"]?>", asiento : id }, function(datos) {
	    alert("bloquear");
	  });
}
function asientoDesbloquear(id){
	$.get('<?= base_url()?>sesion/asientoDesbloquear', { sesion: "<?=$_GET["idSesion"]?>", asiento : id }, function(datos) {
	    alert("desbloquear"+datos);
	  });
}

</script>



</head>
<body>
	Estas con el usuario 1, porque aun no he puesto sistema de usuarios.<br>
		Asientos:
		<div id="divAsientos"></div>
		
		
		<!-- NAAAAAAAAAAAA
<?php
print_r ( $reservas );

?>
<table border=1>


<?php
$cont = 0;
foreach ( $asientos as $asiento ) {
	$color = "green";
	foreach ( $reservas as $reserva ) {
		if (in_array ( $asiento ["id"], $reserva )) {
			$color = "red";
		}
	}
	if ($cont % 10 == 0) {
		
		echo "</tr><tr><td bgcolor=$color id=\"" . $asiento ["id"] . "\">" . $asiento ["nom"] . "</td>";
	} else {
		echo "<td bgcolor=$color id=\"" . $asiento ["id"] . "\">" . $asiento ["nom"] . "</td>";
	}
	$cont ++;
}

?>

</table>

 -->

</body>
</html>



