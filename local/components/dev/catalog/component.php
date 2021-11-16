<?
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
\Bitrix\Main\Loader::includeModule('catalog');

$uri = $_SERVER['REQUEST_URI'];
$uri = preg_replace('/\/+\?.*/', '', $uri);
$uri = explode('/', trim($uri,'/'));

if ($uri[0] != 'catalog') die('Ошибка url');

//страница категорий
if (isset($uri[1]) && $uri[1] && !isset($uri[2])){
    $arResult['CATALOG_CODE'] = $uri[1];
    $sectionInfo = CIBlockSection::GetList([], ['CODE' => $uri[1]])->Fetch();
    $arResult['SECTION'] = $sectionInfo['NAME'];
    $arResult['SECTION_CODE'] = $sectionInfo['CODE'];
    
    $result = CIBlockElement::GetList([], ['SECTION_CODE' => $uri[1]]);
    while($ob = $result->GetNextElement()){
        $fields = $ob->GetFields();
        $arResult['ITEMS'][] = [
            'ID' => $fields['ID'],
            'NAME' => $fields['NAME'],
            'PREVIEW_PICTURE' => CFile::GetPath($fields['PREVIEW_PICTURE']),
            'DETAIL_PAGE_URL' => $fields['DETAIL_PAGE_URL']
        ];
    }
    
    $pricesList = \Bitrix\Catalog\PriceTable::getList([
        'filter' => ['PRODUCT_ID' => array_column($arResult['ITEMS'], 'ID')]
    ])->fetchAll();
    foreach($pricesList as $price){
        $pricesByProduct[$price['PRODUCT_ID']]['PRICE'] = $price['PRICE'];
        $pricesByProduct[$price['PRODUCT_ID']]['PRICE_ID'] = $price['ID'];
    }
    
    foreach($arResult['ITEMS'] as & $arItem){
        $arItem['PRICE'] = $pricesByProduct[$arItem['ID']]['PRICE'];
        $arItem['PRICE_ID'] = $pricesByProduct[$arItem['ID']]['PRICE_ID'];
    }

    $this->includeComponentTemplate('section');
}

//страница товара
if (isset($uri[2]) && $uri[2]){
    $arResult['CODE'] = $uri[2];
    $arResult['CATALOG_CODE'] = $uri[1];
    $this->includeComponentTemplate('detail');
}
?>