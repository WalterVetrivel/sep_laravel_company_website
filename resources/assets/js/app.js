window.onscroll = function () {
    toggleStickyNavbar();
};

var navbar = document.getElementById("navbar");
var landing = document.getElementById("landing");

function toggleStickyNavbar() {
    if (window.pageYOffset >= 60) {
        navbar.classList.remove("sticky-navbar");
        navbar.classList.add("fixed-top");
        landing.classList.add("mt-5");
    } else {
        navbar.classList.add("sticky-navbar");
        navbar.classList.remove("fixed-top");
        landing.classList.remove("mt-5");
    }
}

var scroll = new SmoothScroll('a[href*="#"]', {
    offset: 80,
    clip: true
});
