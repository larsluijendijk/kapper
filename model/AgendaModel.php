<?php
function getAllAppointments(){
	$db = openDatabaseConnection();

	$sql = "SELECT agenda.date, agenda.start_time, agenda.end_time, users.username as user_username
	FROM agenda
	LEFT JOIN users
	ON agenda.employ_id = users.id
	";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}