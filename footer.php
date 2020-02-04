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
						<a href="#callback" class="btn btn--click modal-link">Обратный звонок</a>
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
	<div class="modal" id="callback">
		<form action="" class="form modal__form">
			<h2>Оставьте номер</h2>
			<p>Чтобы получить консультацию</p>
			<div class="box form__options">
				<label class="custom-radio custom-radio--whatsapp">
					<input type="radio" name="communication" value="whatsapp" class="custom-radio__input" checked />
					<i class="fab fa-whatsapp custom-radio__icon"></i>
					<span class="custom-radio__caption">WhatsApp</span>
				</label>
				<label class="custom-radio custom-radio--viber">
					<input type="radio" name="communication" value="viber" class="custom-radio__input" />
					<i class="fab fa-viber custom-radio__icon"></i>
					<span class="custom-radio__caption">Viber</span>
				</label>
				<label class="custom-radio custom-radio--telegram">
					<input type="radio" name="communication" value="telegram" class="custom-radio__input" />
					<i class="fab fa-telegram-plane custom-radio__icon"></i>
					<span class="custom-radio__caption">Telegram</span>
				</label>
				<label class="custom-radio custom-radio--email">
					<input type="radio" name="communication" value="email" class="custom-radio__input" />
					<i class="far fa-envelope custom-radio__icon"></i>
					<span class="custom-radio__caption">Почта</span>
				</label>
				<label class="custom-radio custom-radio--phone">
					<input type="radio" name="communication" value="phone" class="custom-radio__input" />
					<i class="far fa-phone custom-radio__icon"></i>
					<span class="custom-radio__caption">Телефон</span>
				</label>
			</div>
			<div class="form__inner">
				<label class="field">
					<input type="text" class="field__input">
					<span class="field__placeholder">Введите ваш номер</span>
				</label>
				<button class="btn btn--block btn--click form__btn">Отправить форму</button>
				<div class="form__note">Отправляя форму вы соглашаетесь с политикой конфидценциальности</div>
			</div>
		</form>
	</div>
	<script src="libs/jquery/jquery-3.4.1.min.js"></script>
	<script src="libs/slick/slick.min.js"></script>
	<script src="libs/magnific/magnific-popup.min.js"></script>
	<script src="js/script.js"></script>	
</body>
</html>