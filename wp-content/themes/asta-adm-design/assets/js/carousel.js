$('.owl-carousel1').owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 2
        },
        700: {
            items: 3
        },
        1200: {
            items: 4
        }
    }
})

var owl = $('.owl-carousel1');
owl.owlCarousel();
// Go to the next item
$('.next1').click(function () {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.prev1').click(function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})


$('.owl-carousel2').owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        700: {
            items: 2
        },
        1200: {
            items: 3
        }
    }
})

//halaman di exchange-point
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 5,
    slidesPerColumn: 2,
    spaceBetween: 15,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
        dynamicBullets: true,
        dynamicMainBullets: 3,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
        },
    },
    navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
    },
    breakpoints: {
        1250: {
            slidesPerView: 4,
            slidesPerColumn: 2,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 3,
            slidesPerColumn: 2,
            spaceBetween: 15,
        },
        768: {
            slidesPerView: 2,
            slidesPerColumn: 2,
            spaceBetween: 15,
        },
        640: {
            slidesPerView: 2,
            slidesPerColumn: 5,
            spaceBetween: 15,
        },
        320: {
            slidesPerView: 2,
            slidesPerColumn: 5,
            spaceBetween: 15,
        }
    }
});







