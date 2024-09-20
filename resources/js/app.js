import './bootstrap';

import '../sass/app.scss';

import '../css/app.css';

import '@splidejs/splide/dist/css/splide.min.css';
import Splide from '@splidejs/splide';

window.Splide = Splide;

document.addEventListener('DOMContentLoaded', function () {
    const slides = ['splide', 'splide2', 'splide3', 'splideProjects'];

    slides.forEach((val) => {
        if (document.getElementById(val)) {
            new Splide('#' + val, {
                type       : 'slide',
                perPage    : 3,
                perMove    : 1,
                wheel      : true,
                gap        : '2rem',
                omitEnd    : true,
            }).mount();
        }
    });
});

// JavaScript to alternate positions of timeline items
const timelineItems = document.querySelectorAll('.timeline-item');
timelineItems.forEach((item, index) => {
    if (index % 2 === 0) {
        item.classList.add('top');
    } else {
        item.classList.add('bottom');
    }
});


