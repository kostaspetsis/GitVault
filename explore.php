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
		<!-- <script src="main.js"></script> -->
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		
		<style>
		video {
			width: 100%;
			float: left;
			padding:25px;

		  }
		  .grid-container {
			display: grid;
			grid-gap: 10px;
			grid-template-columns: auto auto auto;
			/* background-color: #2196F3; */
			padding: 10px;
			}

			.grid-item {
				background-color: rgba(255, 255, 255, 0.8);
				
				/* border: 1px solid rgba(0, 0, 0, 0.8); */
				padding: 20px;
				font-size: 30px;
				/* text-align: center; */
				/* display: inline-flex; */
				align-items: center;
			}
			.grid-info{
				justify-content: center;
			}
			.project_title{
				color:black;
				font-size: 20px;
			}
			.project_description{
				color:grey;
				font-size:20px;
				height:auto;
				/* border:2px solid red; */
			}
		</style>
		
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
				<!-- <h1>Upload your code to GitVault now!</h1>
				<div class="containerBody" style="width:35%;">	
					<p class="wrapText"><span>Using our vault, it helps us retreive all the useful info that our bleeding edge technology will use to solve many problems in the IT industry</span></p>
				</div> -->
			</div>
			
			<div class="grid-container">
				<!-- <div class="grid-item">
					<video autoplay loop muted>
						<source src="https://www.youtube.com/watch?v=HdghNESbPOk" type="video/mp4">
					</video>
					
				</div> -->
				<a href="viewProject.html">
					<div class="grid-item">
						<img src="newgif.gif" alt="this slowpoke moves"  width=250/>
						<div class="grid-info">
							<img  class="avatar" src="1.png" style="width:30px;height:30px;" alt="Avatar">
							<p class="project_title alignHorizontally">Cpp Raytracer</p>
							<p class="project_description">Ray tracer implemented in cpp</p>
						</div>
					</div>
				</a>
				<div class="grid-item">
						<img src="newgif.gif" alt="this slowpoke moves"  width=250/>
						<div class="grid-info">
							<img  class="avatar alignHorizontally" src="Profile2.png" style="width:30px;height:30px;" alt="Avatar">
							<p class="project_title alignHorizontally">My Website code</p>
							<p class="project_description">Repo of my code website</p>
						</div>
				</div>
				<div class="grid-item">
						<img src="newgif.gif" alt="this slowpoke moves"  width=250/>
						<div class="grid-info">
							<img  class="avatar alignHorizontally" src="Profile1.jpeg" style="width:30px;height:30px;" alt="Avatar">
							<p class="project_title alignHorizontally">Html components</p>
							<p class="project_description">Html components for the web</p>
						</div>
				</div>
				<div class="grid-item">
						<img src="newgif.gif" alt="this slowpoke moves"  width=250/>
						<div class="grid-info">
							<img  class="avatar alignHorizontally" src="Profile1.jpeg" style="width:30px;height:30px;" alt="Avatar">
							<p class="project_title alignHorizontally">My Personal Git</p>
							<p class="project_description">Online Space for my university projects</p>
						</div>
				</div>
				<div class="grid-item">
						<img src="newgif.gif" alt="this slowpoke moves"  width=250/>
				</div>
				<div class="grid-item">
						<img src="newgif.gif" alt="this slowpoke moves"  width=250/>
				</div>
				<div class="grid-item">
						<img src="newgif.gif" alt="this slowpoke moves"  width=250/>
				</div>
				<div class="grid-item">
						<img src="newgif.gif" alt="this slowpoke moves"  width=250/>
				</div>

				<div class="grid-item">
						<video autoplay loop muted>
							<source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
						</video>
					</div>
				<div class="grid-item">
						<video autoplay loop muted>
							<source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
						</video>
					</div>
				<div class="grid-item">
						<video autoplay loop muted>
							<source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
						</video>
				</div>
			</div>
			
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
		</body>
</html>