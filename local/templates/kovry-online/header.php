<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon.ico" />

	<!-- <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/common.css" /> -->
	<? $APPLICATION->ShowHead(); ?>
	<title><? $APPLICATION->ShowTitle() ?></title>
	<? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/vendors/swiper/styles.css", true); ?>
	<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/main.js"); ?>
</head>

<body>
	<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
	<header class="header">
		<div class="container">
			<div class="header__top">
				<a href="/" aria-label="kovry-online.ru" class="main-logo main-logo--header">
					<img src="/images/main-logo.png" width="300" height="120" alt="Логотип">
				</a>
				<div class="search-title">
					<input type="text" placeholder="Поиск">
					<button aria-label="Поиск по сайту">
						<img src="/images/search-icon.svg" alt="" width="24" height="24">
					</button>
				</div>
				<div class="cart-block">
					<a href="/cart/" class="cart-block__link">
						<img src="/images/cart-icon.svg" alt="В корзину" width="40" height="40">
					</a>
				</div>
				<div class="header__contacts">
					<div class="phone-link">
						<img src="/images/phone-icon.svg" alt="" width="40" height="40">
						<a href="#">8-800-999-99-99</a>
					</div>
					<div class="phone-link">
						<img src="/images/phone-icon.svg" alt="" width="40" height="40">
						<a href="#">8-800-999-99-99</a>
					</div>
				</div>

				<button class="main-btn offer-btn">
					Заказать звонок
				</button>
			</div>
			<div class="header__bottom">
				<nav class="main-nav">
					<ul class="main-nav__list">
						<li class="main-nav__list-item">
							<a href="/catalog/" class="catalog-opener">
								<div class="burger">
									<div class="burger-line burger-line--top"></div>
									<div class="burger-line burger-line--middle"></div>
									<div class="burger-line burger-line--bottom"></div>
								</div>
								Каталог
							</a>
						</li>
						<li class="main-nav__list-item">
							<a href="/sale/">
								<img src="/images/sale-icon.svg" alt="" width="24" height="24">
								Акции</a>
						</li>
						<li class="main-nav__list-item">
							<a href="/info/">Как купить</a>
						</li>
						<li class="main-nav__list-item">
							<a href="/company/">Компания</a>
						</li>
						<li class="main-nav__list-item">
							<a href="/contacts/">Контакты</a>
						</li>

					</ul>
				</nav>
			</div>
		</div>

	</header>
	<main class="workarea">
		<h1>workarea</h1>