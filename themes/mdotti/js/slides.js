var swiper = new Swiper(".slide-hero", {
slidesPerView: 1,
spaceBetween: 0,
speed: 800,
autoHeight: true,
pagination: {
el: ".swiper-pagination",
clickable: true,
},
autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
});

var swiper = new Swiper(".slide-logos", {
slidesPerView: 4,
spaceBetween: 40,
autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
breakpoints: {
    200: {
        slidesPerView: 3,
        spaceBetween: 24,
    },
    600: {
        slidesPerView: 4,
        spaceBetween: 24,
    },
    768: {
        slidesPerView: 4,
        spaceBetween: 40,
    }
}
});

var swiper = new Swiper(".slide-blog", {
slidesPerView: 1,
spaceBetween: 0,
speed: 800,
autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
navigation: {
    nextEl: ".arrow-right-blog",
    prevEl: ".arrow-left-blog",
},
});

var swiper = new Swiper(".slide-resources", {
slidesPerView: 'auto',
spaceBetween: 32,
speed: 800,
autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
navigation: {
    nextEl: ".arrow-right-resources",
    prevEl: ".arrow-left-resources",
},
breakpoints: {
    200: {
        slidesPerView: 1,
        spaceBetween: 10,
    },
    600: {
        slidesPerView: 'auto',
        spaceBetween: 16,
    },
    768: {
        slidesPerView: 'auto',
        spaceBetween: 24,
    },
    991: {
        slidesPerView: 'auto',
        spaceBetween: 32,
    }
}
});

var swiper = new Swiper(".slide-category", {
slidesPerView: 6,
spaceBetween: 32,
speed: 800,
autoplay: {
    delay: 2500,
    disableOnInteraction: false,
    },
    breakpoints: {
        200: {
            slidesPerView: 2.2,
            spaceBetween: 16,
        },
        480: {
            slidesPerView: 3,
            spaceBetween: 16,
        },
        610: {
            slidesPerView: 4,
            spaceBetween: 16,
        },
        991: {
            slidesPerView: 5,
            spaceBetween: 16,
        },
        1200: {
            slidesPerView: 6,
            spaceBetween: 32,
        }
    }
});

var swiper = new Swiper(".slide-screens", {
slidesPerView: 1.5,
spaceBetween: 32,
speed: 800,
autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
breakpoints: {
    200: {
        slidesPerView: 1,
        spaceBetween: 10,
    },
    480: {
        slidesPerView: 1,
        spaceBetween: 16,
    },
    610: {
        slidesPerView: 1,
        spaceBetween: 16,
    },
    768: {
        slidesPerView: 1.5,
        spaceBetween: 16,
    },
    991: {
        slidesPerView: 1.5,
        spaceBetween: 24,
    },
    1200: {
        slidesPerView: 1.5,
        spaceBetween: 32,
    }
}
});