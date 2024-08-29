const mobiletoggle = document.querySelector('.mobile-nav');
const header = document.querySelector('.primary-header');
const mynavi = document.querySelector('.my-navigation');

mobiletoggle.addEventListener("click", ()=> {
    mynavi.hasAttribute("nav-open") ? mynavi.getAttribute("aria-expanded", false) :  mynavi.getAttribute("aria-expanded", true);
    mynavi.toggleAttribute("nav-open");
    header.toggleAttribute('data-overlay');
});

