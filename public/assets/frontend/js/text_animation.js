

	function tm_animate_text(){
	
		"use strict";
		
		var animateSpan			= jQuery('.animation_text_word');
		
			animateSpan.typed({
				strings: ["Detox", "Detox", "Detox"],
				loop: true,
				startDelay: 1e3,
				backDelay: 3e3
			});
	}

	jQuery(document).on('ready', function () {
		(function ($) {
			tm_animate_text();
		})(jQuery);
	});