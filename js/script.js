function setCssVariables(){
	document.documentElement.style.setProperty('--w-height',window.innerHeight + 'px');
	document.documentElement.style.setProperty('--w-width',document.body.clientWidth + 'px');
	document.documentElement.style.setProperty('--header-height',$('.header').innerHeight() + 'px');
	
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
	$('.header__menu').removeClass('header__menu--open');
	$('.menu-btn').removeClass('menu-btn--active');
})
$('.search-form__close-btn').click(function(){
	$(this).parents('.search-form').removeClass('header__search--active');
})
//меню в шапке
$('.menu-btn').click(function(){
	$(this).toggleClass('menu-btn--active');
	$('.header__menu').toggleClass('header__menu--open');
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

$('.select').blur(function(){
	$(this).removeClass('select--open');
})
$('.select__output').click(function(){
	$(this).parent('.select').toggleClass('select--open');
})
$('.select__list>li').click(function(){
	var value = $(this).text(),
			select = $(this).parents('.select');
			
	select.removeClass('select--open');
	select.find('.select__input').val(value).trigger('change');
})
$('.select__input').change(function(){
	var wrapper = $(this).parent('.select');
	
	wrapper.find('.select__output').text(this.value);
	if(this.value){
		wrapper.addClass('select--filled');
	}else{
		wrapper.removeClass('select--filled');
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
		appendArrows: '.services-block:eq('+index+') .services-block__nav',
		dotsClass: 'slick-dots services-block__dots',
		customPaging: function(){return ''},
		responsive: [
			{
				breakpoint: 1400,
				settings: {
					slidesToShow: 4
				}
			},{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					arrows: false,
					dots: true
				}
			},{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					arrows: false,
					dots: true
				}
			},{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					arrows: false,
					dots: true
				}
			}
		]
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
	},
	responsive: [
		{
			breakpoint: 992,
			settings: {
				variableWidth: false,
				centerMode: false,
				arrows: false,
				adaptiveHeight: true
			}
		}
	]
})
$('.slider-block__slider').slick({
	variableWidth: true,
	centerMode: true,
	centerPadding: 0,
	prevArrow: '<span class="slick-arrow slider-block__arrow slider-block__arrow--prev far fa-angle-left" />',
	nextArrow: '<span class="slick-arrow slider-block__arrow slider-block__arrow--next far fa-angle-right" />',
	dots: true,
	dotsClass: 'slick-dots slider-block__dots',
	customPaging: function(){return ''},
	responsive: [
		{
			breakpoint: 992,
			settings: {
				arrows: false
			}
		},{
			breakpoint: 768,
			settings: {
				arrows: false,
				variableWidth: false,
				centerMode: false,
				adaptiveHeight: true
			}
		}
	]
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
	/* if(!entries[0].isIntersecting && element.id){
		$('.page-menu a').filter('[href="#'+element.id+'"]').parent().removeClass('active');
	} */
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
//блок заказа
$('.order__nav>li').click(function(){
	var index = $(this).index();
	if(!$(this).is('.active')){
		$(this).addClass('active').siblings().removeClass('active');
		$(this).parents('.order').find('.order__tab').hide().eq(index).fadeIn(300);
	}
})
$('.order__dropdown-trigger').click(function(){
	$(this).toggleClass('order__dropdown-trigger--active');
	$(this).siblings('.order__dropdown-content').slideToggle(300);
})

//Отрисовка блоков с информацией о файлах и drag&drop
function printFileThumbs(element,files){
	var fileZone = $(element).parents('.file-field').find('.file-field__files');
	fileZone.empty();
	for(var i = 0;i<files.length; i++){
		var file = files[i],
				fileName = file.name.substr(0, file.name.lastIndexOf('.')) || file.name,
				fileFormat = file.name.substr(file.name.lastIndexOf('.') + 1) || '',
				fileSize = formatSize(file.size),
				fileType = file.type,
				fileIcon = 'file';
				
		//делаю только для картинок и pdf. В Font Awesome много иконок для разных форматов, но тут уже сами по мере необходимости добавляйте
		if(/^image\//.test(fileType)){
			fileIcon = 'file-image';
		}
		if(fileFormat == 'pdf'){
			fileIcon = 'file-pdf';
		}
		
		fileZone.append(`
			<div class='file file--result'>
				<i class='fal fa-times file__remove-btn'></i>
				<i class='fal fa-${fileIcon} file__icon'></i>
				<span class='file__text'>${fileName} <span class='file__info'>${fileFormat}, ${fileSize}</span></span>
			</div>
		`);
	}
}
function formatSize(length){
	var i = 0, type = ['б','Кб','Мб','Гб','Тб','Пб'];
	while((length / 1000 | 0) && i < type.length - 1) {
		length /= 1024;
		i++;
	}
	return length.toFixed(2) + ' ' + type[i];
}
//jQuery как-то коряво работает с событиями drag&drop, поэтому использую ваниль
document.querySelectorAll('.file-field__drop-zone').forEach(function(element){
	element.addEventListener('dragover',function(e){
		e.stopPropagation()
    e.preventDefault()
    e.dataTransfer.dropEffect = 'copy';
	})
})
document.querySelectorAll('.file-field__drop-zone').forEach(function(element){
	element.addEventListener('drop',function(e){
		e.stopPropagation();
    e.preventDefault();
    files = e.dataTransfer.files;
		printFileThumbs(e.target,files);
		//записать файлы в input
		element.querySelector('[type=file]').files = files;
	})
})

$('.file-field__input').change(function(){
	printFileThumbs(this, this.files);
});

//Ахтунг! Удаление миниатюры файла не приводит к изменению значения input. объект FileList недоступен для изменения. Ищите обходные пути (они есть :) но только для отправления формы ajax-ом)
$(document).on('click','.file__remove-btn',function(){
	$(this).parents('.file').fadeIn(300,function(){
		$(this).remove();
	})
})

//Карта
$('[data-coords][id]').each(function(){
	var map = this;
	ymaps.ready(function(){
		initMap(map);
	});
})
function initMap(map){
	var coords = $(map).data('coords').replace(/[^\d\,\.]/g,'').split(',') || [],
			center = coords,
			customCenter = $(map).data('center');
			
	if(customCenter){
		center = customCenter.replace(/[^\d\,\.]/g,'').split(',');		
	}
	
	var myMap = new ymaps.Map(map.id, {
		center: center,
		zoom: 15,
		controls: []
	});					
	myPlacemark = new ymaps.Placemark(coords, 
		{
			hintContent: '',
			balloonContent: ''
		}
	);
	myMap.geoObjects.add(myPlacemark);
}