<?php

function register()
{
	render("login/register");	
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