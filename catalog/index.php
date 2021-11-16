<?
/* @var $APPLICATION CMain */

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<?$APPLICATION->IncludeComponent(
    'dev:catalog',
    '.default',
    ['BLOCK_ID' => 2]
)?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>