jQuery(function($){

// Push down footer section on short pages
$(document).ready(function() {
	$('#js-heightControl').css('height', $(window).height() - $('html').height() +'px');
});

//Hide and show classroom solutions services on click without Bootstrap toggle
$('#services .icon-bucket').on('click', function(e) {
	$('.icon-bucket').removeClass('active');
	$(this).addClass('active');
	var target = '#' + $(this).data('bucket');
	$('.service').hide();
	$(target).css('display', 'flex');
})

//Make entire blog div clickable
$('article').on('click', function(e){
  e.preventDefault();
  window.location.href=$(this).data('link');
});

//end of file
});