(function ($) {
	
	var backtotoplink = document.getElementById("js-backtotop");
	var body = document.getElementsByTagName('body')[0];

	backtotoplink.addEventListener("click", function(event){
		event.preventDefault();

	 	$('body, html').animate({
	 		scrollTop: 0
	 	}, 500);
	});

})(jQuery);