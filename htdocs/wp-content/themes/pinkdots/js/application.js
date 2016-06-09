jQuery(document).ready(function( $ ){

	$('.hero .banner-top').addClass('top-end');
	$('.hero .banner-bot').addClass('bot-end');
	$('.hero .jumbotron h1').addClass('h1-end');

	var navOffset;
  	navOffset = $('.navbar').outerHeight();
	$("#bs-example-navbar-collapse-1 ul li a[href^='#']").on('click', function(e) {

		e.preventDefault();

		var hash = this.hash;
		$('html, body').animate({
			scrollTop: $(hash).offset().top - navOffset
		}, 300, function(){
			window.location.hash = hash;
		});

	});
	$('.navbar-collapse').click('li', function() {
    	$('.navbar-collapse').collapse('hide');
	});



});
