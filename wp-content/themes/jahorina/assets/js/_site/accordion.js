'use strict';
const Accordion = {

    init: function () {
        let titles = document.querySelectorAll('.js-title');
        let texts = document.querySelectorAll('.js-text');

        titles.forEach(function (title) {
            title.addEventListener('click', function (e) {
                let currentText = e.currentTarget.nextElementSibling;

                if (currentText.classList.contains('active')) {
                    currentText.classList.remove("active");
                    e.currentTarget.classList.remove("active"); // Ukloni active sa naslova
                } else {
                    texts.forEach(function (item) {
                        item.classList.remove("active");
                    });
                    titles.forEach(function (item) {
                        item.classList.remove("active"); // Ukloni active sa svih naslova
                    });
                    currentText.classList.add("active");
                    e.currentTarget.classList.add("active"); // Dodaj active na trenutni naslov
                }
            });
        });
    }
};

export default Accordion;

