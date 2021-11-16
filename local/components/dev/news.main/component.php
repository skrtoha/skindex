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

$result = CIBlockElement::GetList(['created_date' => 'DESC'],
    ['IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE' => 'Y'],
    false,
    ['nPageSize' => $arParams['COUNT']]
);

while($ob = $result->GetNextElement()){
    $arFields = $ob->GetFields();
    $arResult[] = [
        'NAME' => $arFields['NAME'],
        'PREVIEW_TEXT' => $arFields['PREVIEW_TEXT'],
        'PREVIEW_PICTURE' => CFile::GetPath($arFields['PREVIEW_PICTURE']),
        'CREATED_DATE' => $arFields['CREATED_DATE']
    ];
}

$this->IncludeComponentTemplate();
?>