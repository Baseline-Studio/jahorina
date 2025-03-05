import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const SiteMain = {
    init: function () {
        const body = document.querySelector(".site-main");
		
			gsap.to(body, {
				opacity: 1,
				delay: 0.3,
				duration: 1,
			});
		
    }
};

export default SiteMain;





