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

	<style>
	#projectStructure{
		list-style: none;
		margin-left: 30px;
	}
	.structureBlock{
		border:1px solid rgb(179, 179, 179);	
	}
	#projectStructure >div{
		margin:30px;
	}
	.projectInfo{
		margin:30px;
		background-image:linear-gradient(rgb(0, 32, 92),rgb(129, 133, 189));
		/* background-color: aqua; */
	}
	.alignHorizontally{
		justify-content: center;
		align-items: center;
	}
	.projectName{
		color:white;
	}
	</style>
	
</head>
<body>



	<!-- Header, icon -->
	<div class="containerHead" align="center">
		<?php include 'nav.html'; ?>
	</div>
	
	<div class="projectInfo">
		<img  class="avatar alignHorizontally" src="Profile1.jpeg" style="width:50px;height:50px;" alt="Avatar">
		<h1 class="alignHorizontally projectName">Cpp Raytracer</h1>
	</div>
	<ul id="projectStructure">
		
		<li class="structureBlock">
			<div class="alignHorizontally">
				<img src="folder.png" alt="" width=32>
				<a href="#src">src</a>
			</div>
		</li>
		<li class="structureBlock">
			<div class="alignHorizontally">
				<img src="folder.png" alt="" width=32>
				<a href="#include">include</a>
			</div>
		</li>
		<li class="structureBlock">
			<div class="alignHorizontally">
				<img src="folder.png" alt="" width=32>
				<a href="#lib">lib</a>
			</div>
		</li>
	</ul>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>
</html>