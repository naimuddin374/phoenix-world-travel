

// Mobile Menu
$(function () {
    $('#hornavmenu').slicknav();
});
// Sticky Divs
// $('#header').affix({
//     offset: {
//       top:42
//     }
//   });
// $('#hornav').affix({
//   offset: {
//     top:42
//   }
// });

$(window).load(function () {
    $("#hornav").sticky({topSpacing: 4});
});
$(window).load(function () {
    $("#header").sticky({topSpacing: 0});
});
//Owl carusel slider....
$(document).ready(function () {
    $(".slider_bottom").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 5,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        navigation: true,
        navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }

    });
});
$(document).ready(function () {

    $(function () {
        $('#tool').popover()
    })

});
/* start scroll to top button */
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $(".scroll-button").fadeIn();
        } else {
            $(".scroll-button").fadeOut();
        }
    });
    $(".scroll-button").click(function () {
        $("html, body").animate({scrollTop: 0}, 800);
        return false;
    });
});





$(document).ready(function () {
    var accod = $('.msg-box');
    accod.find('.wrap').hide();
    $('.msg-head').click(function () {
        $('.wrap').slideToggle('slow');
    });


});


/*
 $('.close').click(function(){
 $('.wrap').show(); 
 });*/
$(function () {
    $("#addClass").click(function () {
        $('#qnimate').addClass('popup-box-on');
    });

    $("#removeClass").click(function () {
        $('#qnimate').removeClass('popup-box-on');
    });
});

$(function () {
    $('.datetimepicker').datetimepicker();
});



