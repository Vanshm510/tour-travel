



let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

};


var swiper = new Swiper(".home-slider", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".reviews-slider", {
    loop: true,
    autoHeight: true,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },
});

let load = document.querySelector('.packages .load-more .btn');
let current = 3;

load.onclick = () => {
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (var i = current; i < current + 3; i++) {
        boxes[i].style.display = 'inline-block';
    };

    current = current + 3;

    if (current >= boxes.length) {
        load.style.display = 'none';
    };
};



