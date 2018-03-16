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
	echo "create";
}

function createSave()
{
	echo "createsave";
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