import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const Gallery = {
    init: function () {
        const scrollContainer2 = document.querySelector(".horizontal-scroll-section2");

        if (!scrollContainer2) {
            return;
        }

        const panels = document.querySelectorAll(".panel");

        const mm = gsap.matchMedia();

        mm.add("(min-width: 1100px)", () => {
            gsap.to(scrollContainer2, {
                xPercent: -110 * (panels.length - 1),
                ease: "none",
                scrollTrigger: {
                    trigger: ".scroll-container2",
                    start: "top 100px",
                    pin: true,
                    scrub: 0.5,
                    end: () => "+=" + scrollContainer2.offsetWidth,
                    // markers: true,
                }
            });
        });
    }
};

export default Gallery;





