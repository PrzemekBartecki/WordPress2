jQuery( document ).ready(function() {

	jQuery('#mainImg').slick({
		infinite: true,
		speed: 500,
		fade: true,
		autoplay: true,
		autoplaySpeed: 10000,
		cssEase: 'linear',
		adaptiveHeight: true
	});

jQuery('.nav-toggle').click(function(){
	jQuery('.menu-leftmenu-container').toggleClass("show");
});

jQuery('.nav-kreo').click(function(){
	jQuery('#kreoMenu').toggleClass("show2");
});



});