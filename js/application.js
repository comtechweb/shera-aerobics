$(function() {
    if (window.PIE) {
        $('.round, .radius').each(function() {
            PIE.attach(this);
        });
    }
});


$(document).ready(function (){

    var headerHeight = $("#header").height();
    $('.navigaion').height(headerHeight);
    $('#container').css("padding-top", headerHeight);


    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });


    $('.content h2, .animate').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInDown', // Class to add to the elements when they are visible
        offset: 100    
    }); 


    $(window).scroll(function () {
        if ($(this).scrollTop() > 640) {
            $('#scrollup').fadeIn();
        } else {
            $('#scrollup').fadeOut();
        }
    });
     $('#scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
        return false;
       
    });



    $('.navigaion').smint({
        'scrollSpeed' : 1000
    });



});
