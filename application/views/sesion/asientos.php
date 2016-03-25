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
	foreach ( $bloqueados as $bloqueado ) {
		if (in_array ( $asiento ["id"], $bloqueado )) {
			$color = "yellow";
		}
	}
	if ($cont % 10 == 0) {
		
		echo "</tr><tr><td bgcolor=$color id=\"" . $asiento ["id"] . "\" ".($color=="red"?"":($color=="yellow"?"":"onclick=asiento(".$asiento ["id"].")")).">" . $asiento ["nom"] . "</td>";
	} else {
		echo "<td bgcolor=$color id=\"" . $asiento ["id"] . "\" ".($color=="red"?"":($color=="yellow"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">" . $asiento ["nom"] . "</td>";
	}
	$cont ++;
}

?>

</table>