(function($) {
$(window).load(function() { //to initialize Isotope inside $(window).load() instead of $(document).ready(). This will trigger Isotope after all the media on the page has loaded.

	// cache container
	var $container = $('.column');
	// initialize isotope
	
	$container.isotope({
  	// options...
	});

	// filter items when filter link is clicked
	$('.sort a').click(function(){
 	 var selector = $(this).attr('data-filter');
	  $container.isotope({ filter: selector });

//$(this).css('outline','none');
		$('ul.sort .current').removeClass('current');
		$(this).parent().addClass('current');
	  return false;
});	
});
})(jQuery);