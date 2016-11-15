// CSS/SASS
import './bootstrap/css/bootstrap.css';
import '../../bootstrap/css/bootstrap-customizations.scss';

import 'blueimp-gallery/css/blueimp-gallery.css';
import 'blueimp-bootstrap-image-gallery/css/bootstrap-image-gallery.css';

import '../sass/main.scss';

// JavaScript
window.$ = require('jquery');
window.jQuery = require('jquery');
window.doT = require('dot/doT.js');
require('jquery.formset/src/jquery.formset');

import 'jquery.formset/src/jquery.formset';
import '../../bootstrap/js/bootstrap.js';

import './_search';

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
