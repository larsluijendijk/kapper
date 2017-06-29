<?php
function getAllAppointments(){
	$db = openDatabaseConnection();

	$sql = "SELECT agenda.date, agenda.start_time, agenda.end_time, `emp`.username as kapper, `cust`.username as klant
	FROM agenda
	LEFT JOIN users as `emp` ON agenda.employ_id = `emp`.id
    LEFT JOIN users as `cust` ON agenda.customer_id = `cust`.id
	";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}