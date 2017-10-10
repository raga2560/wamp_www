// server.js (Express 4.0)
bitcoin = require('bitcoinjs-lib');
	

	// var address = key.getAddress().toString();
	var keyPair = bitcoin.ECPair.fromWIF('cQqjeq2rxqwnqwMewJhkNtJDixtX8ctA4bYoWHdxY4xRPVvAEjmk', bitcoin.networks.testnet)
var kpAddress = keyPair.getAddress().toString();

console.log(kpAddress);
var redeemScript = bitcoin.script.pubKeyOutput('n3d18NyZfb5fWHVMTg9Jw6ChbKoRKn8AQt') // 2 of 3
    var scriptPubKey = bitcoin.script.scriptHashOutput(bitcoin.crypto.hash160(redeemScript));

console.log(redeemScript)	;
console.log(scriptPubKey);
	
	
