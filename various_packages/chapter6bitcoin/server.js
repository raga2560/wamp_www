// server.js (Express 4.0)
var express        = require('express');
var morgan         = require('morgan');
var bodyParser     = require('body-parser');
var methodOverride = require('method-override');
var app            = express();
bitcoin = require('bitcoinjs-lib');
var request = require('request');

 var bitstuff = require('./bitstuff.js');

	
app.use(express.static(__dirname + '/public')); 	// set the static files location /public/img will be /img for users
app.use(morgan('dev')); 					// log every request to the console
app.use(bodyParser()); 						// pull information from html in POST
app.use(methodOverride()); 					// simulate DELETE and PUT


var router = express.Router();

var notes = [
  {id: 1, label: 'First Note', author: 'Shyam'},
  {id: 2, label: 'Second Note', author: 'Brad'},
  {id: 3, label: 'Middle Note', author: 'Someone'},
  {id: 4, label: 'Last Note', author: 'Shyam'},
  {id: 5, label: 'Really the last Note', author: 'Shyam'}

];
var lastId = 6;

router.get('/note', function(req, res) {
  res.send(notes);
});

// key = bitcoin.ECKey.makeRandom();
// new_address = key.pub.getAddress(bitcoin.networks.testnet).toString();

router.get('/create', function(req, res) {
	
var key = bitcoin.ECPair.makeRandom({network:bitcoin.networks.testnet});
var wif = key.toWIF();
var address = key.getAddress().toString();
//var address1 = key.pub.getAddress(bitcoin.networks.testnet).toString();
console.log('new TESTNET address: ['+address+']');

console.log('key: ['+wif+']');


var  key = bitcoin.ECPair.makeRandom({network:bitcoin.networks.testnet});
 wif = key.toWIF();
 
  address = key.getAddress().toString();
console.log('new TESTNET address: ['+address+']');
console.log('key: ['+wif+']');




});

function signTx (unsignedTx, privateKey) {
    var tx = bitcoin.Transaction.fromHex(unsignedTx)
    var insLength = tx.ins.length
    for (var i = 0; i < insLength; i++) {
        tx.sign(i, privateKey)
    }
    return tx.toHex()
}

