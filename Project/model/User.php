<?php

/**
 *
 */
class User
{

   private $username;
   private $password;
   private $firstName;
   private $lastName;

  public function __construct($username,$password,$firstName,$lastName)
  {
     $this->username = $username;
     $this->password = $password;
     $this->firstName = $firstName;
     $this->lastName = $lastName;
  }

  public function getUsername() { return $this->username; }
  public function getPassword() { return $this->password; }
  public function getFirstName() { return $this->firstName; }
  public function getLastName() {  return $this->lastName; }



}
















 ?>
