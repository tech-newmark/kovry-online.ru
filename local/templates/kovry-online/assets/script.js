const mainSliders = document.querySelectorAll(".main-slider");

if (mainSliders) {
	mainSliders.forEach((slider) => {
		new Swiper(slider, {
			slidesPerView: 1,
			spaceBetween: 20,
		});
	});
}
