var Demo = require('./demo')

	module.exports = exports = function(app, db) {
	
	var demo = new Demo(db);
	
    

	
	app.post('/demo/insertplayer', demo.insertplayer);
	app.post('/demo/getplayer', demo.getplayer);
	app.post('/demo/gettrainByStationName', demo.gettrainByStationName);
	app.post('/demo/gettrainByStationCode', demo.gettrainByStationCode);
	
	
	app.get('/demo/getplayers', demo.getplayers);
	
}
