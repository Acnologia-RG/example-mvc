<form action="<?= URL ?>song/editSave" method="POST">
	<input type="text" name="artist" value="<?= $song["song_artist"] ?>">
	<input type="text" name="title" value="<?= $song["song_name"] ?>">
	<input type="text" name="url" value="<?= $song["song_url"] ?>">
	<input type="submit" value="Opslaan">
</form>