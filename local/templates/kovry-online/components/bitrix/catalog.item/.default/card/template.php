<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

?>
CATALOG_ITEM/CARD/TEMPLATE.PHP
<div class="nm-product-item">
	<div class="nm-product-item__header">
		<? if (!empty($item["PROPERTIES"]["HIT"]["VALUE"])): ?>
			<div class="nm-product-item__labels">
				<?= $item["NM_LABELS"] ?>
			</div>
		<? endif; ?>

		<!-- <? debug($item["PROPERTIES"]["HIT"]); ?> -->
		<p>картинки/слайдер</p>
		<p>кнопки быстрого заказа и подробного просмотра</p>
	</div>
	<div class="nm-product-item__body">
		<p>название</p>
		<p>в наличии/нет</p>
		<p>скидка и экономия</p>
		<p>цена/старая цена</p>
		<p>торговое предложение(размер ковра текущего)</p>
	</div>
	<div class="nm-product-item__footer">
		<p>коунтер/кнопка в корзину</p>
		<p>торг-е предложения(размеры)</p>
	</div>
</div>