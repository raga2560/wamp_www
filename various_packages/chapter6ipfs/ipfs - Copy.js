'use strict'

//const IPFS = require('../../src/core') // replace this by line below
 const IPFS = require('ipfs')

 // https://github.com/danialfarid/ng-file-upload/wiki/Node-example

 

/*
 * Create a new IPFS instance, using default repo (fs) on default path (~/.ipfs)
 */
const node = new IPFS()

const fs = require('fs')

/*
 * Display version of js-ipfs
 */
node.version(gotVersion)

function gotVersion (err, version) {
  if (err) {
    return console.error(err)
  }

  console.log(version)

  /*
   * Load the config into memory (generate the Public Key from the Private Key)
   */
  node.load((err) => {
    if (err) {
      return console.log(err)
    }
    console.log('Repo was loaded\n')

    /*
     * Our instance is set, now let's goOnline (turn on bitswap) and do cool
     * stuff
     */

    node.goOnline((err) => {
      if (err) {
        return console.log(err)
      }

      // We can test to see if we actually are online if we want to
      if (node.isOnline()) {
        console.log('\nYep, we are online')
      }
  });
});
};

      /*
       * Add a file to IPFS - Complete Files API on:
       * https://github.com/ipfs/interface-ipfs-core/tree/master/API/files
       */

function IPFSAppDAO() {
    "use strict";

    /* If this constructor is called without the "new" operator, "this" points
     * to the global object. Log a warning and call it correctly. */
 /*   if (false === (this instanceof IPFSAppDAO)) {
        console.log('Warning: escrowstoreDAO constructor called without "new" operator');
        return new IPFSAppDAO(db);
    }

    
*/


        this.uploadrecord = function(file, callback) {
     /* const file = {
        path: 'hello.txt',
        content: fs.createReadStream('./hello.txt')
      };
	  */

      node.files.add(file, (err, result) => {
        if (err) { console.err(err);
          return callback(err, null); }

        console.log('result \n', result, '\n')
	var hash = result[0].hash;
            callback(null, hash);
    });
}

        this.printrecord = function(hash, callback) {
        "use strict";


        node.files.cat(hash, (err, stream) => {
          if (err) {
            return console.error(err)
          }

          console.log('file content: \n');


          stream.pipe(process.stdout);
          stream.on('end', process.exit);
	 callback(null , stream);
        });
    }


}
module.exports.IPFSAppDAO = IPFSAppDAO;
