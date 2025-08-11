<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><? $APPLICATION->ShowTitle() ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon.ico" />

	<!-- <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/common.css" /> -->
	<? $APPLICATION->ShowHead(); ?>
</head>

<body>
	<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
	<header>
		<p>header</p>
	</header>
	<main class="workarea">
		<h1>workarea</h1>