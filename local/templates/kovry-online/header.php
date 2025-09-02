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
					<a href="/cart/">
						<img src="/images/cart-icon.svg" alt="В корзину" width="40" height="40">
					</a>
				</div>
				<div class="phones">
					<a href="#">
						<img src="/images/phone-icon.svg" alt="" width="40" height="40">
						<span>8-800-999-99-99</span>
					</a>
					<a href="#">
						<img src="/images/phone-icon.svg" alt="" width="40" height="40">
						<span>8-800-999-99-99</span>
					</a>
				</div>

				<button class="main-btn header__offer">
					Заказать звонок
				</button>
			</div>
			<div class="header__bottom">
				<nav>
					<ul class="main-nav">
						<li>Каталог</li>

					</ul>
				</nav>
			</div>
		</div>

	</header>
	<main class="workarea">
		<h1>workarea</h1>