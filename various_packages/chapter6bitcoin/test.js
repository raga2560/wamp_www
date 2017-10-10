http://testnet.api.coloredcoins.org/v3/addressinfo/mmiXKkW8ehGSZygF1fuA4wZdtEWzDsz7Sh

{"address":"mseVcR6Mx33drXZq2DRPB2pLoB5CwFJ8db","utxos":[{"index":1,"txid":"5daf7257969cad3e39e9f2a223ada7c9650a285e7fb648e6b673cf602a02a997","blocktime":1481459020000,"blockheight":1058250,"value":100000,"used":false,"scriptPubKey":{"asm":"OP_DUP OP_HASH160 850e901ae14b7981214437c4a34ca3ce5f54aa62 OP_EQUALVERIFY OP_CHECKSIG","hex":"76a914850e901ae14b7981214437c4a34ca3ce5f54aa6288ac","reqSigs":1,"type":"pubkeyhash","addresses":["mseVcR6Mx33drXZq2DRPB2pLoB5CwFJ8db"]},"assets":[]},
{"index":1,"txid":"f73d9f5095676c72e997ebfed6694644687b81e7e57799ab3efb5574cf557a59","blocktime":1481460759000,"blockheight":1058263,"value":5000000000,"used":false,"scriptPubKey":{"asm":"OP_DUP OP_HASH160 850e901ae14b7981214437c4a34ca3ce5f54aa62 OP_EQUALVERIFY OP_CHECKSIG","hex":"76a914850e901ae14b7981214437c4a34ca3ce5f54aa6288ac","reqSigs":1,"type":"pubkeyhash","addresses":["mseVcR6Mx33drXZq2DRPB2pLoB5CwFJ8db"]},"assets":[]}]}




http://tbtc.blockr.io/api/v1/address/info/mmiXKkW8ehGSZygF1fuA4wZdtEWzDsz7Sh

{"status":"success","data":{"address":"mmiXKkW8ehGSZygF1fuA4wZdtEWzDsz7Sh","is_unknown":false,"balance":51.71817062,"balance_multisig":0,"totalreceived":51.71817062,"nb_txs":3,
"first_tx":{"time_utc":"2016-12-10T17:57:38Z","tx":"dce751fcfcd65472d46f6f7981a9a5f62af80cf4ac50f0fa7c9cf01f16a8cfc3", "block_nb":"1057770","value":50,"confirmations":73},
"last_tx":{"time_utc":"2016-12-10T18:08:20Z", "tx":"63a7c8c643a124cb600391b5bd8cf5c859945dec23c065b7845a76c43fb49c8c","block_nb":"1057775","value":0.001,"confirmations":68},
"is_valid":true},"code":200,"message":""}

http://tbtc.blockr.io/api/v1/address/txs/mmiXKkW8ehGSZygF1fuA4wZdtEWzDsz7Sh

{"status":"success","data":{"address":"mmiXKkW8ehGSZygF1fuA4wZdtEWzDsz7Sh","limit_txs":200,"nb_txs":3,"nb_txs_displayed":3,"txs":[{"tx":"63a7c8c643a124cb600391b5bd8cf5c859945dec23c065b7845a76c43fb49c8c","time_utc":"2016-12-10T18:08:20Z","confirmations":70,"amount":0.001,"amount_multisig":0},{"tx":"b5d0750c50a11fa242f01321828a9485319a701c9b0554b2ec3cadd51c921f10","time_utc":"2016-12-10T18:05:38Z","confirmations":72,"amount":1.71717062,"amount_multisig":0},{"tx":"dce751fcfcd65472d46f6f7981a9a5f62af80cf4ac50f0fa7c9cf01f16a8cfc3","time_utc":"2016-12-10T17:57:38Z","confirmations":75,"amount":50,"amount_multisig":0}]},"code":200,"message":""}


http://tbtc.blockr.io/api/v1/address/unspent/mmiXKkW8ehGSZygF1fuA4wZdtEWzDsz7Sh
{"status":"success","data":{"address":"mmiXKkW8ehGSZygF1fuA4wZdtEWzDsz7Sh","unspent":[{"tx":"63a7c8c643a124cb600391b5bd8cf5c859945dec23c065b7845a76c43fb49c8c","amount":"0.00100000","n":1,"confirmations":72,"script":"76a9144400e6d6e5d29fb7a56880e4876ab31f3f3d46cf88ac"},{"tx":"b5d0750c50a11fa242f01321828a9485319a701c9b0554b2ec3cadd51c921f10","amount":"1.71717062","n":1,"confirmations":74,"script":"76a9144400e6d6e5d29fb7a56880e4876ab31f3f3d46cf88ac"},{"tx":"dce751fcfcd65472d46f6f7981a9a5f62af80cf4ac50f0fa7c9cf01f16a8cfc3","amount":"50.00000000","n":0,"confirmations":77,"script":"76a9144400e6d6e5d29fb7a56880e4876ab31f3f3d46cf88ac"}]},"code":200,"message":""}


