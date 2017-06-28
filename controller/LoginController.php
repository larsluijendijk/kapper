<?php

require(ROOT . "model/LoginModel.php");

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
	if (isset($_SESSION['username'])){ 
		render("login/logout");
	}
	else{
		echo"you are not logged in!";
	}
}