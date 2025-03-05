import Swiper from "swiper/bundle";

'use strict';
const Sliders = {
  /*-------------------------------------------------------------------------------
    # Initialize
  -------------------------------------------------------------------------------*/
  init: function () {
    const initializeSwiper = (slider) => {
      const swiper = new Swiper(slider, {
        loop: true, // Omogućava petlju
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        pagination: {
          el: slider.querySelector('.swiper-pagination'),
          clickable: true,
          type: "custom",
          renderCustom: function (swiper, current, total) {
            let fractionHtml = `<span class="swiper-pagination-fraction">
              <span class="swiper-pagination-fraction-current">${current}</span> / ${total}
            </span>`;
            let bulletsHtml = '';
            for (let i = 1; i <= total; i++) {
              bulletsHtml += `<span class="swiper-pagination-bullet${current === i ? ' swiper-pagination-bullet-active' : ''}" data-index="${i - 1}"></span>`;
            }
            return bulletsHtml + fractionHtml;
          },
        },
        navigation: {
          nextEl: slider.querySelector('.swiper-button-next'),
          prevEl: slider.querySelector('.swiper-button-prev'),
        },
      });
    
      // Rukovanje video logikom
      swiper.slides.forEach((slide) => {
        const video = slide.querySelector('video');
        if (video) {
          swiper.on('slideChangeTransitionStart', () => {
            const isActive = slide.classList.contains('swiper-slide-active');
            const isDuplicate = slide.classList.contains('swiper-slide-duplicate');
    
            if (isActive && !isDuplicate) {
              swiper.autoplay.stop();
              video.muted = true;
              video.play();
            } else {
              video.pause();
              video.currentTime = 0;
            }
          });
    
          // Move to next slide when video ends
          video.addEventListener('ended', () => {
            swiper.slideNext();
            swiper.autoplay.start();
          });
        }
      });
    
      return swiper;
    };
    

    // Use Intersection Observer to initialize sliders on scroll
    const observerOptions = {
      root: null,
      threshold: 0.1,
    };

    const observerCallback = (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const slider = entry.target;
          const swiperInstance = initializeSwiper(slider);

          observer.unobserve(slider); // Stop observing once initialized
        }
      });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    // Observe all sliders
    document.querySelectorAll('.swiper').forEach(slider => {
      observer.observe(slider);
    });

    // Additional logic for mobile-specific sliders
    if (window.innerWidth <= 1024) {
      document.querySelectorAll('.card-item__slider').forEach((slider) => {
        observer.observe(slider); // Observer will initialize only when visible
      });
    }
  },
};

export default Sliders;
