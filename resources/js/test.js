var lax = require('lax.js');
require('vanilla.js');

window.onload = function() {

	lax.setup({
	    breakpoints: { small: 0, large: 992 }
	})

	const updateLax = () => {
		lax.update(window.scrollY)
		window.requestAnimationFrame(updateLax)
	}

	window.requestAnimationFrame(updateLax)



}

var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
       scrollDirection = "down";
   } else {
      scrollDirection = "up";
   }
   lastScrollTop = st;
});

var productCount = 0;
$(function(){
	$.each($('.homeProductContainer'), function(index, el) {
		$(el).attr("data-count", index);
	});
})
$(document).scroll(function(e){

	if($(".buying-content").length > 0){
		$.each($(".buying-content"), function(index, el) {
			
			const buyingContent = $(el);
			const buyingImage = $(".buying-image", el);
			const buyingContentScrollTop = (buyingContent.offset().top - $(document).scrollTop()) -150;
			console.log(buyingContentScrollTop);


			if(buyingContentScrollTop < 0 && -buyingContentScrollTop < buyingContent.height() - 100){
				console.log("fixed");
				buyingImage.css({
					position : "absolute",
					top:-buyingContentScrollTop
				})
			} else {
				console.log("nem fixed");
				position : "unset"
			}
		});
	}
		

	const elements = $('.homeProductContainer'); 
	if(elements.length > 0){

		$.each(elements, function(index, el) {
			if(!$(el).hasClass("wasFixed")){

				const $el = $(el);
				const isFixed = $el.hasClass('active');
				const parentScrollTop = ($el.parents("section").offset().top - $(document).scrollTop() - 85);

				if (parentScrollTop < 0 && !isFixed){
					$('.active').addClass('wasFixed').removeClass('active');
					$el.addClass("active");
					if(index == 0){
						$(el).addClass('fixedElement');
					}
					
					productScroller($(el).data("count"));
				}

				if (parentScrollTop > 0 && isFixed){
					$(".wasFixed").removeClass('wasFixed')
					$el.removeClass('active');
					if(index == 0){
						$(el).removeClass('fixedElement');
					}
				}
			}

			
		});

	}
	

});




function productScroller(productCount){
	
	console.log(productCount);
	// $('.homeProductContainer img').removeClass("active");
	// $('.homeProductContainer img[data-count="' + productCount + '"]').addClass("active");

	$('.homeProductContainer .slide-image').removeClass("active");
	$('.homeProductContainer .slide-image[data-count="' + productCount + '"]').addClass("active").animate({
		height:"unset"
	},500);

	$('.homeProductContainer .packshot').removeClass("active");
	setTimeout(function(){
		$('.homeProductContainer .packshot[data-count="' + productCount + '"]').addClass("active").animate({
			height:"unset"
		},250);
	},250);

	$('.homeProductContainer .load-animation').removeClass("animated").addClass('animated');

}


if($("#product-nav").length > 0){
	setTimeout(function(){
		const productNavTop = $("#product-nav").position().top;
		$(document).scroll(function(e){

			const $productNav = $("#product-nav-content");  //record the elem so you don't crawl the DOM everytime  
			const productNavTop = $productNav.position().top; // passing "true" will also include the top and bottom margin
			const productNavBottom = $productNav.position().top + $productNav.outerHeight(true); // passing "true" will also include the top and bottom margin
			const footerScrollTop = $(document).height() - $("footer").outerHeight(true) - $(window).scrollTop() - 100; 

			if(productNavBottom > footerScrollTop){
				console.log("asd");
				$("#product-nav").css("top", footerScrollTop - $productNav.outerHeight(true) + 85);
			} else {
				$("#product-nav").css("top", 85);
			}
		});
	},500)
}


// Supported Presets
// Preset	Default Strength
// linger	n/a
// lazy	100
// eager	100
// lazy	100
// slalom	50
// crazy	n/a
// spin	360
// spinRev	360
// spinIn	360
// spinOut	360
// blurInOut	40
// blurIn	40
// blurOut	40
// fadeInOut	n/a
// fadeIn	n/a
// fadeOut	n/a
// driftLeft	100
// driftRight	100
// leftToRight	1
// rightToLeft	1
// zoomInOut	0.2
// zoomIn	0.2
// zoomOut	0.2
// swing	30
// speedy	30
// Supported Attribute Keys
// Transforms

// Transform	Key
// opacity	data-lax-opacity
// translate	data-lax-translate
// translateX	data-lax-translate-x
// translateY	data-lax-translate-y
// scale	data-lax-scale
// scaleX	data-lax-scale-x
// scaleY	data-lax-scale-y
// skew	data-lax-skew
// skewX	data-lax-skew-x
// skewY	data-lax-skew-y
// rotate	data-lax-rotate
// rotateX	data-lax-rotate-x
// rotateY	data-lax-rotate-y
// Filters (note - these may be unperformant on low powered machines)

// Filter	Key
// brightness	data-lax-brightness
// contrast	data-lax-contrast
// hue-rotate	data-lax-hue-rotate
// blur	data-lax-blur
// invert	data-lax-invert
// saturate	data-lax-saturate
// grayscale	data-lax-grayscale
// Other

// Filter	Key
// background position	data-lax-bg-pos
// background position-x	data-lax-bg-pos-x
// background position-y	data-lax-bg-pos-y