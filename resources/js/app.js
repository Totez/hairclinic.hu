require('./bootstrap');
require('./cookiebar.js');
var lax = require('lax.js');
// require('./test');


var navHeight = 104;
var counter;
var lastScrollTop = 0;
var currentSection = 0;
var isScroll = true;
var animationLoaded = false;



$(function(){
	//"takaró" elem eltüntetése / megjelenítése
	setTimeout(function(){
		$(".blanket, .blanket img").fadeOut();
	},400);

	if($(".blanket")){
		$("#main-menu a").click(function(e){
			e.preventDefault();
			const url = $(this).attr("href");
			console.log(url);
			$(".blanket, .blanket img").fadeIn(300, function(){
				window.location.href = url;
			});
			return false;
		});
	}

	//layout button
	$(".lyt-btn").click(function(){
		$("#layout").fadeToggle();
	});


	// Lax.js inicializáslá
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

	//Kezdeti oldalbetöltés késleltetve
	setTimeout(function(){
		if($(".loadingPage").length > 0){

			$(".loadingPage img").fadeIn(300, function(){

				setTimeout(function(){

					$(".loadingPage").fadeOut(200, function(){

						visibleAnimatedItem(true);

					});


				},300)

			});
		} else {
			visibleAnimatedItem(false);
		}
	},300)


	function visibleAnimatedItem(animation){
		if(animation){
			backCounter(0, $(".load-animation").length, function(){
				// console.log("Vége");
				animationLoaded = true;
				$("body").removeClass("disable-scrolling");

			},function(i){
				const elem = $($(".load-animation")[i]);
				// console.log(elem);


				if(elem.hasClass("fadeIn")){
					elem.animate({
						opacity : 1
					},100);
					elem.addClass("w-animate");
				}


				if(elem.hasClass("slideIn")) {
					elem.addClass("animated");
				}


				if(elem.hasClass("widthIn")) {
					elem.animate({
						right : 0
					},100, function(){
						setTimeout(function(){
							$("span", elem).animate({
								opacity : 1
							},200);
						},200)
					});
				}



			}, 150);
		} else{
			$(".load-animation").css({
				transition:0,
				visibility : "visible",
				opacity : 1
			});
			$(".widthIn").css({
				transition:0,
				right : 0,
			});
		}
	}

	//egyszerű számláló
	// paraméterek: mettől, meddig, callback, callback, két szám közti eltelt idő, átfedés
	function backCounter(x, y, onEnd, onCount, duration = 300, overlap = false){
		// clearInterval(counter);
		counter = setInterval(function(){
			if(x == y){
				clearInterval(counter);
				onEnd();
			} else {
				onCount(x);
			}
			x++;
		}, duration);
	}

	$("a.scroll-to-element").click(function(e) {
		e.preventDefault();
		const targetElementId = "#" + $(this).data('target');
		console.log(targetElementId);
	    $('html, body').animate({
	        scrollTop: $(targetElementId).position().top
	    }, 800);
	});

	//collapse részek
	$('.hc-collapse-content').on('shown.bs.collapse', function (e) {
		const el = $(this);
		$(".content", el).animate({
			opacity : 1
		}, 500);
	});

	$('.hc-collapse-content').on('hide.bs.collapse', function (e) {
		const el = $(this);
		if(!el.hasClass("can-collapse")){
			console.log("if");
			el.addClass("can-collapse");

			$(".content", el).animate({
				opacity : 0
			}, 500, function(){
				$(el).collapse('hide');
			});

			return false;
		} else {
			console.log("else");
			el.removeClass("can-collapse");
			return true;
		}
	});

	$.each($('.homeProductContainer'), function(index, el) {
		$(el).attr("data-count", index);
	});


	//autoscroll
	const sections = $("section");
	$.each(sections, function(index, section) {
		$(section).attr("data-current-section", index);
	});


	//loadingra kinyíló fehér hátterek
	if($(".loaded-white-bg")){
		setTimeout(function(){

			whiteBgAnimation($(".loaded-white-bg")[0], function(){
				const elements = $(".triggerFadeIn");
				backCounter(0, elements.length, function(){
					// console.log("Végigért az összesen");
				}, function(i){
					console.log(elements[i]);
					$(elements[i]).animate({
						opacity: 1
					},400);
				}, 100);
			});

		},400);
	}


	function whiteBgAnimation(el, onEnd){
		$(el).animate({
			width: "100%",
			opacity: 1
		},600, function(){
			$(el).addClass("animated");
			onEnd();
		});
	}

	$(document).scroll(function(e){
		// console.log("scrolling...");

		//vásárlás betöltése EZT ITT ÁT KELL ÍRNI!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
		const elements = $('.lazy-load-container'); 
		if(elements.length > 0){
			// console.log("------------------------------------");
			$.each(elements, function(index, el) {
				const llContainerTop =  $(document).scrollTop() + $(window).height() - $(el).offset().top;
				// console.log(llContainerTop, $(el).hasClass('loaded'));
				if(!$(el).hasClass('loading')){
					if(llContainerTop > 200){

						const lazyLoadElements = $(".lazy-load", el);
						// $.each(lazyLoadElements, function(index, elem) {
						// 	// console.log(elem);

							backCounter(0, lazyLoadElements.length, function(){
								// console.log("Végig ért az összesen");
							}, function(i){
								const elem = $($(lazyLoadElements)[i]);
								// console.log("megjelenítés: ", elem);
								elem.animate({
									opacity : 1
								},300);
							}, 200);
						// });

						//ha megkapja ezt a classt, többször az ő gyrekeit már nem figyeljük
						$(el).addClass("loading");
					}
				}
			});
		}	

		//scrollozás irányának lekérése
		var st = $(this).scrollTop();
		if (st > lastScrollTop){
		   scrollDirection = "down";
		} else {
		  scrollDirection = "up";
		}
		lastScrollTop = st;


		//autoscroll
		if(animationLoaded){
			const bodyScrollTop = $(document).scrollTop();
			const sections = $(document).find('[data-current-section]');
			if(isScroll){
				isScroll = false;
				$("body").addClass("disable-scrolling");

				if(scrollDirection == "up"){
					if(currentSection > 0){
						currentSection--;
					}
				} else {
					if(currentSection < sections.length){
						currentSection++;
					}
				}

				e.preventDefault();

				console.log("autoscrolling...");

				const targetSection = $(sections[currentSection]);
				let duration = targetSection.data("slide-duration");
				if(duration == undefined) duration = 500;

				$([document.documentElement, document.body]).animate({
				    scrollTop: targetSection.offset().top
			    }, duration, function(){
			    	setTimeout(function(){
				    	$("body").removeClass("disable-scrolling");
				    	isScroll = true;
			    	},500);
			    });
			}
		}


		// Termékoldali scroll események
		const productNav = $("#product-nav");
		if(productNav.length > 0){
			const footerTop = $('footer').offset().top - $(document).scrollTop() - $(window).height();
			if(footerTop < 0){
				productNav.css({
					top: footerTop + navHeight
				});
			}
		}

		//kinyíló fehér hátterek
		if($(".bg-white-div").length > 0){
			const bgWhiteDiv = $(".bg-white-div");
			$.each(bgWhiteDiv, function(index, el) {
				const bgDivTop =  $(document).scrollTop() + $(window).height() - $(el).offset().top - $(el).height();
				if(bgDivTop > 0){

					if(!$(el).hasClass('animated')){
						whiteBgAnimation(el, function(){
							console.log("kinyílt");
						});
					}


					// const max = 0.8 * $(window).height() - navHeight;
					// const percent = (bgDivTop / max) * 100;
					
					// if(percent <= 100){
					// 	if(!$(el).hasClass('sizing')){
					// 		$(el).addClass('sizing');
					// 	}
						
					// 	if(!$(el).hasClass('sized')){
					// 		$(el).css({
					// 			width : percent + "%",
					// 			opacity : percent + "%"
					// 		});
					// 	}

					// } else {
					// 	if(!$(el).hasClass('sized')){
					// 		$(el).addClass('sized');
					// 		$(el).css({
					// 			width :  "100%",
					// 			opacity : "100%"
					// 		});
					// 	}
					// }
				}	
			});
		}


		//főoldali scroll események
		const homeContainers = $('.homeProductContainer'); 
		if(homeContainers.length > 0){
			
			$.each(homeContainers, function(index, el) {
				if(!$(el).hasClass("wasFixed")){

					const $el = $(el);
					const isFixed = $el.hasClass('active');
					const parentScrollTop = ($el.parents("section").offset().top - $(document).scrollTop() - navHeight);
					const productCount = $(el).data("count");

					if (parentScrollTop < 0 && !isFixed){
						$('.homeProductContainer.active').addClass('wasFixed').removeClass('active');
						$el.addClass("active");
						if(index == 0){
							$(el).addClass('fixedElement');
						}
						
						productScroller(productCount);

					}

					if (parentScrollTop > 0 && isFixed){
						$(".wasFixed").removeClass('wasFixed')
						$el.removeClass('active');
						if(index == 0){
							$(el).removeClass('fixedElement');
						}
					}
					const footerTop = $('footer').offset().top - $(document).scrollTop() - $(window).height();

					if(footerTop < 0){
						$(".fixedElement").css({
							top: navHeight + footerTop
						})
					}
				}
			});
		}
		
	});
})






