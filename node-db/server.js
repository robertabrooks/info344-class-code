'use strict';

var express = require('express');
var morgan = require('morgan'); // logging middleware
var bodyParser = require('body-parser'); // parse JSON that gets passed to the server
var mysql = require('mysql');
var dbConfig = require('./secret/config-maria.json');
var bluebird = require('bluebird');

// Create a connection pool to the MariaDB server
// this allow multiple queries to execute against
// the database in parallel
var connPool = bluebird.promisifyAll(mysql.createPool(dbConfig)); // create pool

// require our stories controller
var storiesApi = require('./controllers/stories-api');
// require our story model
var Story = require('./models/story.js').Model(connPool);

var app = express(); // create application

// log incoming requests
app.use(morgan('dev')); 
// parse JSON in the request body
app.use(bodyParser.json());

// serve static files from the /static subdirectory
app.use(express.static(__dirname + '/static'));

// mount the stories API routher under /api/v1
// better organize different versions of the APIs as we write them
app.use('/api/v1', storiesApi.Router(Story));

app.listen(80, function() {
    console.log('server is listening...');
});
