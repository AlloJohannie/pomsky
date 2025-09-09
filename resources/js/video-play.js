/*
Template Name: Landinger - Multipurpose Tailwind CSS Landing Page Template
Version: 1.0.0
Author: Coderthemes
Email: support@coderthemes.com
*/


const video = document.getElementById("myVideo");
const toggleBtn = document.getElementById("toggleBtn");
const playIcon = document.getElementById("playIcon");
const pauseIcon = document.getElementById("pauseIcon");

toggleBtn.addEventListener("click", () => {
    if (video.paused) {
        video.play();
        playIcon.classList.add("hidden");
        pauseIcon.classList.remove("hidden");
    } else {
        video.pause();
        pauseIcon.classList.add("hidden");
        playIcon.classList.remove("hidden");
    }
});