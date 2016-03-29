<table border=1>


<?php
$cont = 0;
foreach ( $asientos as $asiento ) {
	$color = "verde";
	foreach ( $reservas as $reserva ) {
		if (in_array ( $asiento ["id"], $reserva )) {
			$color = "rojo";
		}
	}
	foreach ( $bloqueados as $bloqueado ) {
		if (in_array ( $asiento ["id"], $bloqueado )) {
			$color = "azul";
		}
	}
	if ($cont % 21 == 0) {
		
		//echo "</tr><tr><td bgcolor=$color id=\"" . $asiento ["id"] . "\" ".($color=="red"?"":($color=="yellow"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">" . $asiento ["nom"] . "</td>";
		echo "<br><img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">";
	} else {
		//echo "<td bgcolor=$color id=\"" . $asiento ["id"] . "\" ".($color=="red"?"":($color=="yellow"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">" . $asiento ["nom"] . "</td>";
		echo "<img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">";
	}
	
	$cont ++;
}

?>

</table>