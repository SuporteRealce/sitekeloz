$('.btn-nav').click(function(){
	$(this).toggleClass('toggle');
	$('.nav-responsive').toggleClass('menu-ativo');
	$('.nav-responsive ul').toggleClass('ul-ativo');
});
$('.nav-responsive ul li a').click(function(){
	$('.nav-responsive').removeClass('menu-ativo');
	$('.nav-responsive ul').removeClass('ul-ativo');
	$('.btn-nav').removeClass('toggle');
})

$(window).on('scroll', function(){
	if($(window).scrollTop()){
		$('.nav').addClass('menu-fixado');
		$('.nav-responsive').addClass('menu-fixado');
	} else {
		$('.nav').removeClass('menu-fixado');
		$('.nav-responsive').removeClass('menu-fixado');
	}
});

$(window).on('load', function(){
	if($(document).hasClass('nojq')){
		alert('ok');
	}
});

$(document).ready(function($) {
	$(".scroll").click(function(event){
		event.preventDefault();
		$('html,body').animate({
			scrollTop:$(this.hash).offset().top - 100
		},1000);
	});
});

// validador


// scroll
debounce = function(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments; 
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout( later, wait); 
		if (callNow) func.apply(context, args);
	};
};

(function() {
	var $target = $('.anime'),
		animationClass = 'anime-start', 
		offset = $(window).height() * 3/4;

	function animeScroll() {
		var documentTop = $(document).scrollTop();

		$target.each(function() {
			var itemTop = $(this).offset().top;
			if (documentTop > itemTop - offset) {
				$(this).addClass(animationClass);
			} else {
				$(this).removeClass(animationClass);
			}
		});
	};

	animeScroll();

	$(document).scroll(debounce(function() {
		animeScroll();
		console.log('teste');
	}, 200));		
}());

