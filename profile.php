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
		<?php include 'nav.html'; ?>
		<!-- Navigation Bar -->
		
		
		</div>
	

	<div class="alignH">
		<img src="1.png" alt="">
		<div class="profile-info">
			<h1>My Profile</h1>
			<div style="width:700px;display:flex; flex-direction: row; justify-content: center; align-items: center;"><h1>Username</h1><input type="text" value="kostas" name="loginusername"></div>
			<div style="width:700px;" class="alignH"><h1>Password</h1><input type="password" value="Password" name="loginpassword">  </div>
			<div style="width:700px;" class="alignH"><h1>Email</h1><input type="text" value="kostas@email.com" name="">  </div>
			<a href="projects.html" style="font-size: 30px;">My Projects</a>
			<button class="btn btn-success"><img style="width:50px;" src="https://cdn2.iconfinder.com/data/icons/pointed-edge-web-navigation/130/tick-green-512.png"></img>Save Settings</button>
			<button class="btn btn-danger"><img style="width:40px;" src="http://img2.wikia.nocookie.net/__cb20100801061453/sims/images/thumb/a/aa/Red_x_cross_uncheck_bad.svg/500px-Red_x_cross_uncheck_bad.svg.png"></img>Cancel</button>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>
</html>