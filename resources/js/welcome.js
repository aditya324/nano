import Swiper from "swiper";
import { Autoplay, Navigation, Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

const initWelcomeSwiper = () => {
    const element = document.querySelector(".mySwiper");
    if (!element) return;

    new Swiper(".mySwiper", {
        modules: [Autoplay, Pagination, Navigation],
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
};

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initWelcomeSwiper);
} else {
    initWelcomeSwiper();
}
