<?php
include_once '/opt/lampp/htdocs/Project/service/StudentService.php';
include_once '/opt/lampp/htdocs/Project/service/DBConnection.php';
include_once '/opt/lampp/htdocs/Project/model/Student.php';

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

       public function getStudents()
       {
           $students = array();

           $sql = "select * from Student";

           $data = mysqli_query($this->connection,$sql);

           while($row = mysqli_fetch_assoc($data))
           {
              $roll =  $row['roll'];
              $firstName =  $row['fname'];
              $lastName = $row['lname'];
              $marks = $row['marks'];

              $student = new Student($roll,$firstName,$lastName,$marks);

              $students[] = $student;


           }

           return $students;


       }
}

?>
