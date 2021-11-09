(function($) {
    $("header.desktop-main").animate({top: '75px'}, 1000);
    $('.hamburger-button, .close-mobile-menu').on('click',function(){
        $('.mobile-main .nav-container').toggle("slide");
        $('.mobile-main .topbar-menu').slideToggle();
    })
    $('.footer-panel').css('width', $('.footer-panel').width() / $('.footer-panel').length);
    $(".background-video video").prop('muted', true);
    var hovered = false;
    $('.activate-widget').hover(function(){
        hovered = true;
        $('.widget-blog').addClass('active-sliding');
    });
    $('body, html, #main-content, header').hover(function(){
        $('.widget-blog').removeClass('active-sliding');
    })
})(jQuery);