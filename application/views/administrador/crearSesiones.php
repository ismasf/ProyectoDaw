<br>
<br>
<form action="<?= base_url()?>administrador/crearSesionesPost">
<?php 
print_r($peliculas);
echo "<br><select name='pelicula'>";
foreach ($peliculas as $pelicula) {
	echo "<option value='".$pelicula['id']."'>".$pelicula['titulo']."</option>";
}
echo "</select>";


?>

<br>
DE: 
<select name="dia1">
	<?php
		for($i=1;$i<30;$i++){
			echo "<option value='$i'>$i</option>";
		}
	?>

</select>
<select name="mes1">
	<?php
		for($i=1;$i<12;$i++){
			echo "<option value='$i'>$i</option>";
		}
	?>

</select>
<select name="ano1">
	<?php
		for($i=2016;$i<2019;$i++){
			echo "<option value='$i'>$i</option>";
		}
	?>

</select>
<br>
<br>
A:
<select name="dia2">
	<?php
		for($i=1;$i<30;$i++){
			echo "<option value='$i'>$i</option>";
		}
	?>

</select>
<select name="mes2">
	<?php
		for($i=1;$i<12;$i++){
			echo "<option value='$i'>$i</option>";
		}
	?>

</select>
<select name="ano2">
	<?php
		for($i=2016;$i<2019;$i++){
			echo "<option value='$i'>$i</option>";
		}
	?>

</select>
<br>
<br>
<br>
<select name="hora[]" multiple="multiple">
	<option value="16:00">16:00</option>
	<option value="17:00">17:00</option>
	<option value="18:00">18:00</option>
	<option value="19:00">19:00</option>
	<option value="20:00">20:00</option>
	<option value="21:00">21:00</option>
	<option value="22:00">22:00</option>
</select>
<?php 
echo "<br><select name = 'sala'>";
foreach ($salas as $sala) {
	echo "<option value='".$sala['id']."'>".$sala['id']."</option>";
}
echo "</select>";


?>
<br>
<input type="submit"></input>
</form>

