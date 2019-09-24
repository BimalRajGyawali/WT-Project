<?php

include_once '/opt/lampp/htdocs/Project/service/StudentServiceImpl.php';
session_start();

$service = new StudentServiceImpl();

$username = $_POST['username'];
$password = $_POST['password'];

if($service->login($username,$password))
{
   $_SESSION['activeuser'] = $username;
   header('Location : http://localhost/Project/controller/ReadController.php')
}

else {
  $_SESSION['login_error'] = 'Username and password not matched';
  header('Location : http://localhost/Project/index.php');

}














  ?>
