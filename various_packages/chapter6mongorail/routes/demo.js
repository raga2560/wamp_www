
var railway = require('railway-api');
railway.setApikey('wxj9q56d');



var SportsDAO = require('../sports').SportsDAO;

  
 /* The SessionHandler must be constructed with a connected db */
function DemoHandler (db) {
    "use strict";

    var sports = new SportsDAO(db);
   
	
	
	this.trainBetweenStations = function(req, res) {
		var source = req.body.source;
		var destination = req.body.destination;
	railway.trainBetweenStations(source, destination, function (err, res1) {
		
		return res.json(res1);
		
	});
	
	}
	
	
	
	this.gettrainByStationCode = function(req, res) {
	
	var stationcode = req.body.stationcode;
	
	railway.stationName(stationcode, function (err, res1) {
		if(err) {
			console.log(err);
			res.json(err);
		}
		else {
			//res = res1;
			console.log(res1);
		 res.write(res1);	
		 res.end();
		}
		
	});

	}
	
	
	this.gettrainByStationName = function(req, res) {
	
	var stationname = req.body.stationname;
	
	railway.stationCode(stationname, function (err, res1) {
		if(err) {
			console.log(err);
			res.json(err);
		}
		else {
			//res = res1;
			console.log(res1);
		 res.write(res1);	
		 res.end();
		}
		
	});

	}
	
	this.insertplayer = function(req, res) {
        "use strict";
		
		var data = req.body;
		
		var player = {
			name: data.name,
			game: data.game,
			age :data.age
		};
		
		sports.insertplayer(player, function(err, record) {
		
		//console.log(record);
		if(err) {
			
				return res.json(err);
			
		}
		
		return res.json(record);
		});
		

	}
	
	this.getplayer = function(req, res) {
        "use strict";
		
		var data = req.body;
		
		var player = {
			name: data.player
			
		};
		
		sports.getplayer(player, function(err, record) {
		
		//console.log(record);
		if(err) {
			
				return res.json(err);
			
		}
		
		return res.json(record);
		});
		

	}
	
	this.getplayers = function(req, res) {
        "use strict";
		
		
		
		sports.getplayers(function(err, records) {
		
		//console.log(record);
		if(err) {
			
				return res.json(err);
			
		}
		
		return res.json(records);
		});
		

	}
	
	
	
  
	
}



module.exports = DemoHandler;
