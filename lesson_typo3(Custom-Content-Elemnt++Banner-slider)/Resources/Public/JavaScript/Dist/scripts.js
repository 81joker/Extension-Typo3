/*!
 * Lesson Typo3 v1.0.0 (https://nehaddev.com/)
 * Copyright 2017-2026 Nehad
 * Licensed under the GPL-2.0-or-later license
 */

document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.banner-slider', {
        loop: true,
        autoplay: {
            delay: 4000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});
