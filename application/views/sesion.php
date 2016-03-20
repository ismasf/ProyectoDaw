Asientos:
<?php 

print_r($reservas);

?>
<table border=1>


<?php 
$cont = 0;
foreach ($asientos as $asiento){
	$color = "green";
	foreach ($reservas as $reserva){
		if(in_array($asiento["id"], $reserva)){
			$color = "red";
		}
	}
	if($cont%10==0){
		
		echo "</tr><tr><td bgcolor=$color>".$asiento["nom"]."</td>";
	}else{
		echo "<td bgcolor=$color>".$asiento["nom"]."</td>";
	}
	$cont++;
	
	
}


?>

</table>
