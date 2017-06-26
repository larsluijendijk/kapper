<?php

require(ROOT . "model/LoginModel.php");

function register()
{
	if (isset($_SESSION['username'])){ 
		header("Location:" . URL . "home/index");
	}
	else{
		render("login/register");
	}	
}

function login()
{
	if (isset($_SESSION['username'])){ 
		header("Location:" . URL . "home/index");
	}
	else{
		render("login/login");
	}
}

function logout(){
	render("login/logout");
}