import './bootstrap';
import 'bootstrap';
import '@popperjs/core';
import AOS from 'aos';

// Initialize AOS
AOS.init({
    duration: 1000,
    easing: 'ease-out-cubic',
    once: false,
    mirror: true
});

// Scroll Progress and Navbar Background
window.onscroll = function() {
    updateScrollProgress();
    toggleNavbarBg();
};

function updateScrollProgress() {
    const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolled = (winScroll / height) * 100;
    document.getElementById("scroll-progress").style.width = scrolled + "%";
}

function toggleNavbarBg() {
    const nav = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
}
