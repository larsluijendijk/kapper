<?php
function createUserAction($username, $password, $is_admin) 
{
  $db = openDatabaseConnection();
  $sql = "INSERT INTO users(username, password, is_admin) VALUES (:username, :password, :is_admin)";
  $query = $db->prepare($sql);
  $query->execute(array(
    ':username' => $username,
    ':is_admin' => $is_admin,
    ':password' => $password
    ));

  $db = null;
}