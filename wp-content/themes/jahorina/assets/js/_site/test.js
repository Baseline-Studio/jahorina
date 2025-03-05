'use strict';
const Test = {
    // Initialize
    init: function () {
        const parallaxImage = document.querySelector('.parallax-image');

        if (!parallaxImage) return;

        // Proveri širinu prozora
        if (window.innerWidth <= 1025) return;

        // Koristi Intersection Observer za praćenje .parallax-image
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Pokreće efekat kad je .parallax-image u viewport-u
                    document.addEventListener('scroll', Test.handleScroll);
                } else {
                    // Uklanja efekat kad je .parallax-image van viewport-a
                    document.removeEventListener('scroll', Test.handleScroll);
                }
            });
        }, { threshold: 0.1 }); // Aktivira se kad je 10% slike vidljivo

        observer.observe(parallaxImage);
    },

    // Funkcija za rukovanje scroll efektom
    handleScroll: function () {
        // Proveri širinu prozora pre primene efekta
        if (window.innerWidth <= 1025) return;

        const scrollPosition = window.scrollY; // Trenutna pozicija skrolovanja
        const parallaxImage = document.querySelector('.parallax-image');
        
        if (parallaxImage) {
            const translateValue = scrollPosition * 0.09; // Koristi manji faktor za precizniji efekat
            parallaxImage.style.transform = `translateY(${translateValue}px)`;
        }
    }
};

export default Test;
