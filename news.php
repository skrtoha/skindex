<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О нас в прессе");
?>

<?$APPLICATION->IncludeComponent(
    'dev:news.main',
    '.default',
    ['IBLOCK_ID' => 8, 'COUNT' => 2, 'TITLE' => 'О нас в прессе']
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>