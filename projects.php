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
			background-color:rgb(255, 246, 152);
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
				word-wrap: break-word; 
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

			.comment-section{
				background-color:plum;
				padding-top:50px;
				padding-left:10px;
				border:2px solid rgb(212, 101, 212);
			}
			.user-name{
				color:black;
				padding:0;
				margin-right: 5px;
			}
			.user-comment{
				margin-left:40px;
				color:rgba(49, 49, 49, 0.8);
			}
			.comment-item:nth-child(even){
				border:5px solid rgb(124, 124, 124);
				border-radius:20px;
				padding:5px;
			}
			.comment-item:nth-child(odd){
				border:5px solid rgb(20, 20, 20);
				border-radius:20px;
				padding:5px;
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
		
	</div>


	<h1 class="grid-item">My Projects</h1>

	<div class="grid-container">
		<a href="viewProject.html">
			<div class="alignHorizontally" style="justify-content: center;">
				<div class="grid-item">
					<img src="newgif.gif" alt="this slowpoke moves"  width=250/>
					<div class="grid-info">
						<img  class="avatar" src="1.png" style="width:30px;height:30px;" alt="Avatar">
						<p class="project_title alignHorizontally">Cpp Raytracer</p>
						<p class="project_description wrapText">Ray tracer implemented in cpp.</p>
					</div>
				</div>
				<p style="font-size:40px;color:rgb(31, 31, 31);">	This is a project done in class ECE343 at the University of Thessaly.It had a deadline of 17 November 2019 and it was finished by a team of 2.The code consists of three folders.'src', 'lib', 'include'.It is a big project with thousands of lines.We are trying to add some 3d models and make it load them at runtime.To run it, you need a linux environment with OpenGL and GLUT installed.To compile it, you need g++14.</p>
			</div>
		</a>
	</div>
	<img  class="avatar" src="1.png" style="width:400px;height:400px;position:absolute;left:1400px;top:200px;" alt="Avatar">


	<div class="alignH">
		<div class="alignV">
			<button class="btn btn-success" style="border:5px solid green;">Like</button>
			<p>Like:15</p>
		</div>
		<div class="alignV">
			<button class="btn btn-danger" style="border:5px solid red;">Dislike</button>
			<p>Dislike:2</p>
		</div>
	</div>
	
	<div class="alignV1 comment-section">
		<h2>Σχόλια χρηστών</h2>
		
		<div class="comment-item">
			<div class="alignH">
				<img class="avatar" src="Profile1.jpeg" style="width:30px;height:30px;" alt="Avatar">
				<p class="user-name">Χρήστης 1</p>
			</div>
			<p class="user-comment">Great project.Can i contribute?</p>
		</div>

		<div class="comment-item">
			<div class="alignH">
				<img class="avatar" src="Profile1.jpeg" style="width:30px;height:30px;" alt="Avatar">
				<p class="user-name">Χρήστης 2</p>
			</div>
			<p class="user-comment">Where is the code?</p>
		</div>

		<div class="comment-item">
			<div class="alignH">
				<img class="avatar" src="1.png" style="width:30px;height:30px;" alt="Avatar">
				<p class="user-name">Χρήστης 3</p>
			</div>
			<p class="user-comment">I Like it!!!</p>
		</div>

		<div class="comment-item">
			<div class="alignH">
				<img class="avatar" src="Profile2.png" style="width:30px;height:30px;" alt="Avatar">
				<p class="user-name">Χρήστης 3</p>
			</div>
			<p class="user-comment">This is a basic project.:(</p>
		</div>

	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>
</html>