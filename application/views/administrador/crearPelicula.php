<br><br>
<form action="<?=base_url()?>administrador/crearPeliculaPost" method='POST' ENCTYPE="multipart/form-data">
	<label>Titulo:</label><input type="text" name="titulo"></input><br>
	<label>Director:</label><input type="text" name="director"></input><br>
	<label>Sinopsis:</label><textarea name="sino"></textarea><br>
	<label>Imagen:</label><input type="file" name="userfile"></input>
	<input type="submit"></input>



</form>