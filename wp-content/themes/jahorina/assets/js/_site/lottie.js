import lottieWeb from 'lottie-web/build/player/lottie_light';

const Lottie = {
    init: function () {
        this.initPreloader();
        this.initTrnovoAnimation();
    },

    // Preloader animacija
    initPreloader: function () {
        const preloaderContainer = document.getElementById('preloader');

        if (!preloaderContainer) return;

        const animationPath = preloaderContainer.getAttribute('data-animation-path');
        if (!animationPath) {
            console.error("Animation path not found!");
            return;
        }

        const animation = lottieWeb.loadAnimation({
            container: preloaderContainer,
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: animationPath,
        });

        setTimeout(() => {
            animation.stop();
            preloaderContainer.style.opacity = '0';
            preloaderContainer.style.transition = 'opacity 0.5s ease';
            setTimeout(() => preloaderContainer.style.display = 'none', 500);
        }, 1500);
    },

    // Trnovo animacija
    initTrnovoAnimation: function () {
        const animationContainer = document.getElementById('trnovo-animation');
        if (!animationContainer) return;

        const animationPath = animationContainer.getAttribute('data-animation-path');
        if (!animationPath) {
            console.error("Animation path not found for Trnovo animation!");
            return;
        }

        let animation = null;

        // Koristite Intersection Observer za pokretanje animacije kada sekcija postane vidljiva
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Učitajte Lottie animaciju
                    if (!animation) {
                        animation = lottieWeb.loadAnimation({
                            container: animationContainer,
                            renderer: 'svg',
                            loop: false,
                            autoplay: true,
                            path: animationPath, // Preuzimanje putanje iz atributa
                        });
                    }
                    observer.disconnect(); // Prekinite posmatranje nakon inicijalizacije
                }
            });
        }, { threshold: 0.1 }); // Aktivacija kada je 10% sekcije vidljivo

        const featureSection = document.querySelector('.feature-sec');
        if (featureSection) {
            observer.observe(featureSection);
        }
    }
};

export default Lottie;

