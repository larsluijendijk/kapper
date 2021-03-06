<?php

require(ROOT . "model/AgendaModel.php");

function index()
{
	if (isset($_SESSION['username'])){
		if ($_SESSION['is_admin'] == 1){
		render("agenda/index", array(
		'appointments' => getAllAppointments()
	));
	}

	else{
		render("home/index");
		}
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
	if (isset($_POST['dates']) && isset($_POST['start_time']) && isset($_POST['end_time']) && isset($_POST['kapper']) && isset($_POST['customer_id']) && isset($_POST['been_there'])){
        createAppointmentAction($_POST['dates'], $_POST['start_time'], $_POST['end_time'], $_POST['kapper'], $_POST['customer_id'] , $_POST['been_there']);
        header("Location:" . URL . "agenda/index");
	}
	else{
		header("Location:" . URL . "error/error");
	}
}

function deleteAppointment($id){
	if(isset($id)){
		deleteAppointmentAction($id);
		header("Location:" . URL . "agenda/index");
	}
	else{
 		header("Location:" . URL . "error/error");
	}
}

function showUser($id){
	if(isset($id)){
		render("agenda/user", array(
		'customer' => showCustomer($id)
		));
		/*header("Location:" . URL . "agenda/index");*/
	}
	else{
 		header("Location:" . URL . "error/error");
	}
}

function freetime()
{
	if (isset($_SESSION['is_admin'])){
		if($_SESSION['is_admin'] == 0){
		render("agenda/freetime", array(
		'freetimes' => getAllFreetime()
	));
		}
	}
	else{
		render("home/index");
	}
}

function signup($id)
{
	if (isset($_SESSION['is_admin'])){
	if($_SESSION['is_admin'] == 0){
	render("agenda/signup",array(
	'signups' => showUpdateSignup($id)
	));
		}
	}
}

function signupAction()
{
		if (isset($_POST['agenda_id']) && isset($_POST['customer_id'])){
		updateSignup($_POST['agenda_id'], $_POST['customer_id']);
	}
	header("Location:" . URL . "agenda/reservation");

}

function reservation()
{
	if (isset($_SESSION['is_admin'])){
		if($_SESSION['is_admin'] == 0){
		render("agenda/reservation", array(
		'reservations' => getReservation($_SESSION['id'])
	));
		}
	}
	else{
		render("home/index");
	}
}

function cancel($id){
	if(isset($id)){
		cancelAppointment($id);
		header("Location:" . URL . "agenda/reservation");
	}
	else{
 		header("Location:" . URL . "error/error");
	}
}

function beenthere($id){
	if (isset($_SESSION['is_admin'])){
	if($_SESSION['is_admin'] == 1){
	if(isset($id)){
		$answer = getBeenthere($id);
		$new_answer = array_reduce($answer, 'array_merge', array());
		foreach ($new_answer as $key) {


			if ($key == "ja"){
				changeToNo($id);
			header("Location:" . URL . "agenda/index");
			}
			elseif($key == "nee"){
				changeToYes($id);
			header("Location:" . URL . "agenda/index");
			}

			else{
		 	header("Location:" . URL . "error/error");
		 	}
		 			}
				}
		  }					
	 }
	header("Location:" . URL . "agenda/index");
}