http://tbtc.blockr.io/api/v1/tx/info/dce751fcfcd65472d46f6f7981a9a5f62af80cf4ac50f0fa7c9cf01f16a8cfc3,b5d0750c50a11fa242f01321828a9485319a701c9b0554b2ec3cadd51c921f10

{"status":"success","data":[{"tx":"dce751fcfcd65472d46f6f7981a9a5f62af80cf4ac50f0fa7c9cf01f16a8cfc3","block":1057770,"confirmations":104,"time_utc":"2016-12-10T17:57:38Z","is_coinbased":0,"trade":{"vins":[{"address":"mfcxRkP266h1fHqHPe9MqLYZm857GoJNHu","is_nonstandard":false,"amount":-149.99829028,"n":1,"type":0,"vout_tx":"eac1406b94c1cbf15f29657ab723decef052010db02bdba5bc466801c8ebdcb7"}],"vouts":[{"address":"mmiXKkW8ehGSZygF1fuA4wZdtEWzDsz7Sh","is_nonstandard":false,"amount":50,"n":0,"type":1,"is_spent":0},{"address":"mn8m6a5zDBYey1tLCNwVh72NBP6AuaNT6y","is_nonstandard":false,"amount":99.99824528,"n":1,"type":1,"is_spent":1}]},

"vins":[{"address":"mfcxRkP266h1fHqHPe9MqLYZm857GoJNHu","is_nonstandard":false,"amount":"-149.99829028","n":1,"type":0,"vout_tx":"eac1406b94c1cbf15f29657ab723decef052010db02bdba5bc466801c8ebdcb7"}],"vouts":[{"address":"mmiXKkW8ehGSZygF1fuA4wZdtEWzDsz7Sh","is_nonstandard":false,"amount":"50.00000000","n":0,"type":1,"is_spent":0,"extras":{"asm":"OP_DUP OP_HASH160 4400e6d6e5d29fb7a56880e4876ab31f3f3d46cf OP_EQUALVERIFY OP_CHECKSIG","script":"76a9144400e6d6e5d29fb7a56880e4876ab31f3f3d46cf88ac","reqSigs":1,"type":"pubkeyhash"}},{"address":"mn8m6a5zDBYey1tLCNwVh72NBP6AuaNT6y","is_nonstandard":false,"amount":"99.99824528","n":1,"type":1,"is_spent":1,"extras":{"asm":"OP_DUP OP_HASH160 489661b8c01d39dc12c9fd9b496a30d39bc7691b OP_EQUALVERIFY OP_CHECKSIG","script":"76a914489661b8c01d39dc12c9fd9b496a30d39bc7691b88ac","reqSigs":1,"type":"pubkeyhash"}}],"fee":"0.00004500","days_destroyed":"6.25","is_unconfirmed":false,"extras":null},{"tx":"b5d0750c50a11fa242f01321828a9485319a701c9b0554b2ec3cadd51c921f10","block":1057773,"confirmations":101,"time_utc":"2016-12-10T18:05:38Z","is_coinbased":0,"trade":{"vins":[{"address":"mom5VfhV1Kmw1pdE6enQpq2xQ9h3y5Dhsp","is_nonstandard":false,"amount":-4317.37526644,"n":1,"type":0,"vout_tx":"135ddfc50cf7a3991042e02e2e043fbea2782295c81b16216a3a1614881e14d2"}],"vouts":[{"address":"mvZYK6CHpnvypf3A6wSP1KRYdgGVw8jyLf","is_nonstandard":false,"amount":4315.65798217,"n":0,"type":1,"is_spent":1},{"address":"mmiXKkW8ehGSZygF1fuA4wZdtEWzDsz7Sh","is_nonstandard":false,"amount":1.71717062,"n":1,"type":1,"is_spent":0}]},"vins":[{"address":"mom5VfhV1Kmw1pdE6enQpq2xQ9h3y5Dhsp","is_nonstandard":false,"amount":"-4317.37526644","n":1,"type":0,"vout_tx":"135ddfc50cf7a3991042e02e2e043fbea2782295c81b16216a3a1614881e14d2"}],"vouts":[{"address":"mvZYK6CHpnvypf3A6wSP1KRYdgGVw8jyLf","is_nonstandard":false,"amount":"4315.65798217","n":0,"type":1,"is_spent":1,"extras":{"asm":"OP_DUP OP_HASH160 a5071d88aa97333e2ced46c01ee362595970cf3e OP_EQUALVERIFY OP_CHECKSIG","script":"76a914a5071d88aa97333e2ced46c01ee362595970cf3e88ac","reqSigs":1,"type":"pubkeyhash"}},{"address":"mmiXKkW8ehGSZygF1fuA4wZdtEWzDsz7Sh","is_nonstandard":false,"amount":"1.71717062","n":1,"type":1,"is_spent":0,"extras":{"asm":"OP_DUP OP_HASH160 4400e6d6e5d29fb7a56880e4876ab31f3f3d46cf OP_EQUALVERIFY OP_CHECKSIG","script":"76a9144400e6d6e5d29fb7a56880e4876ab31f3f3d46cf88ac","reqSigs":1,"type":"pubkeyhash"}}],"fee":"0.00011365","days_destroyed":"539.67","is_unconfirmed":false,"extras":null}],"code":200,"message":""}

