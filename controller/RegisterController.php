<?php

require(ROOT . "model/RegisterModel.php");

function register()
{
	if (isset($_SESSION['username'])){ 
		header("Location:" . URL . "home/index");
	}
	else{
		render("register/register");
	}	
}

function createUser()
{
	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['postalcode']) && isset($_POST['city']) && isset($_POST['phonenumber']) && isset($_POST['is_admin'])){
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
		createUserAction($_POST['username'], $password, $_POST['email'], $_POST['address'], $_POST['postalcode'], $_POST['city'], $_POST['phonenumber'], $_POST['is_admin']);
	}
	else{
		echo"Fill in all fields.";
	}
	header("Location:" . URL . "home/index");
}