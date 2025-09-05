import Swiper from "swiper";
import { Pagination } from "swiper/modules";
import "swiper/css/pagination";

// import "swiper/css";
console.log("swipersdfsdfs");
const mainSliders = document.querySelectorAll(".main-slider");

if (mainSliders) {
  mainSliders.forEach((slider) => {
    const pagination = slider.parentNode.querySelector(".swiper-pagination");

    new Swiper(slider, {
      modules: [Pagination],
      slidesPerView: 1,
      spaceBetween: 20,
      pagination: {
        el: pagination ? pagination : null,
        dynamicBullets: pagination && pagination.dataset.dynamic ? true : false,
        clickable: true,
      },
    });
  });
}
