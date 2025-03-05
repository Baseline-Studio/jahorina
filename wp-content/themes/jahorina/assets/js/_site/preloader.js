'use strict';

const Preloader = {
    init: function () {
        const preloader = document.getElementById("preloader");
        const video = document.getElementById("myVideo"); // Pronađi video element
        if (preloader) {
            setTimeout(() => {
                preloader.style.opacity = "0";
                preloader.style.transition = "opacity 0.6s ease";
                setTimeout(() => {
                    preloader.style.display = "none";
                    
                    // Pokreni video nakon što preloader nestane
                    if (video) {
                        video.play().catch((error) => {
                            console.error("Video playback failed:", error);
                        });
                    }
                }, 500); // Sakrivanje preloadera
            }, 1500); // Trajanje preloadera
        }
    }
};

export default Preloader;
