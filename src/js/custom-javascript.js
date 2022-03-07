jQuery(function($){

// Push down footer section on short pages
$(document).ready(function() {
	$('#js-heightControl').css('height', $(window).height() - $('html').height() +'px');
});

//end of file
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});