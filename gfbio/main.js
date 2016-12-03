// ------------------------------------------------------
// CSS/SASS
// ------------------------------------------------------

// materialize CSS
import 'materialize-css/dist/css/materialize.min.css';

// custom styles
import './styles.scss';
import './print.scss';

// ------------------------------------------------------
// JavaScript
// ------------------------------------------------------

// jquery
const $ = require('jquery');
// window.$ = $
// window.jQuery = $;

// see http://stackoverflow.com/a/2548133/426266
if (typeof String.prototype.endsWith !== 'function') {
    String.prototype.endsWith = function(suffix) {
        return this.indexOf(suffix, this.length - suffix.length) !== -1;
    };
}
// if browser does not support SVG
// swap out svg images with the png version
if (!Modernizr.svg) {
	var $imgs = $("img");
	$.each($imgs, function(index, img){
		var src = $(img).attr("src");
		if (src && src.endsWith('.svg')) {
			src = src.replace('.svg', '.png');
			$(img).attr("src", src);
		}
	});
}
