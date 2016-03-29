<?php 
session_name("cineProyecto");
session_start();

$asientos=$_GET["asientos"];
$sesion=$_GET["sesion"];
$div = preg_split("/[,]/",substr($asientos, 0,strlen($asientos)-1));
echo "SESION: $sesion<br>";
foreach ($div as $idAsiento){
	echo "<br>Asiento: " . $idAsiento;
}



?>
<br>Estas con el usuario, <?=isset($_SESSION["idUser"])?$_SESSION["idUser"]:"No has iniciado sesion"?>.<br>

<form action="<?=base_url()?>entrada/confirmar">
<input type="text" name="asientos" value="<?=substr($asientos, 0,strlen($asientos)-1)?>">
<br>
<input type="text" name="sesion" value="<?=$sesion?>">
<br>
<input type="submit" value="confirmar">

</form>