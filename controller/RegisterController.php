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
	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['is_admin']) ){
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		createUserAction($_POST['username'], $password, $_POST['is_admin']);
	}
	else{
		echo"Fill in all fields.";
	}
	header("Location:" . URL . "home/index");
}