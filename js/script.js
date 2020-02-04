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
//поиск в шапке
$('.search-btn').click(function(e){
	e.preventDefault();
	$('.header__search').addClass('header__search--active').find('input').focus();
})
$('.search-form__close-btn').click(function(){
	$(this).parents('.search-form').removeClass('header__search--active');
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
$('.services-block').each(function(index,element){	
	$(this).find('.services-block__slider').slick({
		slidesToShow: 5,
		touchThreshold: 100,
		prevArrow: '<span class="services-block__arrow services-block__arrow--prev far fa-angle-left" />',
		nextArrow: '<span class="services-block__arrow services-block__arrow--next far fa-angle-right" />',
		appendArrows: '.services-block:eq('+index+') .services-block__nav'
	})
})
$('.reviews__slider').slick({
	variableWidth: true,
	centerMode: true,
	centerPadding: 0,
	prevArrow: '<span class="slick-arrow reviews__arrow reviews__arrow--prev far fa-angle-left" />',
	nextArrow: '<span class="slick-arrow reviews__arrow reviews__arrow--next far fa-angle-right" />',
	dots: true,
	dotsClass: 'btn-nav reviews__dots',
	customPaging: function(slick,i){
		return slick.$slides.eq(i).data('title');
	}
})
//модальные окна
$('.image-link').magnificPopup({type:'image'});
$('.modal-link').magnificPopup({type:'inline'});

//Навигация по странице
function pageNav(entries, observer){
  var element = entries[0].target;
	if(entries[0].isIntersecting && element.id){
		$('.page-menu .active').removeClass('active');
		$('.page-menu a').filter('[href="#'+element.id+'"]').parent().addClass('active');
	}
};
$('.page-section').each(function(){
	var sectionObserver = new IntersectionObserver(pageNav,{threshold: 1});
	sectionObserver.observe(this);
})

$('.page-menu a').click(function(e){
	e.preventDefault();
	var target = $(this.hash);
	if(target.length){
		$('html,body').animate({
			scrollTop: target.offset().top - $('.header').innerHeight()
		})
	}
})