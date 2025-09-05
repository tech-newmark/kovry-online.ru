<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
 	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon.ico" />

	<!-- <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/common.css" /> -->
	<? $APPLICATION->ShowHead(); ?>
	<title><? $APPLICATION->ShowTitle() ?></title>
	<? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/vendors/swiper/styles.css", true); ?>
	<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/main.js"); ?>
	<? $APPLICATION->AddHeadString('<meta name="test" content="битрикс работает">'); ?>
</head>

<body>
	<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
	<header>
		<p>header</p>
	</header>
	<main class="workarea">
		<h1>workarea</h1>
