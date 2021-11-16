<?
/** @global CMain $APPLICATION */
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Skindex");
?>

<?$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "main_slider",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "BROWSER_TITLE" => "-",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_CODE" => "",
        "ELEMENT_ID" => "319",
        "FIELD_CODE" => array("","",""),
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_URL" => "",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Страница",
        "PROPERTY_CODE" => array("PHOTOS",""),
        "SET_BROWSER_TITLE" => "N",
        "SET_CANONICAL_URL" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_SHARE" => "N"
    )
);?>

<section class="advantages">
    <h1 class="visually-hidden">О нашей продукции</h1>
    <div class="advantages__img-bg"></div>
    <div class="advantages__wrap container">
        <div class="advantages__column">
            <div class="advantages__wrapper text-block">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "page",
                        "AREA_FILE_SUFFIX" => "inc",
                        "COMPOSITE_FRAME_MODE" => "A",
                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                        "EDIT_TEMPLATE" => ""
                    )
                );?>
            </div>
            <div class="advantages__link-wrapper">
                <a class="advantages__link link" href="/about">О компании Skindex</a>
            </div>
            <a class="advantages__consult-link button" href="">Проконсультироваться...</a>
        </div>
    </div>
</section>

<?$APPLICATION->IncludeComponent(
    "dev:catalog.list",
    ".default",
    ['IBLOCK_ID' => 2]
)?>

<?$APPLICATION->IncludeComponent(
    'dev:news.main',
    '.default',
    ['IBLOCK_ID' => 7, 'COUNT' => 2, 'TITLE' => 'Новости']
);?>

<?$APPLICATION->IncludeComponent(
    'dev:news.main',
    '.default',
    ['IBLOCK_ID' => 8, 'COUNT' => 2, 'TITLE' => 'О нас в прессе']
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>