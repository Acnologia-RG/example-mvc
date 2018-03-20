<?php

function getAllSongs()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM song";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createSong()
{
	$artist = $_POST['artist'];
	$title = $_POST['title'];
	$url = $_POST['url'];

	if ($artist === '' || $title === '' || $url === '') {
		return false;
	}

	//Database verbinding maken
	$db = openDatabaseConnection();

	$sql = "INSERT INTO song (song_artist, song_name, song_url) VALUES (:artist, :title, :url)";

	$query = $db->prepare($sql);
	$query->execute(array(
		":artist" => $artist,
		":title" => $title,
		":url" => $url 
	));

	//Database verbinding sluiten
	$db = null;

	return true;
}

function deleteSong($id)
{
	if ($id === '') {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "DELETE FROM song WHERE song_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));

	$db = null;

	return true;
}