<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

?>
CATALOG_ITEM/CARD/TEMPLATE.PHP

<div class="item">
	<div class="item__header">
		<? if (!empty($arResult["ITEM"]["PROPERTIES"]["HIT"]["VALUE"])): ?>
			<div class="item__labels">
				<?= $arResult["ITEM"]["NM_LABELS"] ?>
			</div>
		<? endif; ?>

		<div class="item__gallery">
			<? if ($arResult["ITEM"]["PREVIEW_PICTURE"]["SRC"] && empty($arResult["ITEM"]["PROPERTIES"]["MORE_PHOTO"]["VALUE"])): ?>
				<img src="<?= $arResult["ITEM"]["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arResult["ITEM"]["NAME"] ?>" width="300" height="400">
			<? else: ?>
				<div class="swiper main-slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="<?= $arResult["ITEM"]["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arResult["ITEM"]["NAME"] ?>" width="300" height="400">
						</div>
						<? foreach ($arResult["ITEM"]["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $picture):
							$picturePath = CFile::GetPath($picture);
						?>
							<div class="swiper-slide">
								<img src="<?= $picturePath ?>" alt="<?= $arResult["ITEM"]["NAME"] ?>" width="300" height="400">
							</div>
						<? endforeach; ?>
					</div>
				</div>
			<? endif; ?>
		</div>

		<div class="item__action-block">
			<button type="button" aria-label="Быстрый просмотр" class=" item__action-btn item__action-btn--quickview"></button>
			<button type="button" aria-label="Купить в один клик" class="item__action-btn item__action-btn--oneclickbuy"></button>
		</div>
	</div>

	<div class="item__body">
		<a href="<?= $arResult["ITEM"]["DETAIL_PAGE_URL"] ?>" class="item__title">
			<?= $arResult["ITEM"]["NAME"] ?>
		</a>

		<? if (!empty($price)): ?>
			<div class="item__price" data-entity="price-block">
				<? if ($arParams['SHOW_OLD_PRICE'] === 'Y' && $price['RATIO_BASE_PRICE'] > $price['RATIO_PRICE']): ?>
					<div class="item__price-label">
						<span>-<?= $price["PERCENT"] ?>%</span>
						<span><?= $price["PRINT_DISCOUNT"] ?> Экономия</span>
					</div>
				<? endif; ?>

				<div class="item__price-values">
					<span class="item__price-value item__price-value--current" id="<?= $itemIds['PRICE'] ?>">
						<? if ($arParams['PRODUCT_DISPLAY_MODE'] === 'N' && $haveOffers) {
							echo Loc::getMessage(
								'CT_BCI_TPL_MESS_PRICE_SIMPLE_MODE',
								array(
									'#PRICE#' => $price['PRINT_RATIO_PRICE'],
									'#VALUE#' => $measureRatio,
									'#UNIT#' => $minOffer['ITEM_MEASURE']['TITLE']
								)
							);
						} else {
							echo $price['PRINT_RATIO_PRICE'];
						} ?>
					</span>
					<? if ($arParams['SHOW_OLD_PRICE'] === 'Y' && $price['RATIO_BASE_PRICE'] > $price['RATIO_PRICE']): ?>
						<span class="item__price-value item__price-value--old" id="<?= $itemIds['PRICE_OLD'] ?>">
							<?= $price['PRINT_RATIO_BASE_PRICE'] ?>
						</span>
					<? endif; ?>
					<span class="item__price-value item__price-value--current">/шт</span>
				</div>
			</div>
		<? endif; ?>
	</div>

	<div class="item__footer">
		<div id="<?= $itemIds['BASKET_ACTIONS'] ?>">
			<?/*
			if ($showSubscribe) {
				$APPLICATION->IncludeComponent(
					'bitrix:catalog.product.subscribe',
					'',
					array(
						'PRODUCT_ID' => $item['ID'],
						'BUTTON_ID' => $itemIds['SUBSCRIBE_LINK'],
						'BUTTON_CLASS' => 'btn btn-default ' . $buttonSizeClass,
						'DEFAULT_DISPLAY' => !$actualItem['CAN_BUY'],
						'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
					),
					$component,
					array('HIDE_ICONS' => 'Y')
				);
			}
			*/ ?>

			<!-- <span><?= $arParams['SKU_PROPS']['RAZMER']["NAME"] ?> - <?= $arParams['SKU_PROPS']['RAZMER']["VALUES"][940]["NAME"] ?></span> -->


			<div class="item__quantity-block" data-entity="quantity-block">
				<div class="item__counter">
					<button class="item__quantity-btn item__quantity-btn--minus" aria-label="Убрать единицу товара" id="<?= $itemIds['QUANTITY_DOWN'] ?>">-</button>
					<input class="item__quantity-field" id="<?= $itemIds['QUANTITY'] ?>" type="number"
						name="<?= $arParams['PRODUCT_QUANTITY_VARIABLE'] ?>"
						value="<?= $measureRatio ?>" tabindex="-1">
					<button class="item__quantity-btn item__quantity-btn--plus" aria-label="Добавить единицу товара" id="<?= $itemIds['QUANTITY_UP'] ?>">+</button>
				</div>
				<button class="main-btn add-to-cart-btn" aria-label="Добавить товар в корзину" id="<?= $itemIds['BUY_LINK'] ?>">
					В корзину
				</button>

			</div>


		</div>

		<? if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y' && $haveOffers && !empty($item['OFFERS_PROP'])): ?>
			<? foreach ($arParams['SKU_PROPS'] as $skuProperty):
				$propertyId = $skuProperty['ID'];
				$skuProperty['NAME'] = htmlspecialcharsbx($skuProperty['NAME']);
				if (!isset($item['SKU_TREE_VALUES'][$propertyId]))
					continue;
			?>
				<div data-entity="sku-block" id="<?= $itemIds['PROP_DIV'] ?>">
					<div class="item__sku-list" data-entity="sku-line-block">

						<?
						foreach ($skuProperty['VALUES'] as $value):
							if (!isset($item['SKU_TREE_VALUES'][$propertyId][$value['ID']]))
								continue;
							$value['NAME'] = htmlspecialcharsbx($value['NAME']);
							$index++;
						?>
							<button class="item__sku-list-item <?= $index === 1 ? 'selected' : '' ?>" title="<?= $value['NAME'] ?>"
								data-treevalue="<?= $propertyId ?>_<?= $value['ID'] ?>" data-onevalue="<?= $value['ID'] ?>">
								<?= $value['NAME'] ?>
							</button>
						<? endforeach; ?>
					</div>
				</div>
			<? endforeach; ?>

			<? foreach ($arParams['SKU_PROPS'] as $skuProperty) {
				if (!isset($item['OFFERS_PROP'][$skuProperty['CODE']]))
					continue;

				$skuProps[] = array(
					'ID' => $skuProperty['ID'],
					'SHOW_MODE' => $skuProperty['SHOW_MODE'],
					'VALUES' => $skuProperty['VALUES'],
					'VALUES_COUNT' => $skuProperty['VALUES_COUNT']
				);
			}

			unset($skuProperty, $value);

			if ($item['OFFERS_PROPS_DISPLAY']) {
				foreach ($item['JS_OFFERS'] as $keyOffer => $jsOffer) {
					$strProps = '';

					if (!empty($jsOffer['DISPLAY_PROPERTIES'])) {
						foreach ($jsOffer['DISPLAY_PROPERTIES'] as $displayProperty) {
							$strProps .= '<dt>' . $displayProperty['NAME'] . '</dt><dd>'
								. (is_array($displayProperty['VALUE'])
									? implode(' / ', $displayProperty['VALUE'])
									: $displayProperty['VALUE'])
								. '</dd>';
						}
					}

					$item['JS_OFFERS'][$keyOffer]['DISPLAY_PROPERTIES'] = $strProps;
				}
				unset($jsOffer, $strProps);
			} ?>
		<? endif; ?>
	</div>
</div>