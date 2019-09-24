<?php
session_start();
include_once '/opt/lampp/htdocs/Project/service/StudentServiceImpl.php';

 $roll = $_POST['roll'];
 $firstName = $_POST['fname'];
 $lastName = $_POST['lname'];
 $marks = $_POST['marks'];

  $student = new Student($roll,$firstName,$lastName,$marks);

  $service = new StudentServiceImpl();

  if($service->save($student))
  {
      $_SESSION['success'] = "Added Successfully";
       header('Location:http://localhost/Project/view/add.php');
  }

  else {
    $_SESSION['error'] = "RollNo $roll already exits";
     header('Location:http://localhost/Project/view/add.php');

  }








 ?>
