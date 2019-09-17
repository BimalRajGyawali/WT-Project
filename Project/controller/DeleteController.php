<?php

  include_once '/opt/lampp/htdocs/Project/service/StudentServiceImpl.php';

  $roll = $_GET['roll'];

  $service = new StudentServiceImpl();

  $service->delete($roll);

  header('Location:http://localhost/Project/controller/ReadController.php');


 ?>
