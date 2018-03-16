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