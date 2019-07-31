// global.$ = global.jQuery = require('jquery');
global.$ = window.jQuery; // Use jQuery that comes with WordPress
global.Popper = require("popper.js");

require("bootstrap");

(function($) {
	console.log($);
})(jQuery);
