import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const Animation = {
    init: function () {
        const fadeIn = document.querySelectorAll(".fade-in");

        // Kreiraj jedinstveni ključ za svaku stranicu
        const pageKey = `firstVisit_${window.location.pathname}`;
        const isFirstVisit = !sessionStorage.getItem(pageKey);
        

        if (isFirstVisit) {
            // Ako je prvi dolazak na ovu stranicu, pokreni animaciju i sačuvaj posetu
            sessionStorage.setItem(pageKey, 'true');

            ScrollTrigger.config({ lagSmoothing: 0.1 });

            ScrollTrigger.batch(fadeIn, {
                onEnter: (batch) => gsap.to(batch, { opacity: 1, y: 0, duration: 1, stagger: 0.1 }),
                once: true,
                // markers: true
            });
        } else {
            // Ako nije prvi dolazak na ovu stranicu, postavi opacity na 1 za sve elemente
            fadeIn.forEach(element => {
                element.style.opacity = 1;
                element.style.transform = 'translateY(0)';
            });
        }
    }
};

export default Animation;




