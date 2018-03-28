<?php

require(ROOT . "model/calendarModel.php");

function index()
{
	$calendarDates = generateCalendar();
	
	render("calendar/index", array(
		'calendar' => $calendarDates)
	);
}

function create()
{
	render("calendar/create");
}

function createSave()
{
	if (createcalendar()) {
		header("location:" . URL . "calendar/index");
		exit();
	} else {
		header("location:" . URL . "error/error_db");
		exit();	
	}
}

function read($id)
{
	$calendar = getcalendar($id);

	render("calendar/read", array(
		"calendar" => $calendar
	));
}

function edit($id)
{
	$calendar = getcalendar($id);

	render("calendar/edit", array(
		"calendar" => $calendar
	));
}

function editSave($id)
{
	if (editcalendar($id)) {
		header("location:" . URL . "calendar/index");
		exit();
	} else {
		header("location:" . URL . "error/error_404");
		exit();
	}
}

function deleteConfirm($id)
{
	$calendar = getcalendar($id);

	render("calendar/delete", array(
		"calendar" => $calendar
	));
}

function delete($id)
{	
	$yes = $_POST["yes"];
	if ($yes === "yes") {
		if (deletecalendar($id)) {
			header("location:" . URL . "calendar/index");
			exit();
		} else {
			//er is iets fout gegaan..
			header("location:" . URL . "error/error_delete");
			exit();	
		}
	} else {
		header("location:" . URL . "calendar/index");
		exit();
	}
}