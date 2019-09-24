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

    <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




   </script>

      <link rel="stylesheet" href="style.index.css">
      <link rel="stylesheet" href="style_header.css">
      <link rel="stylesheet" href="style_footer.css">
      <link rel="stylesheet" href="style_home.css">
      <link rel="stylesheet" href="style_add.css">
      <link rel="stylesheet" href="style_view.css">
      <link rel="stylesheet" href="style_rcolumn.css">



  </head>
  <body>

    <ul class="menu_header">
    	<div class="menu_container">
    	<li id="left"><a class="info_home" href="home.php">Home</a></li>
    	<li id="left"><a class="info_add" href="add.php">Add</a></li>
    	<li id="left"><a class="info_view" href="../controller/ReadController.php">View</a></li>
    	<li id="right"><a class="info_username" href="">Username</a></li>
    	</div>
    </ul>




    <div class="container">
    	<div class="row">


            <div class="col-md-12">
            <h4>Student Data</h4>
            <div class="table-responsive">

              <?php



                 if(count($students)>0)
                 {
                     echo "
                       <table id='mytable' class='table table-bordred table-striped'>

                       <thead>


                       <th>Roll No</th>
                       <th>First Name</th>
                       <th>Last Name</th>
                       <th>Marks</th>

                          <th>Edit</th>

                           <th>Delete</th>
                       </thead>

                       <tbody>
                       ";
              }


              for ($i=0;$i<count($students);$i++) {

                    $student = $students[$i];
                    echo "


                    <tr id='row$i'>
                        <td>".$student->getRoll()."</td>
                        <td>".$student->getFirstName()."</td>
                        <td>".$student->getLastName()."</td>
                        <td>".$student->getMarks()."</td>
        <td><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' onclick='edit($i)'>Edit&nbsp;&nbsp;</button></td>
        <td><button class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete' onclick='setId($i)'>Delete</button></td>
        </tr>";
      }




               ?>

             </tbody>
           </table>
 </div>
</div>
 </div>
 </div>



 <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
       <div class="modal-dialog">
            <div class="modal-content">

               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                  <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                </div>


            <form method='post' action='../controller/EditController.php'>

             <div class="modal-body">


                  <div class="form-group">
                    <input id="roll" name='roll' class="form-control " type="text" readonly>
                 </div>

                 <div class="form-group">
                   <input id="fname" name='firstName' class="form-control " type="text">
                 </div>


                 <div class="form-group">
                   <input id="lname" name='lastName' class="form-control " type="text">
                 </div>

                 <div class="form-group">
                   <input id="marks" name='marks'  class="form-control " type="text">
                 </div>

        </div>

           <div class="modal-footer ">
             <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;">Update</button>
           </div>

         </form>


        </div>
     <!-- /.modal-content -->
   </div>
       <!-- /.modal-dialog -->
     </div>



 <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
   <div class="modal-dialog">
 <div class="modal-content">
       <div class="modal-header">

     <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
   </div>
       <div class="modal-body">

    <div class="alert alert-danger"> Are you sure you want to delete this Record?</div>

   </div>
     <div class="modal-footer ">
     <button type="button" class="btn btn-success" onclick='del()' > Yes</button>
     <button type="button" class="btn btn-primary" data-dismiss="modal"> No</button>
   </div>
     </div>
 <!-- /.modal-content -->
</div>
   <!-- /.modal-dialog -->


         <script type="text/javascript">

               var id;

               function edit(rowno)
               {
                    var row = document.getElementById("row"+rowno);

                    var roll = row.cells[0].innerHTML;
                    var firstName = row.cells[1].innerHTML;
                    var lastName = row.cells[2].innerHTML;
                    var marks = row.cells[3].innerHTML;

                    document.getElementById('roll').value= roll;
                    document.getElementById('fname').value = firstName;
                    document.getElementById('lname').value = lastName;
                    document.getElementById('marks').value = marks;

               }


               function setId(rowno)
               {
                 var row = document.getElementById('row'+rowno);
                 id = row.cells[0].innerHTML;
              }

               function del()
               {
                  window.location = "http://localhost/Project/controller/DeleteController.php?roll="+id;
               }

         </script>




      </body>
    </html>
