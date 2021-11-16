<?
use Helper;
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */

\Bitrix\Main\Loader::includeModule('iblock');

$itemsIdList = [];

$result = CIBlockElement::GetList([], ['IBLOCK_ID' => $arParams['IBLOCK_ID']]);
while($ob = $result->GetNextElement()){
    $arFields = $ob->GetFields();
    $arProps = $ob->GetProperties();
    Helper::print_d($arFields);
    Helper::print_d($arProps);
    
    $arResult['ITEMS'][] = [
        'ID' => $arFields['ID'],
        'NAME' => $arFields['NAME'],
        'PREVIEW_PICTURE' => CFile::GetPath($arFields['PREVIEW_PICTURE']),
        'WIDE_VIEW' => $arProps['WIDE_VIEW']['VALUE'],
        'DETAIL_PAGE_URL' => $arFields['DETAIL_PAGE_URL']
    ];
}

$pricesList = \Bitrix\Catalog\PriceTable::getList([
    'filter' => ['PRODUCT_ID' => array_column($arResult['ITEMS'], 'ID')]
])->fetchAll();
foreach($pricesList as $price){
    $pricesByProduct[$price['PRODUCT_ID']]['PRICE'] = $price['PRICE'];
    $pricesByProduct[$price['PRODUCT_ID']]['PRICE_ID'] = $price['ID'];
}

foreach($arResult['ITEMS'] as & $item){
    $array = $item;
    $array['PRICE'] = $pricesByProduct[$item['ID']]['PRICE'];
    $array['PRICE_ID'] = $pricesByProduct[$item['ID']]['PRICE_ID'];
    if ($item['WIDE_VIEW']) $arResult['WIDE'][] = $array;
    else $arResult['NARROW'][] = $array;
}

$this->IncludeComponentTemplate();
?>