$(function(){
  $('.fullscreen').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
  $('.autoheight').css({ height: $(window).innerHeight() + 'px' });

  $(window).resize(function(){
	$('.fullscreen').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
  	$('.autoheight').css({ height: $(window).innerHeight() + 'px' });
  });
});


$(document).ready(function() {
	$('.showPopup').magnificPopup({
	  type: 'inline',

	  fixedContentPos: false,
	  fixedBgPos: true,

	  overflowY: 'auto',

	  closeBtnInside: true,
	  preloader: false,
	  
	  midClick: true,
	  removalDelay: 300,
	  mainClass: 'my-mfp-zoom-in'
	});
});