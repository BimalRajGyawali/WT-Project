<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<!-- Linking CSS file -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Linking JS file -->
	<script type="text/javascript" src="script.js"></script>
</head>
<body>

<ul class="menu_header">
	<div class="menu_container">
	<li id="left"><a class="info_home" href="#info_home">Home</a></li>
	<li id="left"><a class="info_add" href="#info_add">Add</a></li>
	<li id="left"><a class="info_view" href="#info_view">View</a></li>
	<li id="right"><a class="info_username" href="">Username</a></li>
	</div>
</ul>


  <div id="column" class="column_left">


  </div>

  <div id="column" class="column_mid">

	<div class="div" id="info_home">

	<div class="div_home">

		<p>
			<h1><b>Welcome to Student Management App (SMA)<b></h1>
		</p>

		<p>
			<h3>
				This software is designed and developed by Bimal , Sampanna .

				<p>
					ADD<br>
					In this section , you can store student record to the database .

				</p>

				<p>
					VIEW <br>
					In this section , you can retrieve students records present in the database.
					Data Entry can also be Updated/Deleted.
				</p>

				<p>
					Enter description
				</p>

				<p>
					Enter description
				</p>



				</p>

			</h3>
		</p>

	</div>

	</div>


	<div class="div" id="info_add">

	<form class="info_add" method="POST">

		<div>
			<input id="text_box" type="text" name="std_id" placeholder="ID" required="required">
		</div>

		<div>
			<input id="text_box" type="text" name="std_fname" placeholder="First Name" required="required" >
		</div>

		<div>
		<input id="text_box" type="text" name="std_lname" placeholder="Last Name" required="required" />
		</div>

		<div>
			<input id="text_box" type="text" name="std_marks" placeholder="Average Marks" required="required">
		</div>

		<div>
			<button id="button" onclick=" ">ADD</button>
		</div>

	</form>

	</div>


	<div class="div" id="info_view">



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
	</ul>>

</body>
</html>
