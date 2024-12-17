import "./bootstrap";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

import Swiper from "swiper";

document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 1,
        slidesPerView: 2.5,
        breakpoints: {
            1034: {
                slidesPerView: 5.5,
                spaceBetween: 10,
            },

            768: {
                slidesPerView: 4.5,
                spaceBetween: 10,
            },

            640: {
                slidesPerView: 2.5,
                spaceBetween: 1,
            },
        },
    });
});
