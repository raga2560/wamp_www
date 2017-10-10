
// https://github.com/bitcoinjs/bitcoinjs-lib
// https://medium.com/@orweinberger/how-to-create-a-raw-transaction-using-bitcoinjs-lib-1347a502a3a#.hg8riagzu
// https://github.com/bitcoinjs/bitcoinjs-lib/issues/472
// https://test-insight.bitpay.com/tx/send

// https://www.reddit.com/r/Bitcoin/comments/2kkdeu/blockchaininfo_for_testnet/

// https://blog.bitpay.com/transactionbuilder/

/*
Error: mgRpfRy9rWHpyxCPS8o4VXJkdScaYiYFo7 has no matching Script at Object.toOutputScript (C:\wamp_www\angularjs\package\chapter6bitcoin\node_modules\bitcoinjs-lib\src\address.js:44:9) 

The scriptpubkey has to be provided. We are providing plain address.

http://www.soroushjp.com/2014/12/20/bitcoin-multisig-the-hard-way-understanding-raw-multisignature-bitcoin-transactions/

*/


// https://docs.omniref.com/js/npm/keybase-bitcoinjs-lib/1.0.2-1/symbols/module.exports.pubKeyOutput%20pubKeyInput

// 0100000001597a55cf7455fb3eab9977e5e7817b68444669d6feeb97e9726c6795509f3df7010000006b483045022100e068897728b0bb37710529162b930063f68db2680b42e84e78162f2ad8d80eb8022020eb6678c848fdc53735b5c53432870a8c24aa2787a7e285cbe73718be345eb7012103ac011c72b037906b348d11790ff9b25f27fe9f8e1d0dd4275f33197385ed46e4ffffffff010a0000000000000017a9147b34dc1bb6985d8bd42abbaf2e5e6cc50c3eac8f8700000000


/*

for (var a = 1; a < input_utxos.length; a++) {
    tx.addInput(input_utxos[a].tx, input_utxos[a].vout);
}

*/


var bitcoin = require('bitcoinjs-lib');
var request = require('request');



var bitstuff = {

postApi: function (api_endpoint, json_data, callback) {
    console.log(api_endpoint+': ', JSON.stringify(json_data))
    request.post({
        url: 'http://testnet.api.coloredcoins.org:80/v3/'+api_endpoint,
        headers: {'Content-Type': 'application/json'},
        form: json_data
    }, 
    function (error, response, body) {
        if (error) {
            return callback(error)
        }
        if (typeof body === 'string') {
            body = JSON.parse(body)
        }
        console.log('Status: ', response.statusCode)
        console.log('Body: ', JSON.stringify(body))
        return callback(null, body)
    })
},
getApi: function (api_endpoint, param, callback) {
    console.log('Get from:'+api_endpoint+'/'+param)
    request.get('http://testnet.api.coloredcoins.org:80/v3/'+api_endpoint+'/'+param, function (error, response, body) {
        if (error) {
            return callback(error)
        }
        if (typeof body === 'string') {
            body = JSON.parse(body)
        }
        console.log('Status:', response.statusCode)
        console.log('Body:', body)
        return callback(null, body)
    })
}

	
	

};

module.exports = bitstuff;