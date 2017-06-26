<?php
function userLoginAction(){
	session_start();  
	$host= "localhost";
	$database  = "kapper";
	$dbusername = "root";  
	$dbpassword = "";  
	$connect = new PDO("mysql:host=$host; dbname=$database", $dbusername, $dbpassword);  
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
  	if(isset($_POST["login"]))  
  	{  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                echo"fill in all fields!";
           }  
           else  
           {  
                // bestaat de gebruiker?
                $user = getUser($_POST["username"]);
	              if($user != null) {
						    //controleer zijn wachtwoord
						        if (verifyPassword($_POST["password"], $user['password'])) 
                    {
                    			   $userrole = getRole($_POST["username"]);
                    			   if ($userrole != null){
                    			   $_SESSION["roles"] = $userrole;
							       $_SESSION["username"] = $_POST["username"];
			        }
						} 
          }	
       }
    }
 }

function getRole($username){
	$connect = openDatabaseConnection();
	$query = "SELECT roles FROM users WHERE username = '$username'";
    $statement = $connect->prepare($query);  
    $statement->execute();
    $userrole = $statement->fetchColumn();
    return $userrole;
}

function getUser($login_username) {
	$connect = openDatabaseConnection();
	$query = "SELECT * FROM users WHERE username = '$login_username'";
    $statement = $connect->prepare($query);  
    $statement->execute(  
         array(  
              'username'     =>     $_POST["username"]
              )
         );
    $user = $statement->fetch(PDO::FETCH_ASSOC);
	return $user;
}
function verifyPassword($login_password, $user_password) {
	if (password_verify($login_password, $user_password) ) {
		return true;
	}
	else{
	header("Location: login");
	return false;
	}
}

function checkIfUserIsLoggedIn(){
 if(isset($_SESSION["username"]))  
 {  
	echo"you are already logged in!";
  die();
 } 
 else
 {
 	echo("You are not logged in, please log in.");
 }
}