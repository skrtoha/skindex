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

$result = CIBlockElement::GetList([], ['IBLOCK_ID' => 2, 'CODE' => $arParams['CODE']]);

$sectionInfo = CIBlockSection::GetList([], ['CODE' => $arParams['CATALOG_CODE']])->Fetch();
$arResult['SECTION'] = $sectionInfo['NAME'];
$arResult['SECTION_CODE'] = $sectionInfo['CODE'];

if (!$result->SelectedRowsCount()){
    $arSite = CSite::GetList(SITE_ID)->Fetch();
    include($arSite['ABS_DOC_ROOT']."/404.php");
    return;
}

$ob = $result->GetNextElement();
$arFields = $ob->GetFields();
$arProps = $ob->GetProperties();

$arResult['ID'] = $arFields['ID'];
$arResult['NAME'] = $arFields['NAME'];
$arResult['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];
$arResult['PREVIEW_PICTURE'] = CFile::GetPath($arFields['PREVIEW_PICTURE']);

$pricesList = \Bitrix\Catalog\PriceTable::getList([
    'filter' => ['PRODUCT_ID' => $arFields['ID']]
])->fetch();

$arResult['PRICE'] = $pricesList['PRICE'];
$arResult['PRICE_ID'] = $pricesList['ID'];

if (!empty($arProps['PHOTOS'])){
    foreach($arProps['PHOTOS']['VALUE'] as $value){
        $arResult['PHOTOS'][] = CFile::GetPath($value);
    }
}

$this->IncludeComponentTemplate();
?>