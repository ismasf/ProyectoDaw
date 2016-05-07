<br>
<br>
<table border="1">
<tr>
		<td>Precio</td>
		<!-- <td>id</td> -->
		<td>nombre</td>
		<td>Asientos</td>
	</tr>
<?php foreach ($informe as $k):?>
	<tr>
		<td><?=$k['Precio']?></td>
		<!-- <td><?=$k['id']?></td> -->
		<td><?=$k['nombre']?></td>
		<td><?=$k['Asientos']?></td>
	</tr>
<?php endforeach;?>
</table>