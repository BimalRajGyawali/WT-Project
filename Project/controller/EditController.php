<?php
include_once '/opt/lampp/htdocs/Project/service/StudentServiceImpl.php';

 $roll = $_POST['roll'];
 $firstName = $_POST['firstName'];
 $lastName = $_POST['lastName'];
 $marks = $_POST['marks'];

  if($firstName=="" || $lastName=="" || $marks=="")
  {
    header('Location:http://localhost/Project/controller/ReadController.php');
     exit;
  }


  $student = new Student($roll,$firstName,$lastName,$marks);

  $service = new StudentServiceImpl();

  $service->update($student);

  header('Location:http://localhost/Project/controller/ReadController.php');









 ?>
