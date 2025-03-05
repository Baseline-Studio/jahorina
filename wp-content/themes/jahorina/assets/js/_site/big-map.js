import gsap from 'gsap';

const BigMap = {
    init: function () {
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');
        const points = document.querySelectorAll('.point');

        let firstVisitSummer = true;
        let firstVisitWinter = true;

        function activateDefaultPoint(season) {
            const defaultActivePoint = season.querySelector('.point-1');
            if (defaultActivePoint) {
                defaultActivePoint.classList.add('active');
                defaultActivePoint.setAttribute('data-hover', 'true');
            }
        }

        const activeTab = document.querySelector('.tab-content.active');
        if (activeTab && activeTab.id === 'summer' && firstVisitSummer) {
            activateDefaultPoint(activeTab);
            firstVisitSummer = false;
        } else if (activeTab && activeTab.id === 'winter' && firstVisitWinter) {
            activateDefaultPoint(activeTab);
            firstVisitWinter = false;
        }

        points.forEach(point => {
            point.addEventListener('mouseover', function () {
                points.forEach(p => {
                    p.classList.remove('active');
                    p.removeAttribute('data-hover');
                });

                this.classList.add('active');
                this.setAttribute('data-hover', 'true');
            });

            point.addEventListener('mouseout', function () {
                this.classList.remove('active');
                this.removeAttribute('data-hover');
            });
        });

        tabButtons.forEach(button => {
            button.addEventListener('click', function () {
                const tabId = this.dataset.tab;

                if (!tabId) return; // Proveri da li `tabId` postoji

                gsap.timeline()
                    .to(points, {
                        duration: 0.4,
                        opacity: 0,
                        scale: 0.5,
                        y: -120,
                        ease: "power2.in",
                        onComplete: () => {
                            tabButtons.forEach(btn => btn.classList.remove('active'));
                            tabContents.forEach(content => content.classList.remove('active'));

                            this.classList.add('active');
                            const newActiveTab = document.getElementById(tabId);

                            if (newActiveTab) { // Proveri da li `newActiveTab` postoji
                                newActiveTab.classList.add('active');

                                gsap.set(points, { y: 120 });
                                gsap.to(points, {
                                    duration: 0.4,
                                    opacity: 1,
                                    scale: 1,
                                    y: 0,
                                    stagger: 0.04,
                                    ease: "back.out(1.3)",
                                });

                                if (newActiveTab.id === 'summer' && firstVisitSummer) {
                                    activateDefaultPoint(newActiveTab);
                                    firstVisitSummer = false;
                                } else if (newActiveTab.id === 'winter' && firstVisitWinter) {
                                    activateDefaultPoint(newActiveTab);
                                    firstVisitWinter = false;
                                }
                            }
                        }
                    });
            });
        });
    }
};

export default BigMap;
