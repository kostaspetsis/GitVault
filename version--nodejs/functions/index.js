// https://www.youtube.com/watch?time_continue=17&v=LOeioOKUKI8
const functions = require('firebase-functions');

// // Create and Deploy Your First Cloud Functions
// // https://firebase.google.com/docs/functions/write-firebase-functions
//


const express=require('express');
const app = express();
app.set('views', './views')
app.set('view engine', 'pug');
var path = require ('path');
var joinedPath = path.join(__dirname + '/public');
console.log(joinedPath);
app.use(express.static(joinedPath,{
//app.use(express.static(__dirname+"../public",{
	index:false,
	immutable:true,
	cacheControl:true,
	maxAge:"30d"
}));

// var db = firebase.initializeApp({
// 	apiKey: 'AIzaSyDrjgnOgtKmQ1XfmW8RjmnSxda1685-Yik',//api key
// 	authDomain:'',
// 	databaseURL:'',
// 	projectId:'project-1085601843051',
// 	storageBucket:'',
// 	messaginSenderId:'1085601843051'
// });





app.get('/', (req,res) => {
	res.render('index');
	// res.send('HelloWorld');
});





app.get('/upload', (req,res) => {
	res.render('upload');
	// res.send('HelloWorld');
});


app.get('/profile', (req,res) => {
	console.log("Profile requested");
	res.render('profile');
	// res.send('HelloWorld');
});


app.get('/projects', (req,res) => {
	res.render('projects');
	// res.send('HelloWorld');
});


app.get('/guide', (req,res) => {
	res.render('guide');
	// res.send('HelloWorld');
});



exports.app = functions.https.onRequest(app);
