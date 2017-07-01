<?php

require(ROOT . "model/AgendaModel.php");

function index()
{
	if (isset($_SESSION['username'])){ 
		render("agenda/index", array(
		'appointments' => getAllAppointments()
	));
	}
	else{
		render("home/index");
	}
}

function create(){
	if (isset($_SESSION['username'])){
		if ($_SESSION['is_admin'] == 1){
		render("agenda/create", array(
		'kappers' => getAllKappers()
	));
		}
		else{
			echo"you are no admin!";
		}
	}
}

function createAppointment(){
	if (isset($_POST['dates']) && isset($_POST['start_time']) && isset($_POST['end_time']) && isset($_POST['kapper']) && isset($_POST['customer_id'])){
        createAppointmentAction($_POST['dates'], $_POST['start_time'], $_POST['end_time'], $_POST['kapper'], $_POST['customer_id']);

        header("Location:" . URL . "agenda/index");
	}
	else{
		header("Location:" . URL . "error/error");
	}
}