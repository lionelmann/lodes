
jQuery(document).ready(function($){
    var $timeline_block = $('.cd-timeline-block');

    //hide timeline blocks which are outside the viewport
    $timeline_block.each(function(){
        if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
            $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
        }
    });

    //on scolling, show/animate timeline blocks when enter the viewport
    $(window).on('scroll', function(){
        $timeline_block.each(function(){
            if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
                $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
            }
        });
    });
});

(function(){
    [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
        new CBPFWTabs( el );
    });
})();

// Slide gallery
var flky = new Flickity( '.gallery', {
    accessibility: true,
    autoPlay: 7000,
    cellAlign: 'left',
    cellSelector: undefined,
    contain: false,
    draggable: true,
    freeScroll: false,
    friction: 0.2,
    initialIndex: 0,
    lazyLoad: true,
    percentPosition: true,
    prevNextButtons: true,
    pageDots: false,
    resize: true,
    rightToLeft: false,
    setGallerySize: true,
    watchCSS: false,
    wrapAround: true
});

// Mixitup
jQuery(document).ready(function($){
    $('#Container').mixItUp();
    $('.anchor').click(function(e) {
       e.preventDefault();
    });
});

// CountUp
    var options = {
        useEasing : true, 
        useGrouping : true, 
        separator : ',', 
        decimal : '.', 
        prefix : '', 
        suffix : '' 
    };

    var metric1 = new CountUp("first", 0, s1, 0, 5, options);
    var metric2 = new CountUp("second", 0, s2, 0, 5, options);
    var metric3 = new CountUp("third", 0, s3, 0, 5, options);
   
    
    metric1.start();
    metric2.start();
    metric3.start();
