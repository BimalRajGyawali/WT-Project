
<!DOCTYPE html>
<?php

require '/opt/lampp/htdocs/Project/model/Student.php';

  session_start();

   $students = $_SESSION['students'];


 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
   <link rel="stylesheet" href="css/style.css">
  </head>
  <body >

  <?php



     if(count($students)>0)
     {
       echo "

         <table  width='400px' cellspacing='0'>

          <tr>
              <th>Roll No</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Marks</th>
              <th>Action</th>
          </tr>






       ";



       for ($i=0;$i<count($students);$i++) {

             $student = $students[$i];

             echo "

               <tr id='row$i'>
                   <td>".$student->getRoll()."</td>
                   <td>".$student->getFirstName()."</td>
                   <td>".$student->getLastName()."</td>
                   <td>".$student->getMarks()."</td>
                   <td><input type='button' value='Edit' onclick= 'edit($i)'/>
                   <input type='button' value='Delete' onclick='del($i)'></td>
               </tr>


 ";



       }

  echo "</table>";

     }



   ?>

<script type="text/javascript">

  function edit(rowno) {

    document.getElementById('edit-form').style.display = 'block';

    var form = document.forms['editForm'];

    var row = document.getElementById('row'+rowno);

    var roll = row.cells[0].innerHTML;
    var firstName = row.cells[1].innerHTML;
    var lastName = row.cells[2].innerHTML;
    var marks = row.cells[3].innerHTML;

    form.roll.value = roll;
    form.firstName.value = firstName;
    form.lastName.value = lastName;
    form.marks.value = marks;



  }

  function del(rowno) {

    document.getElementById('edit-form').style.display = 'none';

    var result = confirm("Do you want to delete");

    var row = document.getElementById('row'+rowno);
    var roll = row.cells[0].innerHTML;

    if(result)
    {
         window.location = "http://localhost/Project/controller/DeleteController.php?roll="+roll;
    }


  }

</script>


 <div id="edit-form">

   <form method="post" action="../controller/EditController.php" name='editForm'>

     <p><input type="text" name="roll" value="" readonly placeholder=""></p>
     <p><input type="text" name="firstName" value="" placeholder=""></p>
     <p><input type="text" name="lastName" value="" placeholder=""></p>
     <p><input type="text" name="marks" value="" placeholder=""></p>
     <p><input type="submit" value="Update" onsubmit="update()"></p>

   </form>



 </div>


  </body>
</html>