https://test-insight.bitpay.com/tx/send


test/transaction_builder.js 

if (output.address) {
45	      txb.addOutput(output.address, output.value)
46	    } else {
47	      txb.addOutput(bscript.fromASM(output.script), output.value)
…	
100	          tx.addInput(txHash, input.vout, undefined, bscript.fromASM(input.scriptSig))
101	        })
102	
103	        f.outputs.forEach(function (output) {
104	          tx.addOutput(bscript.fromASM(output.script), output.value)


test/transaction.js 

      script = bscript.fromASM(txOut.script)
42	      }
43	
44	      tx.addOutput(script, txOut.value)
45	    })
46	
47	    return tx
…	
157	          tx.addInput(hash, f.index)
158	        }, new RegExp(f.exception))
159	      })
160	    })
161	  })
162	
163	  describe('addOutput', function () {
	
	
	src/transaction_builder.js 
Showing the top two matches. Last indexed 29 days ago.

271	  // Copy outputs (done first to avoid signature invalidation)
272	  transaction.outs.forEach(function (txOut) {
273	    txb.addOutput(txOut.script, txOut.value)
…	
361	  this.prevTxMap[prevTxOut] = true
362	
363	  return vin
364	}
365	
366	TransactionBuilder.prototype.addOutput = function (scriptPubKey, value) {
367	  if (!this.__canModifyOutputs()) {
	

	
	
	var dataScript = bitcoin.script.nullData.output.encode(data)

      tx.addInput(unspent.txId, unspent.vout)
      tx.addOutput(dataScript, 1000)

	  
	  
https://github.com/bitcoinjs/bitcoinjs-lib/blob/b5e46c29316df2ea1135ec727c382ee29a52bc6c/src/templates/index.js
	  
	  var types = {
  MULTISIG: 'multisig',
  NONSTANDARD: 'nonstandard',
  NULLDATA: 'nulldata',
  P2PK: 'pubkey',
  P2PKH: 'pubkeyhash',
  P2SH: 'scripthash',
  P2WPKH: 'witnesspubkeyhash',
  P2WSH: 'witnessscripthash'
}

https://github.com/bitcoinjs/bitcoinjs-lib/blob/master/test/integration/multisig.js#L9

var pubKeys = [
      '026477115981fe981a6918a6297d9803c4dc04f328f22041bedff886bbc2962e01',
      '02c96db2302d19b43d4c69368babace7854cc84eb9e061cde51cfa77ca4a22b8b9',
      '03c6103b3b83e4a24a0e33a4df246ef11772f9992663db0c35759a5e2ebf68d8e9'
    ].map(function (hex) {
      return new Buffer(hex, 'hex')
    })
	
	
 var redeemScript = bitcoin.script.multisig.output.encode(2, pubKeys) // 2 of 3
    var scriptPubKey = bitcoin.script.scriptHash.output.encode(bitcoin.crypto.hash160(redeemScript))

	
	-------------------------------------------------
	
	Open http://localhost:8000 to access the files now
	
	GET /api/create 200 293ms
new TESTNET address: [mseVcR6Mx33drXZq2DRPB2pLoB5CwFJ8db]
key: [cUUNUdoyY6BdJNnoKPr8b7p59anKud7tacSxvGzvhoWdnCSLwtkN]
new TESTNET address: [n3d18NyZfb5fWHVMTg9Jw6ChbKoRKn8AQt]
key: [cVowCVurZRdnGPxMkEdDEuSaMVwFXcrWPdfkWWtjnAhcWeE35ssL]

