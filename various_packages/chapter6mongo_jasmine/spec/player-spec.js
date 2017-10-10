#!javascript
var frisby = require('frisby');


frisby.create('Check return values after insertplayer')
  .post('http://localhost:8080/demo/insertplayer',
    {
                    name: 'test1',
					game: 'game1',
					age : 20
                },
    { json: true },
    { headers: { 'Content-Type': 'application/json' }})
  .expectStatus(200)
  .expectHeader('Content-Type', 'application/json')
  .expectJSON({ 'name': 'test1'})
  .toss();
  

