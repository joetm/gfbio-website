webpackJsonp([0],[
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	__webpack_require__(1);
	
	__webpack_require__(2);
	
	__webpack_require__(3);
	
	// ------------------------------------------------------
	// JavaScript
	// ------------------------------------------------------
	
	// jquery
	
	
	// custom styles
	var $ = __webpack_require__(4);
	// window.$ = $
	// window.jQuery = $;
	
	// see http://stackoverflow.com/a/2548133/426266
	// ------------------------------------------------------
	// CSS/SASS
	// ------------------------------------------------------
	
	// materialize CSS
	if (typeof String.prototype.endsWith !== 'function') {
		String.prototype.endsWith = function (suffix) {
			return this.indexOf(suffix, this.length - suffix.length) !== -1;
		};
	}
	// if browser does not support SVG
	// swap out svg images with the png version
	if (!Modernizr.svg) {
		var $imgs = $("img");
		$.each($imgs, function (index, img) {
			var src = $(img).attr("src");
			if (src && src.endsWith('.svg')) {
				src = src.replace('.svg', '.png');
				$(img).attr("src", src);
			}
		});
	}

/***/ },
/* 1 */
/***/ function(module, exports) {

	// removed by extract-text-webpack-plugin

/***/ },
/* 2 */
/***/ function(module, exports) {

	// removed by extract-text-webpack-plugin

/***/ },
/* 3 */
/***/ function(module, exports) {

	// removed by extract-text-webpack-plugin

/***/ }
]);
//# sourceMappingURL=app.js-0.map