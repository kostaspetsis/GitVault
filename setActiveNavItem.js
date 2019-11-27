
// $(".navb .navbar-ul .nav-item").on("click", function(){
// 	var location = window.location.href;
// console.log(location);
// // remove active class from all
// //	$(".navb .navbar-ul .nav-item").removeClass('active');
// 	$(".nav-item a[href='"+location+"']").addClass('active');
// });

// jQuery(document).ready(function($){
// 	var location = window.location.pathname.split("/").pop();

// 	if(location==''){
// 		location='index.html';
// 	}
// console.log(location);
// 	var target = $('nav-item a[href=\"' + location + '\"]');
// 	console.log(target);
// 	console.log(target.selector);
// 	$(target.selector).addClass("active");
// 	target.addClass('active');
// });

// $(function(){
// 	var location = window.location.pathname.split("/").pop();

// 	if(location==''){
// 		location='index.html';
// 	}
// console.log(location);
// 	var target = $('nav-item a[href=\"' + location + '\"]');
	
// 	target.each(function(){
// 	console.log(target);
// 	console.log(target.selector);
// 	$(target.selector).addClass("active");
// 	target.addClass('active');
// });

// });

// $(function(){
// 	var current = location.pathname.split("/").pop();
// 	console.log(current);
//     $('#navb #navbar-ul .nav-item').each(function(){
		
// 		console.log("good");
//         // if the current path is like this link, make it active
//         if($(this).attr('href').indexOf(current) !== -1){
// 			$(this).addClass('active');
// 			console.log('activated');
//         }
//     });
// })


$(document).ready(function() {  
  console.log("Hi");
	function setActive(){
		var current = location.pathname.split("/").pop();
		console.log(current);
		if (!document.getElementsByClassName) {
			document.getElementsByClassName=function(cn) {
				var allT=document.getElementsByTagName('*'), allCN=[], i=0, a;
				while(a=allT[i++]) {
					a.className==cn ? allCN[allCN.length]=a : null;
				}
				console.log("defined a new getElementsByClassName");
				return allCN
			}
		}
		var elements = document.getElementsByClassName("navb");
		var i;
		console.log(elements.length);
for (i = 0; i < elements.length; i++) {
	console.log("loop");
  if (elements[i].href == current){
	  console.log("correct active");
  }
} 
	}
	
	setActive();
	var elements = document.getElementsByClassName("navb");

for (var i = 0; i < elements.length; i++) {
    elements[i].innerHTML = 'foo';
}
   });