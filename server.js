const express=require('express');
const app = express();
app.set('view engine', 'pug');

app.get('/', (req,res) => {
	res.send('Hello World');
	res.render('explore');
});




const server = app.listen(8000, () => {
	console.log('Express running -> PORT ${server.address().port}');
});
