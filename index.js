const mynav = document.querySelector('.first-navagation');
const navtoggle = document.querySelector('.mobile-toggle');
const header = document.querySelector('.primary-header');


navtoggle.addEventListener('click', () => {
    const expanded = navtoggle.getAttribute("aria-expanded") === "true";
    navtoggle.setAttribute("aria-expanded", !expanded);

    mynav.toggleAttribute('nav-open');
    header.toggleAttribute('data-overlay');

});