router.get('/send', function(req, res) {
var data = {"address":"mseVcR6Mx33drXZq2DRPB2pLoB5CwFJ8db","utxos":[
{"index":1,"txid":"5daf7257969cad3e39e9f2a223ada7c9650a285e7fb648e6b673cf602a02a997","blocktime":1481459020000,"blockheight":1058250,"value":100000,"used":false,"scriptPubKey":{"asm":"OP_DUP OP_HASH160 850e901ae14b7981214437c4a34ca3ce5f54aa62 OP_EQUALVERIFY OP_CHECKSIG","hex":"76a914850e901ae14b7981214437c4a34ca3ce5f54aa6288ac","reqSigs":1,"type":"pubkeyhash","addresses":["mseVcR6Mx33drXZq2DRPB2pLoB5CwFJ8db"]},"assets":[]},
{"index":1,"txid":"f73d9f5095676c72e997ebfed6694644687b81e7e57799ab3efb5574cf557a59","blocktime":1481460759000,"blockheight":1058263,"value":5000000000,"used":false,"scriptPubKey":{"asm":"OP_DUP OP_HASH160 850e901ae14b7981214437c4a34ca3ce5f54aa62 OP_EQUALVERIFY OP_CHECKSIG","hex":"76a914850e901ae14b7981214437c4a34ca3ce5f54aa6288ac","reqSigs":1,"type":"pubkeyhash","addresses":["mseVcR6Mx33drXZq2DRPB2pLoB5CwFJ8db"]},"assets":[]}]};



 var keyPair = bitcoin.ECPair.fromWIF('cUUNUdoyY6BdJNnoKPr8b7p59anKud7tacSxvGzvhoWdnCSLwtkN', bitcoin.networks.testnet)
	
    var tx = new bitcoin.TransactionBuilder(bitcoin.networks.testnet)

	for (var a = 1; a < data.utxos.length; a++) {
    tx.addInput(data.utxos[a].txid, data.utxos[a].index);

	}
	
	
	//026477115981fe981a6918a6297d9803c4dc04f328f22041bedff886bbc2962e01
	
	
/*
	
	var pubKeys = [
      'n3d18NyZfb5fWHVMTg9Jw6ChbKoRKn8AQt'
    ].map(function (hex) {
      return new Buffer(hex, 'hex')
    })
	
	
	
 var redeemScript = bitcoin.script.pubkey.output.encode(1, pubKeys) // 2 of 3
    var scriptPubKey = bitcoin.script.scriptHash.output.encode(bitcoin.crypto.hash160(redeemScript))
	
	var pubKeys = privKeys.map(function(x) { return x.pub })

var redeemScript = bitcoin.scripts.multisigOutput(2, pubKeys) // 2 of 3
var scriptPubKey = bitcoin.scripts.scriptHashOutput(redeemScript.getHash())

var multisigAddress = bitcoin.Address.fromOutputScript(scriptPubKey).toString()



	
	
*/
var pubKeys = [
      'n3d18NyZfb5fWHVMTg9Jw6ChbKoRKn8AQt'
    ].map(function (hex) {
      return new Buffer(hex, 'hex')
    })


var redeemScript = bitcoin.script.pubKeyOutput('n3d18NyZfb5fWHVMTg9Jw6ChbKoRKn8AQt') // 2 of 3
    var scriptPubKey = bitcoin.script.scriptHashOutput(bitcoin.crypto.hash160(redeemScript));
	
	
	
	// tx.addInput('5daf7257969cad3e39e9f2a223ada7c9650a285e7fb648e6b673cf602a02a997', 1);
	
	
	tx.addOutput(scriptPubKey, 5000000000)
    
	
	
	
     tx.sign(0, keyPair);
	
var signedTx =	tx.build().toHex();



	

 var mydata = {
	 hex: signedTx
	 
 };
 
 console.log(signedTx);

 //      url: 'http://btc.blockr.io/api/v1/tx/decode'
request.post({
  
        url: 'http://tbtc.blockr.io/api/v1/tx/push',
        headers: {'Content-Type': 'application/json'},
        form: mydata
    }, 
    function (error, response, body) {
        if (error) {
            return console.log(error);
        }
        if (typeof body === 'string') {
            body = JSON.parse(body)
        }
        console.log('Status: ', response.statusCode)
        console.log('Body: ', JSON.stringify(body))
        
    })
	


	
});

router.post('/note', function(req, res) {
  var note = {};// = req.body;
  note.id = lastId;
  note.label = req.body.label;
  note.author = req.body.author;
  lastId++;
  notes.push(note);
  res.send(note);
});


router.post('/note/:id/done', function(req, res) {
  var noteId = req.params.id;
  var note = null;
  for (var i = 0; i < notes.length; i++) {
    if (notes[i].id == req.params.id) {
      note = notes[i];
      break;
    }
  }
  note.label = 'Done - ' + note.label;
  res.send(notes);
});

router.get('/note/:id', function(req, res) {
  for (var i = 0; i < notes.length; i++) {
    if (notes[i].id == req.params.id) {
      res.send(notes[i]);
      break;
    }
  }
  res.send({msg: 'Note not found'}, 404);
});
router.post('/note/:id', function(req, res) {
  for (var i = 0; i < notes.length; i++) {
    if (notes[i].id == req.params.id) {
      notes[i] = req.body;
      notes[i].id = req.params.id;
      res.send(notes[i]);
      break;
    }
  }
  res.send({msg: 'Note not found'}, 404);
});

router.post('/login', function(req, res) {
  console.log('API LOGIN FOR ', req.body);
  res.send({msg: 'Login successful for ' + req.body.username});
});


app.use('/api', router);


	


app.listen(8000);
console.log('Open http://localhost:8000 to access the files now'); 			// shoutout to the user
