<?php

require '/opt/lampp/htdocs/Project/model/Student.php';

  session_start();

   $students = $_SESSION['students'];

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php



     if(count($students)>0)
     {
       echo "

         <table border='1' cellspacing='0'>

          <tr>
              <th>Roll No</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Marks</th>
          </tr>






       ";



       foreach ($students as $student) {

             echo "

               <tr>
                   <td>".$student->getRoll()."</td>
                   <td>".$student->getFirstName()."</td>
                   <td>".$student->getLastName()."</td>
                   <td>".$student->getMarks()."</td>
               </tr>


 ";



       }

  echo "</table>";

     }






   ?>





  </body>
</html>
