<?php	include "header.php";?>	
	<main>		
		<div class="top-block page-section" id="top" style="background-image:url(img/top/services.jpg)">
			<div class="top-block__decor"></div>			
			<div class="wrapper top-block__wrapper">
				<div class="top-block__text">
					<h1>Академия <br><b>качества и безопасности</b></h1>
				</div>
			</div>
		</div>
		<div class="about-block">
			<div class="wrapper about-block__wrapper">
				<div class="person about-block__person">
					<img src="img/employer.png" alt="" class="person__img" />
					<div class="person__info person__info--small">
						<div class="person__name"><span>Анна Иванова</span></div>
						<div class="person__position"><span>директор компании</span></div>
					</div>
				</div>
				<div class="about-block__text">
					<h2>Коротко о нас</h2>
					<h4>Мы создали компанию, цель которой убрать все бюрократические препятствия перед настоящими инженерами, творцами и создателями новых продуктов.</h4>
					<ul>
						<li>Обучаемся и повышаем компетентность. Стараемся быть в курсе всех изменений, связанных с нашей работой.</li>
						<li>Имеем огромные практический опыт работы в государственных структурах и полное понимание всех процессов работы.</li>
						<li>Несем полную ответственность за свою работу и готовы отстаивать интересы клиентов на любом уровне.</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="pic-block">
			<div class="wrapper">
				<div class="pic-block__inner">
					<div class="pic-block__pic">
						<img src="img/themis.png" alt="">
					</div>
					<div class="pic-block__text">
						<h2>Не нарушаем закон. <br>Это принцип.</h2>
						<h3>Работаем только в рамках действующего законодательства и только с добросовестными участниками рынка.</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-block">
			<div class="slider-block__head">
				<div class="wrapper">
					<h2 style="text-align:center">Наша команда</h2>
				</div>
			</div>
			<div class="slider-block__slider">
				<figure class="slider-block__slide">
					<img src="img/slider/0.png" alt="">
					<figcaption class="slider-block__caption">Подпись к изображению</figcaption>
				</figure>
				<figure class="slider-block__slide">
					<img src="img/slider/1.png" alt="">
					<figcaption class="slider-block__caption">Подпись к изображению</figcaption>
				</figure>
				<figure class="slider-block__slide">
					<img src="img/slider/2.png" alt="">
					<figcaption class="slider-block__caption">Подпись к изображению</figcaption>
				</figure>
			</div>
		</div>
		<div class="advantages">
			<div class="wrapper">
				<div class="box advantages__box">
					<div class="advantages__item">
						<img src="img/icons/checked.svg" alt="" />
						<h3>Удобство</h3>
						<p>Мы всегда готовы пойти на встречу и предложить самую удобную схему работы для наших клиентов.</p>
					</div>
					<div class="advantages__item">
						<img src="img/icons/checked.svg" alt="" />
						<h3>Гибкость</h3>
						<p>Работаем дистанционно с применением электронного документооборота и любых способов связи.</p>
					</div>
					<div class="advantages__item">
						<img src="img/icons/checked.svg" alt="" />
						<h3>Надежность</h3>
						<p>Беремся за выполнение проектов «под ключ». Выполняем всю бюрократическую работу за наших клиентов.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="structure">
			<div class="wrapper">
				<div class="structure__head">
					<h2>Отделы компании</h2>
				</div>
				<div class="box structure__box">
					<div class="simple-card">
						<img src="img/icons/diploma.svg" alt="">
						<p><strong>6 человек</strong></p>
						<h3>Государственная регистрация продуктации</h3>
					</div>
					<div class="simple-card">
						<img src="img/icons/flask.svg" alt="">
						<p><strong>8 человек</strong></p>
						<h3><b>Химическая продукция</b></h3>
					</div>
					<div class="simple-card">
						<img src="img/icons/draft.svg" alt="">
						<p><strong>12 человек</strong></p>
						<h3>Разработка технических документов</h3>
					</div>
					<div class="simple-card">
						<img src="img/icons/manager.svg" alt="">
						<p><strong>3 человека</strong></p>
						<h3>Работа с иностранными клиентами</h3>
					</div>
					<div class="simple-card">
						<img src="img/icons/award.svg" alt="">
						<p><strong>8 человек</strong></p>
						<h3>Маркировка продукции</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="reviews">
			<div class="wrapper">
				<div class="reviews__head">
					<h2 style="text-align:center">Что самое важное в работе компании?</h2>
					<h3 style="text-align:center">Выполнение задач своих клиентов. Уже более 5 лет мы помогаем <br>бизнесу становится лучше.</h3>
				</div>
			</div>
			<div class="reviews__slider">
				<?
					$reviews = ['Сбербанк','Ростелеком','Икея','Мираторг'];
					foreach($reviews as $company):
				?>
				<div class="review" data-title="<?=$company;?>">
					<a href="img/review.png" class="review__pic image-link">
						<img src="img/review-min.png" alt="">
					</a>
					<div class="review__content">
						<div class="review__author">
							<img src="img/people/german-oskarovich.png" alt="" class="review__author-photo">
							<div class="review__author-text">
								<h4><i>Герман Греф</i></h4>
								<p>Председатель правления «Сбербанка&nbsp;России»</p>
							</div>
						</div>
						<div class="review__text">
							<blockquote>В нужные сроки получили весь необходимый пакет документов</blockquote>
							<p>Выражаем благодарность за проделнную работу. В нужные нам сроки получили весь необходимый пакет документов для запуска нового продукта на рынок.</p>
							<p>В нужные нам сроки получили весь необходимый пакет документов для запуска нового продукта на рынок. Выражаем благодарность за проделнную работу.</p>
						</div>
					</div>
				</div>
				<?endforeach?>
			</div>
		</div>
		<div class="text-block">
			<div class="wrapper">
				<h4>Сео заголовок для страницы</h4>
				<p>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они в буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек Даль журчит по всей стране и обеспечивает ее всеми необходимыми правилами. Эта парадигматическая страна, даже всемогущая пунктуация не имеет власти над рыбными текстами, ведущими безорфографичный образ жизни. Однажды одна маленькая строчка рыбного текста по имени Lorem ipsum решила выйти в большой мир грамматики.</p>
				<p><a href="#">Читать полностью…</a></p>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	