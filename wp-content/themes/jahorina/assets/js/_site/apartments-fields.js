import Swiper from "swiper/bundle";

'use strict';

const ApartmentsFields = {
    init: function () {
        const fields = document.querySelectorAll('.field');
        const swiper = new Swiper('.swiper-container', {
            loop: false,
            slidesPerView: 1,
            spaceBetween: 40,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // Klik na SVG polje
        fields.forEach(field => {
            field.addEventListener('click', () => {
                const imgId = field.id;
                fields.forEach(f => f.classList.remove('active'));
                field.classList.add('active');

                // Nađite odgovarajući slajd i prebacite se na njega
                const targetSlideIndex = [...swiper.slides].findIndex(slide => slide.querySelector('img').getAttribute('data-id') === imgId);
                if (targetSlideIndex >= 0) {
                    swiper.slideTo(targetSlideIndex);
                }
            });
        });

        // Promena slajda u Swiperu
        swiper.on('slideChange', () => {
            const activeSlide = swiper.slides[swiper.activeIndex];
            const imgId = activeSlide.querySelector('img').getAttribute('data-id');

            // Aktivirajte odgovarajuće polje u SVG
            fields.forEach(f => f.classList.remove('active'));
            const activeField = document.getElementById(imgId);
            if (activeField) {
                activeField.classList.add('active');
            }
        });
    }
};

export default ApartmentsFields;
