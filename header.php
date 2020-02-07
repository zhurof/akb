<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Верстка</title>
	<meta name="viewport" content="width=device-width,initial-scale=1" />	
	<link rel="stylesheet" href="css/fonts.css" />	
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="libs/slick/slick.css" />
	<link rel="stylesheet" href="libs/magnific/magnific-popup.min.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>	
	<header class="header">		
		<div class="wrapper header__wrapper">
			<a href="/" class="logo header__logo">
				<img src="img/logo.svg" alt="" class="logo__img">
				<span class="logo__text">Академия качества <br>и безопасности</span>
			</a>
			<ul class="header__menu">
				<li><a href="services.php">Услуги</a></li>
				<li><a href="#">Обучение</a></li>
				<li><a href="about.php">О нас</a></li>
				<li><a href="#">Документы</a></li>
				<li><a href="contacts.php">Контакты</a></li>
				<!--По дизайну этот пункт прям просится в меню. Можно реализовать через пользовательский класс для пункта меню в WP-->
				<li class="search-btn"><a href="#">Поиск</a></li>
			</ul>
			<div class="header__contacts">
				<a href="tel:89211234567" class="header__phone">8 (921) 123 45 67</a>
				<a href="#callback" class="header__callback modal-link">Перезвоните мне!</a>
			</div>
			<span class="menu-btn"></span>
			<form action="" class="search-form header__search">
				<input type="search" name="s" class="search-form__input" placeholder="Что вы ищете?" />
				<span class="search-form__close-btn far fa-times"></span>
			</form>			
		</div>
	</header>
	