//főoldali parallax termék csere
function productScroller(productCount){

	if(productCount == 0){
		$("#packshots").animate({
			opacity : 1
		}, 600, function(){

			setTimeout(function(){

				$("#product-images").animate({
					opacity : 1
				},600);

			},100);

			setTimeout(function(){

				$("#descriptions").animate({
					opacity : 1
				},600);

			},800);

		});
	}

	$('.homeProductContainer .slide-image').removeClass("active");
	$('.homeProductContainer .slide-image[data-count="' + productCount + '"]').addClass("active").animate({
		height:"unset"
	},500);

	$('.homeProductContainer .packshot').removeClass("active");
	$('.homeProductContainer .packshot[data-count="' + productCount + '"]').addClass("active");

	$('.products .title').removeClass("active");
	$('.products .title[data-count="' + productCount + '"]').addClass("active");

	$('.product-descriptions .description').removeClass("active");
	$('.product-descriptions .description[data-count="' + productCount + '"]').addClass("active");

	$('.indicator-wrapper .indicator').removeClass("active");
	$('.indicator-wrapper .indicator[data-count="' + productCount + '"]').addClass("active");
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
				$("#product-nav").css("top", footerScrollTop - $productNav.outerHeight(true) + navHeight);
			} else {
				$("#product-nav").css("top", navHeight);
			}
		});
	},500)
}




//placeholderek a contact formhoz

$(function(){

	$(".contactInput input, .contactInput textarea").keydown(function(event) {

		const placeholder = $(this).parent().find(".placeholder");
		
		placeholder.addClass("completed");
	});

	$(".contactInput input, .contactInput textarea").keyup(function(event) {

		const placeholder = $(this).parent().find(".placeholder");
		const error = $(this).parent().find(".error");
		console.log(placeholder);

		if($(this).val() !==  ""){
			placeholder.addClass("completed");
			error.hide();
		} else {
			placeholder.removeClass("completed");
			error.fadeIn();
		}
	});
})



$(function(){
	$("#sendMessage").click(function(e){
		e.preventDefault();
		const form = $("this").parents("form");

		$.ajax({
			url: form.attr("action"),
			type: 'default GET (Other values: POST)',
			dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
			data: {param1: 'value1'},
		})
		.done(function(data) {
			if(data.success){
				$("#contactModal").modal("hide");
				$("#messageModal").modal("open");
			} else {
				alert("hiba");
			}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});

	});
	
})