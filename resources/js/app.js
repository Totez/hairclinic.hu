require('./bootstrap');
// require('parallax-js');
// window.paroller = require('paroller.js');
// require('lax.js');
var ScrollMagic = require('scrollmagic');

$(function(){




// init controller
var controller = new ScrollMagic.Controller();

var scene = new ScrollMagic.Scene({
  triggerElement: '#ingredients',
  offset: 100, // start scene after scrolling for 100px
  duration: 400 // pin the element for 400px of scrolling
})
.addTo(controller); // Add Scene to ScrollMagic Controller


    // $(".paroller, [data-paroller-factor]").paroller({
    //     factor: 0.1,            // multiplier for scrolling speed and offset
    //     factorXs: 0,           // multiplier for scrolling speed and offset
    //     type: 'foreground',     // background, foreground
    //     direction: 'horizontal', // vertical, horizontal
    //     transition: 'transform 0s' // CSS transition
    // });


	//loading
	setTimeout(function(){
		if($(".loadingPage").length !== 0){

			$(".loadingPage img").fadeIn(300, function(){

				setTimeout(function(){

					$(".loadingPage").fadeOut(200, function(){

						visibleAnimatedItem(true);

					});


				},0)

			});
		} else {
			visibleAnimatedItem(false);
		}
	},0)


	function visibleAnimatedItem(animation){
		if(animation){
			backCounter(0, $(".load-animation").length, function(){
				// console.log("Vége");
			},function(i){
				$($(".load-animation")[i]).addClass("animated");
			});
		} else{
			$(".load-animation").css({
				visibility : "visible",
				opacity : 1
			});
		}
	}




	let counter;
	function backCounter(x, y, onEnd, onCount){
		clearInterval(counter);
		counter = setInterval(function(){
			if(x == y){
				clearInterval(counter);
				onEnd();
			} else {
				onCount(x);
			}
			x++;
		},150);
	}

	$("a.scroll-to-element").click(function(e) {
		e.preventDefault();
		const targetElementId = "#" + $(this).data('target');
		console.log(targetElementId);
	    $('html, body').animate({
	        scrollTop: $(targetElementId).position().top
	    }, 800);
	});

		// setTimeout(function(){
		// 	const productNavTop = $("#product-nav").position().top;
		// 	$(document).scroll(function(e){
				
		// 		const x = $(window).scrollTop() + $(window).height() - $("#buying").offset().top;
				
		// 		// console.log(productNavTop);

		// 		if(x > 300){
		// 			console.log(productNavTop);
		// 			$("#product-nav").css("top", -x + 300 + 85);
		// 		} else {
		// 			$("#product-nav").css("top", 85);
		// 		}

		// 	});
		// },500)
		


	// var scene = document.getElementById('scene');
	// var parallaxInstance = new Parallax(scene, function(){
	// 	invertY : false
	// });





// 	var breakPoints = {}
// 	var i = 0;

// 	$.each($('.p-anim'), function(index, el) {
// 		breakPoints[index] = {
// 			top : $(el).offset().top,
// 			bottom : $(el).offset().top + $(el).height(),
// 			elem : $(el)
// 		};
// 	});



// $(document).scroll(function(e){
// 		const elem = $($('.p-anim')[i]);


// 		const bodyteteje = $(window).scrollTop();
// 		const bodyalja = $(window).scrollTop() + $(window).height();

// 		const elemteteje = bodyteteje - elem.position().top;
// 		const elemalja = bodyteteje + elem.height();

// 		// console.log(bodyteteje, bodyalja);
// 		// console.log(elemteteje, elemalja);
// 		console.log(bodyteteje);
// 		if(elemteteje > (-$(window).height()) && (elemteteje + elem.height()) < (1800)  ){
// 			console.log("x");
// 		}

// });




	// var i = 0;
	// var isScroll = true;
	// $(document).scroll(function(e){
	// 	const docTop = $(document).scrollTop();
	// 	const docBottom = $(document).scrollTop() + $(window).height();
	// 	const elemScrollTop = docTop - breakPoints[0].elem.offset().top;

	// 	// if(0 < elemScrollTop){
	// 		$.each(breakPoints, function(index, section){
	// 			if(section.top < docBottom && section.top > docTop){
	// 				if(isScroll){
	// 					isScroll = false;
	// 					console.log(index);
	// 					i++;
	// 				}
	// 				if(i == index){
	// 					isScroll = true;
	// 				}
	// 			}
	// 		})
	// 	// }
	// });




	// var i = 0;
	// var isScroll = true;
	// $(document).scroll(function(e){
	// 	console.log(i + ". elem figyelése..");
	// 	const elem = $($('.p-anim')[i]);
	// 	const docScrollTop = $(document).scrollTop();
	// 	const elemScrollTop = docScrollTop - elem.offset().top;

	// 		if(0 <= elemScrollTop){
	// 			if(isScroll){
	// 				isScroll = false;
	// 				elem.addClass("p-anim-fixed")
	// 				console.log("fixed");
	// 				i++;
	// 			}
	// 		} else {
	// 			elem.removeClass("p-anim-fixed")
	// 			console.log("nem fixed");
	// 		}


	// 	console.log(elemScrollTop);
	// });




})