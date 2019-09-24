<?php

class StudentServiceImpl implements StudentService
{
   private $connection;

     public function __construct()
     {

         $this->connection = DBConnection::getConnection();
     }

     public function login($username,$password)
     {

        $sql = "select * from user where username='$username' and password='$password'";

        $data = mysqli_query($this->connection,$sql);

        if(mysqli_num_rows($data)==1)
        {
           return true;
        }

        return false;
     }














 ?>
