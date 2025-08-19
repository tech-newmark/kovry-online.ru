import Swiper from "swiper";
// import "swiper/css";
console.log("swipersdfsdfs");
const mainSliders = document.querySelectorAll(".main-slider");

if (mainSliders) {
	mainSliders.forEach((slider) => {
		new Swiper(slider, {
			slidesPerView: 1,
			spaceBetween: 20,
		});
	});
}
