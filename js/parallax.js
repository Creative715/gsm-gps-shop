$(document).ready(function() {
	
	$(window).bind('scroll', function(e) {
		parallax();
	});
	
	
	$('a.topp').click(function() {
		$('html, body').animate({ scrollTop:$('#top').offset().top }, 1000,
			function() {
				parallax();
			});
		return false;
	});
	
});

function parallax() {
	var scrollPosition = $(window).scrollTop();
	$('#stars').css('top', (0 - (scrollPosition * .2)) + 'px');
	$('#images').css('top', (0 - (scrollPosition * .5)) + 'px');
}

