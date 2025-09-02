<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>


<section class="features">
	<div class="container">
		<h2 class="visually-hidden"><?= $arResult["NAME"] ?></h2>
		<ul class="features__list">
			<? foreach ($arResult["ITEMS"] as $arItem):
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
				<li class="features__list-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<? if ($arItem["PROPERTIES"]["ICON"]["VALUE"]):
						$path = CFile::GetPath($arItem["PROPERTIES"]["ICON"]["VALUE"]);
					?>
						<img src="<?= $path ?>" alt="<?= $arItem["NAME"] ?>" width="40" height="40">
					<? endif; ?>
					<span class="features__list-item-title">
						<?= $arItem["NAME"] ?>
					</span>
					<span class="features__list-item-text">
						<?= $arItem["PREVIEW_TEXT"] ?>
					</span>
				</li>
			<? endforeach; ?>
		</ul>
	</div>
</section>