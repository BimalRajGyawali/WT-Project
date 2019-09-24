<!DOCTYPE html>

<?php

 session_start();

 ?>



<html>
<head>
	<title>Welcome</title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!-- Linking CSS file -->
	<link rel="stylesheet" href="style.index.css">
	<link rel="stylesheet" href="style_header.css">
	<link rel="stylesheet" href="style_footer.css">
	<link rel="stylesheet" href="style_home.css">
	<link rel="stylesheet" href="style_add.css">
	<link rel="stylesheet" href="style_view.css">
	<link rel="stylesheet" href="style_rcolumn.css">
	<!-- Linking JS file -->
	<script type="text/javascript" src="script.js"></script>
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


  <div id="column" class="column_left">


  </div>

  <div id="column" class="column_mid">

	<div id="info_add">

	<form class="info_add" method="post" action="../controller/SaveController.php">

		<div>
			<input id="text_box" type="text" name="roll" placeholder="ID" required="required">
		</div>

		<div>
			<input id="text_box" type="text" name="fname" placeholder="First Name" required="required" >
		</div>

		<div>
		<input id="text_box" type="text" name="lname" placeholder="Last Name" required="required" />
		</div>

		<div>
			<input id="text_box" type="text" name="marks" placeholder="Marks" required="required">
		</div>







		<div>
			<input type="submit" id="button"  value="ADD">
		</div>

    	</form>

      	</div>

        </div>



    <?php
     $result = isset($_SESSION["success"]);

   if($result)
    {
      echo "<script type='text/javascript'>
$(document).ready(function(){
$('#success').modal('show');
});
</script>";

unset($_SESSION['success']);
    }


    $result = isset($_SESSION['error']);

    if($result)
     {
       echo "<script type='text/javascript'>
 $(document).ready(function(){
 $('#error').modal('show');
 });
 </script>";

 unset($_SESSION['error']);
     }
?>



 <!-- The Modal For Alerting user already exists-->
<div class='modal fade' id='error'>
<div class='modal-dialog'>
  <div class='modal-content'>

    <!-- Modal Header -->
    <div class='modal-header'>
      <h4 class='modal-title'></h4>
      <button type='button' class='close' data-dismiss='modal'>&times;</button>
    </div>

    <!-- Modal body -->
    <div class='modal-body'>
      Student already exists.
    </div>

    <!-- Modal footer -->
    <div class='modal-footer'>
      <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
    </div>

  </div>
</div>
</div>





 <!-- The Modal For Sucess message-->
<div class='modal fade' id='success'>
<div class='modal-dialog'>
  <div class='modal-content'>

    <!-- Modal Header -->
    <div class='modal-header'>
      <h4 class='modal-title'></h4>
      <button type='button' class='close' data-dismiss='modal'>&times;</button>
    </div>

    <!-- Modal body -->
    <div class='modal-body'>
      Student added Successfully.
    </div>

    <!-- Modal footer -->
    <div class='modal-footer'>
      <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
    </div>

  </div>
</div>
</div>
















  <div id="column" class="column_right">

    	<div class="visitor">
  		Total Visitors
  		</div>
  		<div id="visitor_count"> 2
  		</div>

  		<div id="comming_soon">
  		New Features Comming Soon
  		</div>

  </div>


	<ul class="menu_footer">
	<div class="menu_container">
	<li id="left"><a id="facebook" href="https://facebook.com" target="_blank">Facebook</a></li>
	<li id="left"><a id="twitter" href="https://twitter.com" target="_blank">Twitter</a></li>
	<li id="left"><a id="github" href="https://github.com"  target="_blank">Github</a></li>
	</div>
	</ul>

</body>
</html>
