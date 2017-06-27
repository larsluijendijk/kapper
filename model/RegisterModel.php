<?php
function createUserAction($username, $password, $email, $address, $postalcode, $city, $phonenumber, $is_admin) 
{
  $db = openDatabaseConnection();
  $sql = "INSERT INTO users(username, password, email, address, postalcode, city, phonenumber, is_admin) VALUES (:username, :password, :email, :address, :postalcode, :city, :phonenumber, :is_admin)";
  $query = $db->prepare($sql);
  $query->execute(array(
    ':username' => $username,
    ':password' => $password,
    ':email' => $email,
    ':address' => $address,
    ':postalcode' => $postalcode,
    ':city' => $city,
    ':phonenumber' => $phonenumber,
    ':is_admin' => $is_admin
    ));

  $db = null;
}