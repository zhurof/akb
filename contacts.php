<?php	include "header.php";?>	
	<main>
		
		<div class="top-block" id="top" style="background-image:url(img/top/contacts.jpg)">
			<div class="top-block__decor"></div>			
			<div class="wrapper top-block__wrapper">
				<div class="top-block__text">
					<h1>Контакты</h1>
					<p>Мы работаем каждый день кроме субботы <br>и воскресения и 9-00 до 18-00</p>
					<a href="#callback" class="btn btn--click modal-link top-block__btn">Задать вопрос</a>
				</div>
			</div>
		</div>
		<div class="sidebar-page">
			<div class="wrapper">
				<div class="sidebar-page__inner">
					<div class="sidebar-page__main">
						<div class="section" id="contact-us">
							<h2>Свяжитесь с нами</h2>
							<p>Звонки по России бесплатны</p>
							<table>
								<tbody>
									<tr>
										<th>Телефон</th>
										<td><a href="tel:88001234567">8 (800) 123-45-67</a></td>
									</tr>
									<tr>
										<th>Почта</th>
										<td><a href="mailto:info@company.com">info@company.com</a></td>
									</tr>
									<tr>
										<th>Адрес для корреспондеции</th>
										<td>190100, Санкт-Петербург, ул. Мира, 5, оф. 305</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="section" id="address">
							<h2>Адрес</h2>
							<p>Санкт-Петербург, ул. Мира 5, офис 304</p>
							<div class="section__map" id="map" data-coords="59.959197,30.314557"></div>
						</div>
						<div class="section" id="requisites">
							<h2>Реквизиты</h2>
							<table>
								<tbody>
									<tr>
										<th>Полное&nbsp;наименование</th>
										<td>Индивидуальный предприниматель Мальцев Егор Васильевич текст на две строки</td>
									</tr>
									<tr>
										<th>ОГРН</th>
										<td>318470400104472</td>
									</tr>
									<tr>
										<th>ИНН</th>
										<td>470417892623</td>
									</tr>
									<tr>
										<th>Дата&nbsp;регистрации</th>
										<td>27.11.2018</td>
									</tr>
								</tbody>
							</table>
							<a href="document.pdf" class="file" target="_blank">
								<i class="fal fa-file-pdf file__icon"></i>
								<span class="file__text">Реквизиты компании <span class="file__info">Pdf, 178 кб</span></span>
							</a>
						</div>
						<div class="section" id="payment">
							<h2>Способы оплаты</h2>							
							<div class="payment">
								<img src="img/icons/phone-pay.svg" alt="" class="payment__img">
								<div class="payment__text">
									<h4>Банковский перевод по реквизитам</h4>
									<p>Мы выставляем счет, вы его оплачиваете в вашем банке. Такие платежи обычно проходят в течении 2-3 рабочих дней. Отправьте нам копию платежной квитанции на <a href="mailto:info@company.com">info@company.com</a> и мы начнем работу до поступления денег на счет.</p>
									<a href="#" class="btn btn--thin payment__btn">Получить реквизиты</a>
								</div>								
							</div>
							<hr>
							<div class="payment">
								<img src="img/icons/cash.svg" alt="" class="payment__img">
								<div class="payment__text">
									<h4>Наличный расчет</h4>
									<p>Вы оплачиваете наши услуги после заключения договора наличными у нас в офисе. Выдаем квитанцию об оплате.</p>
									<a href="#" class="btn btn--thin payment__btn">Посмотреть адрес офиса</a>
								</div>								
							</div>
							<hr>
							<div class="payment">
								<img src="img/icons/card.svg" alt="" class="payment__img">
								<div class="payment__text">
									<h4>Оплата банковской картой</h4>
									<p>Оплатить банковской картой можно у нас в офисе или онлайн. При оплате онлайн обязательно укажите номер договора в комментариях к платежу.</p>
									<p>К оплате принимаются корпоративные банковские карты Visa и EuroCard/MasterCard, выписанные на ваше юридическое лицо. Максимальный размер платежа составляет 49 999,99 рублей.</p>
									<a href="#" class="btn btn--thin payment__btn">Посмотреть адрес офиса</a>
								</div>								
							</div>
						</div>
						<div class="section feedback" id="question">
							<h2>Задать вопрос</h2>
							<p>Мы работаем каждый день кроме субботы и воскресения и 9-00 до 18-00</p>
							<div class="feedback__info">
								<a href="tel:88121234556" class="feedback__contact"><i class="far fa-phone"></i> <span>8 (812) 123-45-56</span></a>
								<a href="mailto:mail@company.ru" class="feedback__contact"><i class="far fa-envelope"></i> <span>mail@company.ru</span></a>
								<a href="#" class="feedback__contact"><i class="far fa-comment"></i> <span>онлайн чат</span></a>
							</div>
							<form action="" class="feedback__form">
								<div class="double-field">
									<label class="field">
										<input type="tel" class="field__input">
										<span class="field__placeholder">Телефон для связи</span>
									</label>
									<label class="field">
										<input type="email" class="field__input">
										<span class="field__placeholder">Эл. почта</span>
									</label>
								</div>
								<label class="field">
									<textarea name="" rows="3" class="field__input"></textarea>
									<span class="field__placeholder">Вопрос</span>
								</label>
								<div class="feedback__footer">
									<button class="btn feedback__btn">Отправить форму</button>
									<div class="feedback__note">Отправляя форму вы соглашаетесь с политикой конфидценциальности</div>
								</div>
							</form>
						</div>
						<div class="section" id="social">
							<h2>Социальные сети</h2>
							<p>Подписывайтесь на нас в социальных сетях</p>
							<div class="social">
								<a class="social__link" href="https://vk.com" target="_blank"><i class="fab fa-vk"></i> <span>@academy</span></a>
								<a class="social__link" href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i> <span>@academy_fb</span></a>
								<a class="social__link" href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i> <span>@academy</span></a>
							</div>
						</div>
					</div>
					<aside class="sidebar-page__sidebar">
						<ul class="page-menu page-menu--sticky page-menu--ltr">
							<li><a href="#contact-us">Свяжитесь с нами</a></li>
							<li><a href="#address">Адрес</a></li>
							<li><a href="#requisites">Реквизиты</a></li>
							<li><a href="#question">Задать вопрос</a></li>
							<li><a href="#social">Социальные сети</a></li>
						</ul>
					</aside>
				</div>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	