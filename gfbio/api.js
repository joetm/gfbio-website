/*
Scripts for the /api/ page
*/

// jquery
const $ = require('jquery');
// const $ = require('../node_modules/jquery/dist/jquery.slim.js');
// const $ = require('expose-loader?$!expose-loader?jQuery!jquery');
window.$ = $;
window.jQuery = $;


// n/a
require("./swagger/lib/object-assign-pollyfill.js");
// require("./swagger/lib/handlebars-4.0.5.js");
window.Handlebars = require('handlebars/runtime');
// require("./swagger/lib/lodash.min.js");
window._ = require('lodash/core');
// require("imports?_=_!./swagger/lib/backbone-min.js");
window.Backbone = require("imports?$=jquery!backbone/backbone-min.js");
//
require("imports?$=jquery!./swagger/swagger-ui.min.js");
//
require("imports?$=jquery!./swagger/lib/highlight.9.1.0.pack.js");
//
require("imports?$=jquery!./swagger/lib/highlight.9.1.0.pack_extended.js");
// require("imports?$=jquery!./swagger/lib/jsoneditor.min.js");
window.JSONEditor = require("imports?$=jquery!json-editor");
// require("imports?$=jquery!./swagger/lib/marked.js");
window.marked = require('imports?$=jquery!marked');
//
require("imports?$=jquery!./swagger/lib/swagger-oauth.js");

jQuery.browser = {};
(function () {
   jQuery.browser.msie = false;
   jQuery.browser.version = 0;
   if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
       jQuery.browser.msie = true;
       jQuery.browser.version = RegExp.$1;
   }
})();

//
require("imports?$=jquery!./swagger/lib/jquery.slideto.min.js");
//
require("imports?$=jquery!./swagger/lib/jquery.wiggle.min.js");
// require("imports?$=jquery!./swagger/lib/jquery.ba-bbq.min.js");
require("jquery-bbq/jquery.ba-bbq.min.js");
//
require("imports?$=jquery!./swagger/lib/swagger-ui-settings-and-loading.js");

/*
require("imports?$=jquery!./swagger/lang/en.js");
*/
