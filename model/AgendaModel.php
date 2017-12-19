<?php
function getAllAppointments(){
	$db = openDatabaseConnection();

	$sql = "SELECT agenda.id, agenda.date, agenda.start_time, agenda.end_time, agenda.customer_id, agenda.been_there, `emp`.username as kapper, `cust`.username as klant
	FROM agenda
	LEFT JOIN users as `emp` ON agenda.employ_id = `emp`.id
    LEFT JOIN users as `cust` ON agenda.customer_id = `cust`.id
	";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}


function getAllFreetime(){
	$db = openDatabaseConnection();

	$sql = "SELECT agenda.id, agenda.date, agenda.start_time, agenda.end_time, agenda.employ_id ,agenda.customer_id, `emp`.username as kapper, `cust`.username as klant
	FROM agenda
	LEFT JOIN users as `emp` ON agenda.employ_id = `emp`.id
    LEFT JOIN users as `cust` ON agenda.customer_id = `cust`.id
    WHERE agenda.customer_id = 0
    ";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}


function getAllKappers(){
	$db = openDatabaseConnection();

	$sql = "SELECT id, username FROM users WHERE is_admin=1";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createAppointmentAction($dates, $start_time, $end_time, $kapper, $customer_id, $been_there) 
{
  $db = openDatabaseConnection();

  $sql = "INSERT INTO agenda(date, start_time, end_time, employ_id, customer_id, been_there) VALUES (:dates, :start_time, :end_time, :kapper, :customer_id, :been_there)";
  $query = $db->prepare($sql);
  $query->execute(array(
    ':dates' => $dates,
    ':start_time' => $start_time,
    ':end_time' => $end_time,
    ':kapper' => $kapper,
    ':customer_id' => $customer_id,
    ':been_there' => $been_there
    ));

  $db = null;
}

function deleteAppointmentAction($id){
	$db = openDatabaseConnection();

	$sql = "DELETE FROM agenda WHERE id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));

	$db = null;

}

function showCustomer($id){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM users WHERE id=$id";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function showUpdateSignup($id){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM agenda WHERE id=$id";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function updateSignup($agenda_id, $customer_id){
	$db = openDatabaseConnection();

    $query = "UPDATE agenda SET customer_id='$customer_id' WHERE id=$agenda_id";
    $result = $db->query($query);

  $db = null;
}

function getReservation($id){
	$db = openDatabaseConnection();

$sql = "SELECT agenda.id, agenda.date, agenda.start_time, agenda.end_time, agenda.employ_id ,agenda.customer_id, `emp`.username as kapper, `cust`.username as klant
	FROM agenda
	LEFT JOIN users as `emp` ON agenda.employ_id = `emp`.id
    LEFT JOIN users as `cust` ON agenda.customer_id = `cust`.id
    WHERE agenda.customer_id = $id
    ";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function cancelAppointment($id){
	$db = openDatabaseConnection();

	$sql = "UPDATE agenda SET customer_id = 0 WHERE id=$id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':customer_id' => $customer_id
		));

	$db = null;

}

function getBeenthere($id){
	$db = openDatabaseConnection();

	$sql = "SELECT been_there FROM agenda WHERE id=$id";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function changeToNo($id){
	$db = openDatabaseConnection();

	$sql = "UPDATE agenda SET been_there = 'nee' WHERE id=$id";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();

}

function changeToYes($id){
	$db = openDatabaseConnection();

	$sql = "UPDATE agenda SET been_there = 'ja' WHERE id=$id";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();

}