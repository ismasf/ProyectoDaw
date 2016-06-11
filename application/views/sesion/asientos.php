<style type="text/css">
	div{
		margin-right: 30px; 
	}

</style>

<?php
 $contador=15;
 $contador=sprintf("%02d",$contador);
if($sala['tipo']=='A'){
	// print_r($actuales);
	// $cont = 0;
	// foreach ( $asientos as $asiento ) {
	// 	$color = "verde";
	// 	foreach ( $bloqueados as $bloqueado ) {
	// 		if (in_array ( $asiento ["id"], $bloqueado )) {
	// 			$color = "azul";
	// 		}
	// 	}
	// 	foreach ( $actuales as $actual) {
	// 		if (in_array ( $asiento ["id"], $actual )) {
	// 			$color = "negro";
	// 		}
	// 	}
	// 	foreach ( $reservas as $reserva ) {
	// 		if (in_array ( $asiento ["id"], $reserva )) {
	// 			$color = "rojo";
	// 		}
	// 	}
	// 	if ($cont % 21 == 0) {		
	// 	//echo "</tr><tr><td bgcolor=$color id=\"" . $asiento ["id"] . "\" ".($color=="red"?"":($color=="yellow"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">" . $asiento ["nom"] . "</td>";
	// 	//echo "<br><img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">";
	// 		echo "<br><img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].") class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].")"))).">";
	// 	} else {
	// 	//echo "<td bgcolor=$color id=\"" . $asiento ["id"] . "\" ".($color=="red"?"":($color=="yellow"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">" . $asiento ["nom"] . "</td>";
	// 		echo "<img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].") class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].")"))).">";
	// 	//echo "<img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">";
	// 	}
	
	// 	$cont ++;
	// }
	$cont = 0;
	$contador--;
	echo $contador;
	foreach ( array_reverse($asientos) as $asiento ) {
		$color = "verde";
		foreach ( $bloqueados as $bloqueado ) {
			if (in_array ( $asiento ["id"], $bloqueado )) {
				$color = "azul";
			}
		}
		foreach ( $actuales as $actual) {
			if (in_array ( $asiento ["id"], $actual )) {
				$color = "negro";
			}
		}
		foreach ( $reservas as $reserva ) {
			if (in_array ( $asiento ["id"], $reserva )) {
				$color = "rojo";
			}
		}


		
		if($cont==4){
				echo "<img style=\"margin-right: 30px; \" width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].");alert('".$asiento ["nom"]."') class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].");alert('".$asiento ["nom"]."')"))).">";

		}else if($cont == 13){
			echo "<img style=\"margin-right: 30px; \" width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].");alert('".$asiento ["nom"]."') class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].");alert('".$asiento ["nom"]."')"))).">";
		}else{
			echo "<img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].");alert('".$asiento ["nom"]."') class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].");alert('".$asiento ["nom"]."')"))).">";
		}


		// if ($cont % 21 == 0) {		
		// //echo "</tr><tr><td bgcolor=$color id=\"" . $asiento ["id"] . "\" ".($color=="red"?"":($color=="yellow"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">" . $asiento ["nom"] . "</td>";
		// //echo "<br><img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">";
		// 	echo "<br><img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].") class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].")"))).">";
		// } else {
		// //echo "<td bgcolor=$color id=\"" . $asiento ["id"] . "\" ".($color=="red"?"":($color=="yellow"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">" . $asiento ["nom"] . "</td>";
		// 	echo "<img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].") class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].")"))).">";
		// //echo "<img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">";
		// }
	
		$cont ++;
		if($cont==19){
			$cont=0;
		}
		if($cont==0){
			echo "<br>";
			if($contador!=1){
			$contador--;
			$contador=sprintf("%02d",$contador);
			echo $contador;
			}
		}
	}






}else if($sala['tipo']=='B'){
	//print_r($actuales);
	$cont = 0;
	$cont2 = 0;
	$contador--;
	echo $contador;
	foreach ( array_reverse($asientos) as $asiento ) {
		$color = "verde";
		foreach ( $bloqueados as $bloqueado ) {
			if (in_array ( $asiento ["id"], $bloqueado )) {
				$color = "azul";
			}
		}
		foreach ( $actuales as $actual) {
			if (in_array ( $asiento ["id"], $actual )) {
				$color = "negro";
			}
		}
		foreach ( $reservas as $reserva ) {
			if (in_array ( $asiento ["id"], $reserva )) {
				$color = "rojo";
			}
		}



		if($cont==4){
				echo "<img style=\"margin-right: 30px; \" width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].");alert('".$asiento ["nom"]."') class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].");alert('".$asiento ["nom"]."')"))).">";

		}else if($cont == 13){
			echo "<img style=\"margin-right: 30px; \" width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].");alert('".$asiento ["nom"]."') class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].");alert('".$asiento ["nom"]."')"))).">";
			
		}else{
			echo "<img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].");alert('".$asiento ["nom"]."') class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].");alert('".$asiento ["nom"]."')"))).">";
		}





		// if ($cont % 21 == 0) {		
		// //echo "</tr><tr><td bgcolor=$color id=\"" . $asiento ["id"] . "\" ".($color=="red"?"":($color=="yellow"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">" . $asiento ["nom"] . "</td>";
		// //echo "<br><img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">";
		// 	echo "<br><img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].") class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].")"))).">";
		// } else {
		// //echo "<td bgcolor=$color id=\"" . $asiento ["id"] . "\" ".($color=="red"?"":($color=="yellow"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">" . $asiento ["nom"] . "</td>";
		// 	echo "<img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].") class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].")"))).">";
		// //echo "<img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">";
		// }
	
		$cont ++;
		if($cont==19){
			$cont=0;
			
		}
		if($cont==0){
			echo "<br>";
			if($contador!=1){
				$contador--;
				if ($contador==8){
					//$contador--;
					$contador=sprintf("%02d",$contador);
					echo $contador;
				}
				elseif ($cont2==6){
					
				}
				else{
				$contador=sprintf("%02d",$contador);
				echo $contador;
				}
			}
			$cont2++;
		}
		if($cont2 == 7){
			$cont2++;
			echo "<br>";
			echo "07";
			/*$contador=sprintf("%02d",$contador);
			echo "Fila: ".$contador;*/
		}
	}
}else if($sala['tipo']=='C'){
	//print_r($actuales);
	$cont = 0;
	$cont2 = 0;
	$cont3 = 0;
	$contador--;
	echo $contador;
	foreach ( array_reverse($asientos) as $asiento ) {
		$color = "verde";
		foreach ( $bloqueados as $bloqueado ) {
			if (in_array ( $asiento ["id"], $bloqueado )) {
				$color = "azul";
			}
		}
		foreach ( $actuales as $actual) {
			if (in_array ( $asiento ["id"], $actual )) {
				$color = "negro";
			}
		}
		foreach ( $reservas as $reserva ) {
			if (in_array ( $asiento ["id"], $reserva )) {
				$color = "rojo";
			}
		}

		if($cont2<6){
			if($cont==4){
				echo "<img style=\"margin-right: 30px; \" width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].");alert('".$asiento ["nom"]."') class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].");alert('".$asiento ["nom"]."')"))).">";

		}else if($cont == 13){
			echo "<img style=\"margin-right: 30px; \" width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].");alert('".$asiento ["nom"]."') class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].");alert('".$asiento ["nom"]."')"))).">";
			
		}else{
			echo "<img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].");alert('".$asiento ["nom"]."') class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].");alert('".$asiento ["nom"]."')"))).">";
		}


		// if ($cont % 21 == 0) {		
		// //echo "</tr><tr><td bgcolor=$color id=\"" . $asiento ["id"] . "\" ".($color=="red"?"":($color=="yellow"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">" . $asiento ["nom"] . "</td>";
		// //echo "<br><img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">";
		// 	echo "<br><img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].") class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].")"))).">";
		// } else {
		// //echo "<td bgcolor=$color id=\"" . $asiento ["id"] . "\" ".($color=="red"?"":($color=="yellow"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">" . $asiento ["nom"] . "</td>";
		// 	echo "<img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].") class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].")"))).">";
		// //echo "<img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"onclick=asientoDesbloquear(".$asiento ["id"].")":"onclick=asiento(".$asiento ["id"].")")).">";
		// }
	
		$cont ++;
		if($cont==19){
			$cont=0;
		}
		if($cont==0){
			echo "<br>";
			$cont2++;
			if($contador!=1){
				$contador--;
				$contador=sprintf("%02d",$contador);
				echo $contador;
			}
		}
	}else{
		if($cont3 == 0){
			echo "<img width=35 height=35 style=\"visibility: hidden\"><img width=35 height=35 style=\"visibility: hidden\"><img width=35 height=35 style=\"visibility: hidden\"><img width=35 height=35 style=\"visibility: hidden\"><img width=35 height=35 style=\"margin-right: 30px; visibility: hidden\">";
		}
		echo "<img width=35 height=35 src=\"".base_url()."assets/img/asientos/".$color.".png\" id=\"".$asiento["id"]."\" ".($color=="rojo"?"":($color=="azul"?"":($color=="negro"?"onclick=asientoDesbloquear(".$asiento ["id"].");alert('".$asiento ["nom"]."') class=\"selecionado\"":"onclick=asiento(".$asiento ["id"].");alert('".$asiento ["nom"]."')"))).">";
		$cont3++;
		if($cont3 == 9){
			echo "<br>";
			$cont3 = 0;
			if($contador!=1){
				$contador--;
				$contador=sprintf("%02d",$contador);
				echo $contador;
			}
		}
	}



	}
}
?>
<script>
//$("#asientos").val($(".selecionado").attr("id"));
$("#asientos").val("");
$(".selecionado").each(function(idx, el){
	console.log($(el).attr("id"));
	var a = $("#asientos").val();
	$("#asientos").val(a + $(el).attr("id")+",");
});

</script>
