<?php

function generateCalendar()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM `birthdays` 
	ORDER BY `birthdays`.`month`,`day`,`year` ASC";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getcalendar($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM `birthdays` 
	WHERE id = :id 
	LIMIT 1";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));

	$db = null;

	return $query->fetch();
}

function createcalendar()
{	
	$Name = ucwords($_POST["name"]);
	$person = isset($Name) ? $Name : null;
	$day = isset($_POST["day"]) ? $_POST["day"] : null;
	$month = isset($_POST["month"]) ? $_POST["month"] : null;
	$year = isset($_POST["year"]) ? $_POST["year"] : null;
	
	if ($person === null || $day === null || $month === null || $year === null) {
		return false;
		exit();
	}
	if (checkdate($month,$day,$year) === false) {
		return false;
		exit();
	}
	$db = openDatabaseConnection();

	$sql = "INSERT INTO `birthdays` (`person`, `day`, `month`, `year`) 
	VALUES (:person, :day, :month, :year)";

	$query = $db->prepare($sql);
	$query->execute(array(
		":person" => $person,
		":day" => $day,
		":month" => $month,
		":year" => $year
	));

	//Database verbinding sluiten
	$db = null;

	return true;
}

function deletecalendar($id)
{
	if ($id === '') {
		return false;
		exit();
	}

	$db = openDatabaseConnection();

	$sql = "DELETE FROM `birthdays` 
	WHERE id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));

	$db = null;

	return true;
}

function editcalendar($id=null)
{
	$id = isset($_POST["id"]) ? $_POST["id"] : null;
	$Name = ucwords($_POST["name"]);
	$person = isset($Name) ? $Name : null;
	$day = isset($_POST["day"]) ? $_POST["day"] : null;
	$month = isset($_POST["month"]) ? $_POST["month"] : null;
	$year = isset($_POST["year"]) ? $_POST["year"] : null;
	
	if ($person === null || $day === null || $month === null || $year === null || $id === null) {
		return false;
		exit();
	}
	if (checkdate($month,$day,$year) === false) {
		return false;
		exit();
	}
	$db = openDatabaseConnection();

	$sql = "UPDATE `birthdays` 
			SET person = :name, day = :day, month = :month, year = :year 
			WHERE id = :id";

	$query = $db->prepare($sql);

	$query->execute(array(
		":id" => $id,
		":name" => $person,
		":day" => $day,
		":month" => $month,
		":year" => $year
	));

	$db = null;

	return true;
}