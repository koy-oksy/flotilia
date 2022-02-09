$(document).ready(function() {

    $(".Modern-Slider").slick({
        autoplay: true,
        autoplaySpeed: 10000,
        speed: 600,
        slidesToShow: 1,
        slidesToScroll: 1,
        pauseOnHover: false,
        dots: true,
        pauseOnDotsHover: true,
        cssEase: 'linear',
        // fade:true,
        draggable: false,
        prevArrow: '<button class="PrevArrow"></button>',
        nextArrow: '<button class="NextArrow"></button>',
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 3
            }
        }
    })

    var width = $(window).width();
    let mobile = '768';

    $('#contact').on('submit', function() {
        let name = $('#firstname').val();
        let phone = $('#phone').val();
        let message = $('#message').val();

        $.ajax({
            url: base_url + "/index.php/contact",
            data: { firstname: name, phone: phone, message: message },
            success: function() {
                console.log('test!');
            }
        });



        $('#success-firstname').text(name);
        $('.contact-form').hide('slow', function() {
            $('.contact-form-success').show('slow');
        });
        return false;
    });

    $(window).on('resize', function() {
        width = $(window).width();
    })

    // $('.boat-card').hover(
    //     function() {
    //         if (width > mobile) {
    //             $(this).find('.details').show('slow');
    //         }
    //     },
    // function() {
    //     if (width > mobile) {
    //         $(this).find('.details').hide('slow');
    //     }
    // }
    // );
});
$('#myCarousel').carousel({
    interval: false
});
$('#carousel-thumbs').carousel({
    interval: false
});