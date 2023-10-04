$(function(){
	$(".menuToggle").on("click", function() {
		$(".menuNav").slideToggle(300, function(){
			if($(this).css("display") === "none"){
				$(this).removeAttr("style"); } });
	});
});


//fancyBox ручный клик
let photosList = document.querySelector('ul.photos__list');
	if (photosList) {
	photosList.addEventListener('click', function(event) {
		if (event.target.hasChildNodes()) {
			if(event.target.children[0]) {
				if  (event.target.children[0].classList.contains('gallery__link')) {
					event.target.children[0].click();
				}
			}
		}
	});
}

    $('.catalog').dcAccordion({
        speed: 300
    });


	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		


	//==========OwlCarousel with auto-scrolling. Recommended dogs
	$('.owl-carousel.auto-scrolling ').owlCarousel({
		//default settings:
		autoplay:true,
		autoplayTimeout:10000,
        smartSpeed: 1000,
		autoplayHoverPause:true,
		loop:false,
		margin:10,
		nav:true,
		dots: true,
		navText: [],
		responsive:{
			0:{
				items:1
			},
			992:{
				items:2
			},
			1200:{
				items:3
			}
		}
	});



//==========OwlCarousel with auto-scrolling. Breed
$('.owl-carousel.breed-scroll').owlCarousel({
	//default settings:
	autoplay:true,
	autoplayTimeout:6000,
	autoplayHoverPause:true,
	loop:true,
	margin:10,
	nav:true,
	dots: false,
	navText: [],
	smartSpeed: 1000,
	responsive:{
		0:{
			items:1
		},
		768:{
			items:2
		},
		992:{
			items:3
		},
		1200:{
			items:4
		}
	}
});
	//==========Main page OwlCarousel
	// $('.owl-carousel').owlCarousel({
	// 	loop:true,
	// 	margin:0,
	// 	nav:true,
	// 	dots: true,
	// 	navText: [],
	// 	responsive:{
	// 		0:{
	// 			items:1
	// 		},
	// 		480:{
	// 			items:3
	// 		},
	// 		768:{
	// 			items:5
	// 		}
	// 	}
	// });


