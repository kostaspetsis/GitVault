jQuery(document).ready(function($){
	var path = window.location.pathname.split("/").pop();
	if(path==''){
		path="index.html";
	}
	console.log(path);
	// var target = $('nav-item a[href="'+path+'"]');
	var elements = document.getElementsByClassName("nav-link");
	console.log(elements.length);
	for (let i = 0; i < elements.length; i++) {
		var found = elements[i].getAttribute('href');
		var target = elements[i].parentNode.classList;
		target.remove('active');
		if(found == path){
			target.add('active');
			console.log("adasda");
		}else if(path == "index.html" && found == "explore.html"){
			target.add('active');
			console.log("adasda");
		}
		console.log(elements[i].getAttribute('href'));
	}
});
