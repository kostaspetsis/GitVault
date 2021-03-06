<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GitVault</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	
	
	<script src="setActiveNavItem.js"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />	
	<script src="main.js"></script>
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

	
	
</head>
<body>



	<!-- Header, icon -->
	<div class="containerHead" align="center">
	
			<!-- Navigation Bar -->
			<!-- <div id="nav-placeholder"></div>
			<script>
					$.get("nav.html", function(data){
					$("#nav-placeholder").replaceWith(data);
			});
			</script> -->
			<?php include 'nav.html'; ?>
		<!-- Navigation Bar -->
		
		<img src="Logo.png" alt="" width=400>
		<h1>Upload your code to GitVault now!</h1>
		<div class="containerBody" style="width:35%;">	
			<p class="wrapText"><span>Using our vault, it helps us retreive all the useful info that our bleeding edge technology will use to solve many problems in the IT industry</span></p>
		</div>
	</div>


	

	<!-- Drag n Drop Area -->
	<div class="containerBody verticallyCenter dropArea" id="onClickFileManager" align="center" ondrop="drop(event)" ondragover="allowDrop(event)">	
		<p><span>Drag and drop here the folder containing the source code of your project</span></p>
		
		<!-- This is the "Browse button.No file selected" -->
		<!-- Make it hidden.When user clicks the dropArea, jQuery clicks the Browse and no Browse button needs to show -->
		<input type="file" id="theFileInput"  onchange="loadFileAsText(this);" style="display:none;" />
	</div>
	<!-- Drag n Drop Area -->



	<a draggable="true" ondragstart="drag(event)" width="336" height="69">Drag me</a>
	<div class="code-section">
		<p id="code"></p>
	</div>
	


	<!-- Login Signup Form -->

		
	<div id="modal-wrapper" class="modal">
		
		<form class="modal-content animate" action="/action_page.php">
			
		<div class="imgcontainer">
			<span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
			<img src="1.png" alt="Avatar" class="avatar">
			<h1 style="text-align:center">Modal Popup Box</h1>
		</div>
	
		<div class="container">
			<input type="text" placeholder="Enter Username" name="uname">
			<input type="password" placeholder="Enter Password" name="psw">        
			<!-- <button onclick="window.location.href='explore.html';">Login</button> -->
			<!-- <input class="loginBtn" type="button" onclick="location.href='explore.html';" value="Login" /> -->
			<a href="/" class="btn btn-success loginBtn">Login</a>
			<!-- <input class="verticallyCenter" type="checkbox" style="margin:26px 30px;"> Remember me      
			<a class="verticallyCenter" href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a> -->
		</div>
		
		</form>
		
	</div>
	<!-- Login Signup Form -->
	

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>
</html>