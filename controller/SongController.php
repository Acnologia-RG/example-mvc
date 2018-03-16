<?php

require(ROOT . "model/SongModel.php");

function index()
{
	$songs = getAllSongs();
	
	render("song/index", array(
		'songs' => $songs)
	);
}

function create()
{
	render("song/create");
}

function createSave()
{
	var_dump($_POST);
}

function read()
{
	echo "read";
}

function edit()
{
	echo "edit";
}

function editSave()
{
	echo "editSave";
}

function delete()
{
	echo "delete";
}