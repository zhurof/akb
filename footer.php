	<div class="gradient-section">
		<? if(!basename($_SERVER['REQUEST_URI']) == 'contacts.php') include "contacts-block.php";?>
		<footer class="footer">
			<div class="wrapper">
				<div class="footer__topline">
					<div class="footer__main">
						<a href="/" class="logo footer__logo">
							<img src="img/logo.svg" alt="" class="logo__img">
							<span class="logo__text">Академия качества <br>и безопасности</span>
						</a>
						<div class="footer__social">
							<a href="#" class="soc-link fab fa-facebook-f"></a>
							<a href="#" class="soc-link fab fa-vk"></a>
							<a href="#" class="soc-link fab fa-telegram-plane"></a>
						</div>
					</div>
					<ul class="footer__nav">
						<li><a href="#">Декларация соответствия</a></li>
						<li><a href="#">Аутсорсинг</a></li>
						<li><a href="#">Паспорт безопасности</a></li>
						<li><a href="#">Техническая документация</a></li>
						<li><a href="#">Анализ маркировки</a></li>
					</ul>
					<ul class="footer__nav">
						<li><a href="#">Срок годности</a></li>
						<li><a href="#">Иностранные клиенты</a></li>
						<li><a href="#">ХАССП</a></li>
						<li><a href="#">Обучение</a></li>
					</ul>
					<div class="footer__contacts">
						<h4>Время работы:</h4>						
						<p>Пн — Пт: 9:00 - 18:00</p>
						<p><a href="tel:+88001234556">8 (800) 123-45-56</a></p>
						<a href="#" class="btn btn--click">Обратный звонок</a>
					</div>
				</div>
				<ul class="footer__menu">
					<li><a href="#">О компании</a></li>
          <li><a href="#">Документы</a></li>
          <li><a href="#">Реквизиты</a></li>
          <li><a href="#">Структура</a></li>
          <li><a href="#">Вакансии</a></li>
          <li><a href="#">Отзывы</a></li>
          <li><a href="#">Контакты</a></li>
				</ul>
				<div class="footer__bottomline">
					© 2020. <a href="#">Политика конфиденциальности</a>
				</div>
			</div>
		</footer>
	</div>
	<script src="libs/jquery/jquery-3.4.1.min.js"></script>
	<script src="libs/slick/slick.min.js"></script>
	<script src="libs/magnific/magnific-popup.min.js"></script>
	<script src="js/script.js"></script>	
</body>
</html>