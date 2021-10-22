$(document).ready(function(){
 $('.slaider-top').slick({
	lazyLoad:'ondemand',
 	autoplay: true,
 	speed: 1500,
 	fade: true,
 	dots: true,
 	arrows: false,
	centerMode: true,
 });

 $('.slaider-bot').slick({
 	slidesToShow: 3,
  	slidesToScroll: 1,
  	autoplay: true,
  	autoplaySpeed: 0.1,
  	speed: 1500,
 });
 
});

/*PopUp*/

