<?php

  require '/opt/lampp/htdocs/Project/service/StudentServiceImpl.php';
  require '/opt/lampp/htdocs/Project/model/Student.php';

  class DBConnection
  {
      public static function getConnection()
      {
          $connection = mysqli_connect("localhost","root","","projectdb");

          if($connection==null)
          {
            die("Conenction failed");
            exit;
          }

        return $connection;
      }

  }



/* testing save method */

  $s = new StudentServiceImpl();

  $s->save(new Student(3,"Shyam","Shah",34.5));


 ?>
