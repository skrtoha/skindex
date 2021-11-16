<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?
/** @global CMain $APPLICATION */
/* @var array $arCity */
/* @var array $arPhone */

use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <?
    CJSCore::Init(['jquery']);
    Asset::getInstance()->addJs('https://unpkg.com/swiper/swiper-bundle.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/main.js');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style.min.css');
    Asset::getInstance()->addCss("https://unpkg.com/swiper/swiper-bundle.min.css");
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?$APPLICATION->ShowHead();?>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<header class="page-header">
    <div class="page-header__wrapper container">
        <nav class="page-header__main-nav main-nav">
            <button class="main-nav__toggle" type="button"><span>Меню</span></button>
            <div class="main-nav__wrap">
                <div class="main-nav__wrapper main-nav__wrapper--1">
                    <a class="main-nav__link" href="/about">О Skindex</a>
                </div>
                <div class="main-nav__wrapper main-nav__wrapper--2">
                    <a class="main-nav__link" href="/news">Новости компании</a>
                    <a class="main-nav__link" href="/study">Обучение косметологов</a>
                    <a class="main-nav__link" href="/press">Мы в прессе</a>
                </div>
                <div class="main-nav__wrapper main-nav__wrapper--2">
                    <a class="main-nav__link" href="/reviews">Отзывы</a>
                    <a class="main-nav__link" href="/news">Новости компании</a>
                    <a class="main-nav__link" href="/cooperation">Почему нужно с нами работать?</a>
                </div>
                <div class="main-nav__list" style="margin-left: 2em">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:catalog.section.list",
                        "side_menu",
                        Array(
                            "ADD_SECTIONS_CHAIN" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "COMPONENT_TEMPLATE" => ".default",
                            "COMPOSITE_FRAME_MODE" => "A",
                            "COMPOSITE_FRAME_TYPE" => "AUTO",
                            "COUNT_ELEMENTS" => "Y",
                            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                            "FILTER_NAME" => "sectionsFilter",
                            "IBLOCK_ID" => "2",
                            "IBLOCK_TYPE" => "catalog",
                            "SECTION_CODE" => "",
                            "SECTION_FIELDS" => array(0=>"",1=>"",),
                            "SECTION_ID" => $_REQUEST["SECTION_ID"],
                            "SECTION_URL" => "",
                            "SECTION_USER_FIELDS" => array(0=>"",1=>"",),
                            "SHOW_PARENT_NAME" => "Y",
                            "TOP_DEPTH" => "2",
                            "VIEW_MODE" => "LINE"
                        )
                    );?>
                </div>
            </div>
        </nav>
        <div class="page-header__logo-wrapper">
            <a class="page-header__logo" href="/">
                <img alt="Лого тип компании" height="22" src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" srcset="<?=SITE_TEMPLATE_PATH?>/img/logo@2x.png" width="62">
            </a>
            <div class="page-header__user-list">
                <a aria-label="поиск" class="page-header__user-link page-header__user-link--search" href="#"></a>
                <!-- класс для активной корзины page-header__user-link==active -->
                <a aria-label="корзина" class="page-header__user-link page-header__user-link--shopping-bag" href="#"><span>3</span></a>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:catalog.section.list",
            "top_menu",
            Array(
                "ADD_SECTIONS_CHAIN" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COMPONENT_TEMPLATE" => ".default",
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "AUTO",
                "COUNT_ELEMENTS" => "Y",
                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                "FILTER_NAME" => "sectionsFilter",
                "IBLOCK_ID" => "2",
                "IBLOCK_TYPE" => "catalog",
                "SECTION_CODE" => "",
                "SECTION_FIELDS" => array(0=>"",1=>"",),
                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array(0=>"",1=>"",),
                "SHOW_PARENT_NAME" => "Y",
                "TOP_DEPTH" => "2",
                "VIEW_MODE" => "LINE"
            )
        );?>
    </div>
</header>
<main class="page-main">