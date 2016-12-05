//(function($){
$(function(){

    // 'read more...' link
    $('#readmore').click(function (e) {
        e.preventDefault();
        var $el = $('#more').first();
        if ($el.css('display') === 'none') {
            $el.slideDown('slow');
            $(e.target).text("Hide...");
        } else {
            $el.slideUp('fast');
            $(e.target).text("Read more...");
        }
    });

    // clicking on the boxes -> scroll to element
    // requires event bubbling
    $('#introduction .card').click(function(e) {
        e.preventDefault();
        var link = $(this).data('href');
        if (link) {
            // save the original position so that we can jump back
            $('.navbtn').data('origpos', $(window).scrollTop());
            // scroll down to the section
            $('html, body').animate({
                scrollTop: $("#"+link).offset().top - 24
            }, 800);
            // show the nav button
            $('.navbtn').show();
        }
    });

    // clicking on the boxes
    // requires event bubbling
    $('.card.clickable').click(function(e) {
        e.preventDefault();
        var link = $(this).data('href');
        if (link) {
            window.location = link;
        }
    });

    // clicking on the nav button
    $('.navbtn').click(function(e) {
        e.preventDefault();
        // var target = $(this).data('target');
        var origpos = $(this).data('origpos');
        if (origpos >= 0) {
            $('html, body').animate({
                scrollTop: +origpos
            }, 800);
            // hide the nav button
            $(this).hide();
        }
    });

    // equal heights for the cards
    $('.card').matchHeight();

    // equal heights for the logos
    $('.logo').matchHeight();

    // track the scroll position
    // $(window).scroll(function() {
    //     let logoHeight,
    //         minHeight = 64,
    //         maxHeight = 84,
    //         startAnimAt = 64,
    //         endAnimAt = 164,
    //         offset = $(this).scrollTop();
    //     // console.log('offset', offset);
    // });// $(window).scroll

    var navbarToggle = new Waypoint({
        element: document.getElementById('explore'),
        handler: function(direction) {
            console.log('resize header event', direction);
            var $logo = $('nav .brand-logo img');
            var $menu_items = $('nav .nav-wrapper ul li a, nav .nav-wrapper ul li a i');
            switch (direction) {
            case "down":
                $logo.animate({'height':'64px'}, 700);
                $menu_items.animate({'height':'64px', 'line-height':'64px'}, 700);
                break;
            case "up":
                $logo.animate({'height':'84px'}, 700);
                $menu_items.animate({'height':'84px', 'line-height':'84px'}, 700);
                break;
            }// switch
        }
    });

    var deactivateNavBtn = new Waypoint({
        element: document.getElementById('maincards'),
        handler: function(direction) {
            if (direction === "up") {
                $('.navbtn').hide();
            }
        }
    });



}); // end of document ready
//})(window.jQuery); // end of jQuery name space
