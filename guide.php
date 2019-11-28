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
	<!-- <script src="main.js"></script> -->
	<style>
		
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

<h1 style="color:red;font-size:30px;"><b>
		GitVault 

		-Κοινωνική πλατφόρμα git για προγραμματιστές. 
		
		 
		
		Εγχειρίδιο Χρήσης </b>
</h1>

<h3>
		Πέτσης Κωνσταντίνος 2168 
		Δημήτρης Ζιώγας 2214 
</h3>

	<div class="alignV">
		<h3>
				Το GitVault  αποτελεί μία online πλατφόρμα συλλογής,αποθήκευσης και διαμοιρασμού κώδικα και προγραμματιστικών project τα οποία θα είναι εύκολα  προσβάσιμα από όλους τους χρήστες.Με την λειτουργία explore  και μέσω μιας μπάρας αναζήτησης ο κάθε χρήστης  μπορεί να περιηγηθεί στα σχετικά με την αναζήτηση του project άλλων χρηστών.Τα αποτελέσματα της αναζήτησης  έχουν την μορφή  preview video τα οποία  ανεβάζει ο κάθε χρήστης μαζί με το project του δείχνοντας τα βασικά στοιχεία του κώδικα του.Μέσω των preview videos  η διαδικασια ευρέσης του κατάλληλου project γίνεται πιο απλή,εύκολη και γρήγορη.Μπορούμε να φανταστούμε το interface του explore σαν την ιστοσελίδα Υoutube όπου κάτω από  κάθε βιντεο  θα υπάρχουν τα αρχεία του project και τα σχόλια άλλων χρηστών κάνοντας έτσι το GitVault πιο social-oriented. 

 

				Η αναζήτηση  των project  μπορέι να γινεί και από μη εγγεγραμένους χρήστες αλλά  με την δημιουργία λογαριασμού ο χρήστης μπορεί να ανεβάζει και να τροποποιεί τα αρχεία σύμφωνα με τις λειτουργείες του Git ή να αλληλεπιδρά με τα άλλα projects και χρήστες γράφοντας κάποιο σχόλιο ή αφήνοντας ένα Like... ή και Dislike! 
		</h3>

		<h1>1. Δημιουργία λογαριασμού </h1>

		<p>Αρχικά κάνουμε sign up  βάζοντας ένα username , email και εναν κώδικο και πατάμε εγγραφή όπως  στο παρακάτω  gif. </p>
		<img src="gifs/Register.gif" alt="this slowpoke moves"  width=800/>
		
		<h1>2. Σύνδεση λογαριασμόυ </h1>

		<p>Άφου έχουμε κάνει εγγραφή  συνδεόμαστε στο λογαριασμό μας βάζοντας το email και τον κωδικό που συμπληρώσαμε πριν όπως στο παρακάτω gif. </p>
		<img src="gifs/Login.gif" alt="this slowpoke moves"  width=800/>
		

		<h1>3.Μεταφόρτωση αρχείων/Upload files(upload.html) </h1>
		<p>Για να μεταφορτώσουμε το project μας, έχουμε δύο τρόπους.Με Drag n Drop ή απλά κάνοντας κλικ στην περιοχή και επιλέγοντας το φάκελό μας από τον περιηγητή αρχείων που μας ανοίγεται, όπως στο παρακάτω βίντεο. </p>
		<h2><b>A)Drag’n’Drop </b></h2>
		<img src="gifs/UploadByDragNdrop.gif" alt="this slowpoke moves"  width=800/>

		<h2><b>B)Με περιήγηση </b></h2>
		<img src="gifs/UploadByClick.gif" alt="this slowpoke moves"  width=800/>
		
		
		<h1>4.Περιήγηση όλων των projects στην πλατφόρμα σαν το Youtube.(<a href="explore.html">explore.html</a>) </h1>

		<p>Αυτή είναι η αρχική μας σελίδα.Σε κάθε project, ο χρήστης πρέπει να ανεβάσει ένα βίντεο σε μορφή gif έτσι ώστε να φαίνεται πως τρέχει.Έτσι, όταν περιηγείται ένας χρήστης, βλέπει το βίντεο μαζί με τον τίτλο του project και μια μικρή περιγραφή. </p>
		<img src="gifs/explore.gif" alt="this slowpoke moves"  width=800/>
		
		
		<h1>5.Εάν ενδιαφέρεται για κάποιο project.(<a href="viewProject.html">viewProject.html</a>) </h1>

		<p>Εάν θέλει περισσότερες πληροφορίες, μπορεί να κάνει κλικ σε αυτό, και η σελίδα θα τον ανακατευθύνει στη σελίδα viewProject.html.Εκεί μπορεί να δει τη δομή του κώδικα σαν να περιηγείται σε φάκελο αρχείων.Επίσης, μπορεί να δει και σχόλια άλλων χρηστών και στο μέλλον περισσότερα παρόμοια projects στο πλάι. </p>
		<img src="gifs/viewProject.gif" alt="this slowpoke moves"  width=800/>
		
		
		<h1>6.Αλλαγή ρυθμίσεων(<a href="profile.html">profile.html</a>, <a href="projects.html">projects.html</a>) </h1>

		<p>Τέλος, εάν θέλει να αλλάξει κάποια ρύθμιση στο προφίλ του, παραδείγματος χάριν, το username ή το password, μπαίνει στη σελίδα profile.html ή να δεί τί projects εχει ανεβάσει και τί αποδοχή έχουν στους άλλους προγραμματιστές, μπαίνει στη σελίδα projects.html </p>
		<img src="gifs/Profile_edit_settings.gif" alt="this slowpoke moves"  width=800/>
		<img src="gifs/Projects.gif" alt="this slowpoke moves"  width=800/>
	</div>
		



	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>
</html>