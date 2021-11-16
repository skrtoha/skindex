'use strict';

(function() {
    const menuToggle = document.querySelector('.main-nav__toggle');

    if (menuToggle) {
        const mainNav = document.querySelector('.main-nav');

        menuToggle.addEventListener('click', () => {
            mainNav.classList.toggle('main-nav--opened');
        });
    }
})();
'use strict';

(function() {
    const header = document.querySelector('.page-header');

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 100) {
            header.classList.add('page-header--scroll');
        }

        if (window.pageYOffset === 0) {
            header.classList.remove('page-header--scroll');
        };
    });
})();