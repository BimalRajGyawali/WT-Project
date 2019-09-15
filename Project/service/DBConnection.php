<?php

  
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

 ?>
