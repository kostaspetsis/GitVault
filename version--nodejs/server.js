const express=require('express');
const app = express();
app.set('view engine', 'pug');
app.use(express.static(__dirname+"/public",{
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
});




const server = app.listen(8000, () => {
	console.log('Express running -> PORT ${server.address().port}');
});
