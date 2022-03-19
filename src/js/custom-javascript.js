jQuery(function($){

$(window).load(function() {

    // Push down footer section on short pages
	$('#js-heightControl').css('height', $(window).height() - $('html').height() +'px');

    //Toggle functionality for speakers
    $('.toggle').on('click', function() {
        var $not = $(this).parent().add( $(this) );
        $('.presenter-wrapper').not($not).removeClass('active');
        $(this).parent().toggleClass('active');
    });

    $('.presenter .inner-container').each(function(i) {
        //Get height of the initial content
        var initialHeight = $(this).outerHeight();
        //Get height of the presenter info box
        var newHeight = $(this).find('.bio').outerHeight();

        $(this).mouseenter(function() {
            $(this).animate({
                height: newHeight
            });
        }).mouseleave(function() {
            $(this).animate({
               height: initialHeight
            });
        });
    });   

    //Move the sponsored by information to after the description on mobile
    if ($(window).width() < 576) {
        $('.sponsorship-logo').each(function(i) {
            $(this).closest('.inner-container').append($(this));
        });
    };

//end of document ready call
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