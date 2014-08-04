$(document).ready(function(){

	if(typeof(Storage) !== "undefined") {
	    var firstVisit = sessionStorage["firstMovieVisit"];

		if (!firstVisit) {
			$('#disclaimerModal').modal('show');
			window.setTimeout(function(){ 
				$('#disclaimerModal').modal('hide'); 
			}, 3000);
			sessionStorage.setItem("firstMovieVisit", false);
		}
	}
	

	!function ($) {
		$('a[href^="#"]:not([data-toggle]):not([data-slide])').bind('click.smoothscroll',function (e) {
		    e.preventDefault();
		    var target = this.hash;
		        $target = $(target);
		    $('html, body').stop().animate({
		        'scrollTop': $target.offset().top
		    }, 500, 'swing', function () {
		        window.location.hash = target;
		    });
		});
	}(window.jQuery)
});
