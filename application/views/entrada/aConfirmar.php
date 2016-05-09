<?php 
//session_name("cineProyecto");
//session_start();
$conectado = isset($_SESSION["idUser"]);
$asientos=$_POST["asientos"];
$sesion=$_POST["sesion"];
$div = preg_split("/[,]/",substr($asientos, 0,strlen($asientos)-1));
echo "SESION: $sesion<br>";
$precio = 6.7;
$total = 0;
foreach ($div as $idAsiento){
	echo "<br>Asiento: " . $idAsiento." Precio: ". $precio;
	$total = $total + $precio;
} 
echo "<br>TOTAL: ".$total;



?>
<script type="text/javascript">
	
	function validar(){
		alert('Conectate');
	}



</script>
<br>Estas con el usuario, <?=isset($_SESSION["idUser"])?$_SESSION["idUser"]:"No has iniciado sesion"?>.<br>

<form action="<?=base_url()?>entrada/confirmar" method="POST">
<input type="hidden" name="asientos" value="<?=substr($asientos, 0,strlen($asientos)-1)?>">
<br>
<input type="hidden" name="sesion" value="<?=$sesion?>">
<br>
<input type="hidden" name="precio" value="<?=$precio?>">
<br>
<?php
if($conectado){
	echo '<input type="submit" value="confirmar">';
}
?>



</form>