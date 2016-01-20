'use strict';

// Require the express module
var express = require('express');
var morgan = require('morgan');
var bodyParser = require('body-parser');

// Create a new express application
var app = express();

// Log requests
app.use(morgan('dev'));

// Parse JSON post bodies
app.use(bodyParser.json());

// Serve static files from /static
app.use(express.static(__dirname + '/static'));

/* Log requests 
// app.use(function(req, res, next) {
//     // Log method and url
//     console.log('%s %s', req.method, req.url);
//     // Continue processing request
//     next();
}); */


/* Call this function for GET on /
// app.get('/', function(req, res) { // Request and respone objects
//     res.setHeader('Content-Type', 'text/plain');
//     res.send('Hello World!');
// });

// // Call this function for GET on /time
// app.get('/time', function(req, res) {
//     res.setHeader('Content-Type', 'text/plain');
//     res.send(new Date());
}); */ 

app.get('/api/v1/users', function(req, res) {
    var users = [
        {
            email: 'test@test.com',
            displayName: 'Test User'
        }
    ];
    
    res.json(users);
});

app.post('/api/v1/users', function(req, res) {
   console.log(req.body);
   
   res.json({message: 'new user created updated'}); 
});

// Listen for HTTP request on port 80
app.listen(80, function() {
   console.log('server is listening'); 
});