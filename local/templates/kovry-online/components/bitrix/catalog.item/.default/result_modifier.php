<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if (!empty($arResult["ITEM"]["PROPERTIES"]["HIT"]["VALUE"])) {
  $labelBlockTemplate = '';

  foreach ($arResult["ITEM"]["PROPERTIES"]["HIT"]["VALUE_XML_ID"] as $label) {

    switch ($label) {
      case 'HIT':
        $labelTemplate = '<span class="item__label item__label--hit">Хит</span>';
        $labelBlockTemplate .= $labelTemplate;
        break;
      case 'RECOMMEND':
        $labelTemplate = '<span class="item__label item__label--recommend">Рекомендуем</span>';
        $labelBlockTemplate .= $labelTemplate;
        break;
      case 'NEW':
        $labelTemplate = '<span class="item__label item__label--new">Новинка</span>';
        $labelBlockTemplate .= $labelTemplate;
        break;
      case 'STOCK':
        $labelTemplate = '<span class="item__label item__label--stock">Акция</span>';
        $labelBlockTemplate .= $labelTemplate;
        break;

      default:
        break;
    }
  }

  // debug($labelBlockTemplate);

  $arResult["ITEM"]["NM_LABELS"] = $labelBlockTemplate;
}
