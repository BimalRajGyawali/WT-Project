<?php

  class Student
  {
       private $roll;
       private $firstName;
       private $lastName;
       private $marks;

       public function __construct($roll,$firstName,$lastName,$marks)
       {
         $this->roll = $roll;
         $this->firstName = $firstName;
         $this->lastName = $lastName;
         $this->marks = $marks;
       }

       public function getRoll() { return $this->roll;}
       public function getFirstName(){ return $this->firstName; }
       public function getLastName(){ return $this->lastName; }
       public function getMarks(){ return $this->marks; }

       public function setRoll($roll) { $this-> roll = roll;}
       public function setFirstName($firstName) { $this->firstName = firstName;}
       public function setLastName($lastName){ $this->lastName = lastName; }
       public function setMarks($marks){ $this->marks = marks;}



  }


?>
