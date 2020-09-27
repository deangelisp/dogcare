export default {
    init() {

        //Menu
        function menu_header_scroll(){
            var sticky = $('#main-header'),
                scroll = $(window).scrollTop();

            if (scroll >= 260) sticky.addClass('fixed');
            else sticky.removeClass('fixed');
        }

        menu_header_scroll();

        $(window).scroll(menu_header_scroll);

        //Slide Testimonial
        $('.slide-testimonial-list').slick({
            fade: true,
            cssEase: 'linear',
            autoplay: true,
            //            autoplaySpeed: 2000,
        });

        //Slide Testimonial
        $('.gallery-slide-list').slick({
            autoplay: true,
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    },
    finalize() {
        // JavaScript to be fired on the home page, after the init JS
    },
};
