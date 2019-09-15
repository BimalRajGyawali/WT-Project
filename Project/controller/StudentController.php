<?php
include_once '/opt/lampp/htdocs/Project/service/StudentServiceImpl.php';
session_start();

$service = new StudentServiceImpl();

$students = $service->getStudents();

$_SESSION['students'] = $students;

header('Location:http://localhost/Project/view/table.php');




 ?>
