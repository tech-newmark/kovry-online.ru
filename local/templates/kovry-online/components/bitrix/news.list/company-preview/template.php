<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

$imgPath = CFile::GetPath($arResult["PICTURE"]);
?>

<section class="section company-preview">
	<div class="container">
		<div class="company-preview__grid">
			<div class="company-preview__grid-item company-preview__grid-item--picture">
				<img src="<?= $imgPath ?>" alt="<?= $arResult["NAME"] ?>" width="320" height="240">
			</div>
			<div class="company-preview__grid-item company-preview__grid-item--content">
				<div class="company-preview__title-row">
					<span class="company-preview__title"><?= $arResult["NAME"] ?></span>
					<a href="<?= $ARRESULT["SECTION_PAGE_URL"] ?>" class="main-btn main-btn--outlined">Подробнее</a>
				</div>
				<div class="content-block">
					<?= $arResult["DESCRIPTION"] ?>
				</div>

				<ul class="company-preview__features-list">
					<? foreach ($arResult["ITEMS"] as $arItem):
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

						$iconPath = CFile::GetPath($arItem["PROPERTIES"]["ICON"]["VALUE"]);
					?>
						<li class="company-preview__features-list-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
							<img src="<?= $iconPath ?>" alt="<?= $arItem["NAME"] ?>" width="40" height="40">
							<span class="company-preview__features-list-item-title"><?= $arItem["NAME"] ?></span>
							<span class="company-preview__features-list-item-text"><?= $arItem["PREVIEW_TEXT"] ?></span>
						</li>
					<? endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</section>