var frnt = require('frnt');
var fs = require("fs");
var path = require("path");
var express = require('express');
var app = express();
var doT = require('express-dot');

// Define where the public files are, in this example ./public
app.use(express.static(path.join(__dirname, 'public')));

// Make sure this is set before the frnt middleware, otherwise you won't
// be able to create custom routes.
app.use(app.router);

// Setup the frnt middleware with the link to the internal server
app.use(frnt.init({
    proxyUrl: "http://localhost:81", // The link to your wordpress site
    layout: false // We simplify this example by not using layouts
}));

// define rendering engine
app.set('views', path.join(__dirname, "views"));
app.set('view engine', 'html' );
app.engine('html', doT.__express );

app.listen(8080); // listen to port 8080
