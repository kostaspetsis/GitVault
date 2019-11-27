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
		
		<link rel="stylesheet" type="text/css" media="screen" href="main.css" />	
		<script src="main.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="setActiveNavItem.js"></script>
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
		<!-- Navigation Bar -->
<nav class="navbar navbar-expand-md navbar-dark sticky-top">
	<!-- <a class="navbar-brand" href="index.html" style="color:rgb(47, 255, 203);">GitVault</a> -->
	<img src="Logo.png" alt="" width=100>
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div id="navb" class="navbar-collapse collapse hide">
		<ul id="navbar-ul" class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="index.html">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="explore.html">Explore</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="profile.html">Profile</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="projects.html">Projects</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="guide.html">Guide</a>
			</li>
		</ul>
	
		<ul class="nav navbar-nav ml-auto">
		<li class="nav-item">
			<!-- <a class="nav-link" href="#"><span class="fas fa-user"></span> Sign Up</a> -->
			<a class="login" onclick="document.getElementById('modal-wrapper').style.display='block'">Sign Up</a>
		</li>
		<li class="nav-item">
			<!-- <a class="nav-link" href="#"><span class="fas fa-sign-in-alt"></span> Login</a> -->
			<a class="login" onclick="document.getElementById('modal-wrapper').style.display='block'">Login</a>
		</li>
		</ul>
	</div>
</nav>
<!-- Navigation Bar -->
		<!-- Navigation Bar -->
		
		</div>
	


	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>
</html>