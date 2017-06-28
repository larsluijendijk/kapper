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