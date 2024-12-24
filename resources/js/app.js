import './bootstrap';

import '../sass/app.scss';

import '../css/app.css';

import '@splidejs/splide/dist/css/splide.min.css';
import Splide from '@splidejs/splide';

window.Splide = Splide;

var splideInstances = [];
const slides = ['splide', 'splide2', 'splide3', 'splideProjects'];

document.addEventListener('DOMContentLoaded', function () {
    let perPage = 3;
    if (document.body.clientWidth < 620) {
        perPage = 1;
    } else if (document.body.clientWidth < 1000) {
        perPage = 2;
    }

    slides.forEach((val) => {
        if (document.getElementById(val)) {
            splideInstances[val] = new Splide('#' + val, {
                type       : 'slide',
                perPage    : perPage,
                perMove    : 1,
                gap        : '2rem',
                omitEnd    : true,
                autoplay   : true,
            }).mount();
        }
    });
});

window.onresize = function(event) {
    let options = { perPage: 3, fixedWidth: null};
    if (document.body.clientWidth < 900) {
        options = { perPage: 1, fixedWidth: "100%" };
    } else if (document.body.clientWidth < 1200) {
        options = { perPage: 2, fixedWidth: null };
    }

    slides.forEach((val) => {
        if (splideInstances[val]) {
            splideInstances[val].options = options;
            splideInstances[val].refresh();
        }
    });
};

// JavaScript to alternate positions of timeline items
const timelineItems = document.querySelectorAll('.timeline-item');
timelineItems.forEach((item, index) => {
    if (index % 2 === 0) {
        item.classList.add('top');
    } else {
        item.classList.add('bottom');
    }
});


