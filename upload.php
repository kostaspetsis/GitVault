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
	
	<!-- <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> -->

	<script src="upload.js"></script>
	<script src="main.js"></script>
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
		
		<img src="Logo.png" alt="" width=400>
		<h1>Upload your code to GitVault now!</h1>
		<div class="containerBody" style="width:35%;">	
			<p class="wrapText"><span>Using our vault, it helps us retreive all the useful info that our bleeding edge technology will use to solve many problems in the IT industry</span></p>
		</div>
	</div>


		<style>
			.modal{
				z-index:  1000000;
				position:fixed;
				top:0;
				left:0;
			}
			.modal-backdrop.in {z-index: 1020!important;}
			/* .modal { background: rgba(255, 255, 255, 0.8); min-height:1000000px; } */
		</style>
		<div class="modal fade" id="pleaseWaitDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1>Proccess</h1>
					</div>
					<div class="modal-body">
					<div class="progress">
						<div id="progressBarValue" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
						<span class="sr-only">40% Complete (success)</span>
						</div>
					</div>
					</div>
				</div>
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
	


	

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>
</html>