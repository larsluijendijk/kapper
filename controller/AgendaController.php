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
		render("agenda/create");
		}
		else{
			echo"you are no admin!";
		}
	}
}