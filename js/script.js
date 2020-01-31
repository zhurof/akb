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
