function setCssVariables(){
	document.documentElement.style.setProperty('--w-height',window.innerHeight + 'px');
	document.documentElement.style.setProperty('--w-width',document.body.clientWidth + 'px');
	var topBannerHeight = $('.top-banner').filter(':visible').innerHeight() || 0;
	$('.header')[0].style.setProperty('--topMargin',topBannerHeight + 'px');
}
setCssVariables();
$(window).resize(setCssVariables);


$(window).on('load scroll',function(){
	var topBannerHeight = $('.top-banner').filter(':visible').innerHeight() || 0;
	if(scrollY>topBannerHeight){
		$('.header').addClass('header--fixed');
	}else{
		$('.header').removeClass('header--fixed');
	}
});

$('.top-banner__close-btn').click(function(e){
	e.preventDefault();
	$(this).parents('.top-banner').slideUp(300,function(){
		$('.header')[0].style.setProperty('--topMargin',0);
	});	
})

//поля с плавающим placeholder
$('.field__input').each(function(){
	if(this.value){
		$(this).parents('.field').addClass('.field--fill');
	}
})
$('.field__input').change(function(){
	if(this.value){
		$(this).parents('.field').addClass('field--fill');
	}else{
		$(this).parents('.field').removeClass('field--fill');
	}
})
//
$('.small-slider').on('beforeChange',function(e,slick,currentSlide,nextSlide){
	var nextDotIndex = (nextSlide+1==slick.slideCount) ? 0: nextSlide+1;
	slick.$dots.children().hide().eq(nextDotIndex).fadeIn(200);
})
$('.small-slider').slick({
	arrows: false,
	speed: 300,
	fade: true,
	swipe: false,
	accessability: false,
	adaptiveHeight: true,
	dots: true,
	dotsClass: 'small-slider__dots',
	customPaging: function(slick,i){
		return  slick.$slides.eq(i).data('caption');
	}
})
$('.small-slider__item').click(function(){
	$(this).parents('.slick-slider').slick('slickNext');
})
$('.reviews__slider').slick({
	variableWidth: true,
	centerMode: true,
	centerPadding: 0,
	arrows: false,
	dots: true,
	dotsClass: 'btn-nav reviews__dots',
	customPaging: function(slick,i){
		return slick.$slides.eq(i).data('title');
	}
})

$('.image-link').magnificPopup({type:'image'});