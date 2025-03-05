import Swiper from "swiper/bundle";

'use strict';

const Sliders = {
  /*-------------------------------------------------------------------------------
    # Initialize
  -------------------------------------------------------------------------------*/
  init: function () {
    const bigSliderSection = document.querySelector('.bigSwiper'); // Sekcija gde se nalazi bigSwiper

    if (!bigSliderSection) return; // Proveri da li sekcija postoji

    // Koristimo Intersection Observer da inicijalizujemo slajder kada sekcija uđe u viewport
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Pokreće slajder kada je sekcija vidljiva
          Sliders.initBigSlider();
          observer.disconnect(); // Ukloni posmatrača nakon inicijalizacije
        }
      });
    }, { threshold: 0.1 }); // Aktiviraj kada je 10% sekcije vidljivo

    observer.observe(bigSliderSection);
  },

  /*-------------------------------------------------------------------------------
    # Inicijalizacija Big Swiper Slajdera
  -------------------------------------------------------------------------------*/
  initBigSlider: function () {
    const swiper = new Swiper(".bigSwiper", {
      loop: true,
      autoplay: {
          delay: 3000, // Vreme između slajdova u milisekundama (3 sekunde)
          disableOnInteraction: false, // Omogućava da autoplay nastavi nakon ručne promene
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true, // Omogućava klik na tačke
        type: "custom",
        renderCustom: function (swiper, current, total) {
          let fractionHtml = '<span class="swiper-pagination-fraction">' + 
            '<span class="swiper-pagination-fraction-current">' + current + '</span>' + 
            ' / ' + total + 
            '</span>';
          let bulletsHtml = '';
          for (let i = 1; i <= total; i++) {
            bulletsHtml += '<span class="swiper-pagination-bullet' + (current === i ? ' swiper-pagination-bullet-active' : '') + '" data-index="' + (i - 1) + '"></span>';
          }
          return bulletsHtml + fractionHtml; // Promenjeno da bi tačke bile levo
        }
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    // Dodaj event listener za klik na tačke
    document.querySelectorAll('.swiper-pagination-bullet').forEach(function (bullet) {
      bullet.addEventListener('click', function () {
        swiper.slideTo(bullet.getAttribute('data-index'));
      });
    });
  },
};

export default Sliders;
