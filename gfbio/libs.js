// ------------------------------------------------------
// CSS/SASS
// ------------------------------------------------------

// TODO

// ------------------------------------------------------
// JavaScript
// ------------------------------------------------------

// jquery
const $ = require('jquery');
// const $ = require('../node_modules/jquery/dist/jquery.slim.js');
// const $ = require('expose-loader?$!expose-loader?jQuery!jquery');
window.$ = $;
window.jQuery = $;

require("imports?$=jquery!waypoints/lib/jquery.waypoints.min.js");

// require("imports?$=jquery!jquery.nicescroll/jquery.nicescroll.min.js");

require("imports?$=jquery!materialize-css/dist/js/materialize.min.js");
require("imports?$=jquery!jquery-match-height/dist/jquery.matchHeight-min.js");
