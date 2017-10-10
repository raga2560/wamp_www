'use strict'


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
	  console.log('testing');

}


}
module.exports.IPFSAppDAO = IPFSAppDAO;
