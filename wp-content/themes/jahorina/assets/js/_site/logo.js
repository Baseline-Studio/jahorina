'use strict';
const Logo = {
    init: function () {
        const header = document.getElementById("masthead");
        const logo = document.getElementById("logo");

        const mobileThreshold = 50; // Prag za mobilne uređaje
        const desktopThreshold = 200; // Prag za desktop uređaje

        const defaultLogoSrc = logo.dataset.defaultLogo;
        const scrollLogoSrc = logo.dataset.scrollLogo;

        // Funkcija za određivanje praga na osnovu širine ekrana
        const getScrollThreshold = () => (window.innerWidth <= 768 ? mobileThreshold : desktopThreshold);

        window.addEventListener("scroll", function () {
            const scrollThreshold = getScrollThreshold();

            if (window.scrollY > scrollThreshold) {
                if (!header.classList.contains("scrolled")) {
                    header.classList.add("scrolled");

                    // Menjaj logo
                    logo.style.opacity = 0; // Sakrij logo pre zamene
                    setTimeout(() => {
                        logo.src = scrollLogoSrc;
                        logo.style.opacity = 1; // Prikaz logotipa nakon zamene
                    }, 200);
                }
            } else {
                if (header.classList.contains("scrolled")) {
                    header.classList.remove("scrolled");

                    // Vrati originalni logo
                    logo.style.opacity = 0;
                    setTimeout(() => {
                        logo.src = defaultLogoSrc;
                        logo.style.opacity = 1;
                    }, 200);
                }
            }
        });
    }
};

export default Logo;
