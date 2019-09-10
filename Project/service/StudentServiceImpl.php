<?php
require '/opt/lampp/htdocs/Project/service/StudentService.php';

 class StudentServiceImpl implements StudentService
 {
    private $connection;

    public function __construct()
      {

          $this->connection = DBConnection::getConnection();
      }

      public function save($student)
      {
            $roll = $student->getRoll();
            $firstName = $student->getFirstName();
            $lastName = $student->getLastName();
            $marks = $student->getMarks();

            $sql = "insert into Student(roll,fname,lname,marks)
            values('$roll','$firstName','$lastName','$marks')";

            return mysqli_query($this->connection,$sql);
       }

}

?>
