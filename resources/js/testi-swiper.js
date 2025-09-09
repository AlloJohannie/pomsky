/*
Template Name: Landinger - Multipurpose Tailwind CSS Landing Page Template
Version: 1.0.0
Author: Coderthemes
Email: support@coderthemes.com
*/


// Import Swiper and modules

import "swiper/css/bundle";
import Swiper from "swiper/bundle";

var swiper = new Swiper(".testiSwiper", {
    loop: true,
    navigation: {
        nextEl: ".custom-next",
        prevEl: ".custom-prev",
    },
});
