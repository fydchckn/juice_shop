const mynav = document.querySelector('.first-navagation');
const navtoggle = document.querySelector('.mobile-toggle');
const header = document.querySelector('.primary-header');


navtoggle.addEventListener('click', () => {
    mynav.hasAttribute('nav-open') ? mynav.getAttribute("aria-expanded", false) : 
    mynav.getAttribute("aria-expanded", true);
    mynav.toggleAttribute('nav-open');
    header.toggleAttribute('data-overlay');

});