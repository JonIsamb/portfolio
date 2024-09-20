import '@splidejs/splide/dist/css/splide.min.css';
import Splide from '@splidejs/splide';

window.Splide = Splide;

document.addEventListener('DOMContentLoaded', function () {
    new Splide('#splide', {
        type       : 'slide',
        perPage    : 3,
        perMove    : 1,
        wheel      : true,
        gap        : '2rem',
    }).mount();

    new Splide('#splide2', {
        type       : 'slide',
        perPage    : 3,
        wheel      : true,
        gap        : '2rem'
    }).mount();

    new Splide('#splide3', {
        type       : 'slide',
        perPage    : 3,
        wheel      : true,
        gap        : '2rem'
    }).mount();
});