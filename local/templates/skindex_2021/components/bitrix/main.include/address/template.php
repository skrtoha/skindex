<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);
?>
<iframe class="map__iframe"
        src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac5e05de97c57a1d5c066ea9e0229027698bbf05b958d6d6e2492b138f5dba0be&amp;source=constructor"
        width="320" height="720"></iframe>
<div class="map__wrapper container">
    <div class="map__contacts-block"><h1 class="map__title">Как нас найти?</h1>
        <p class="map__address">ул. Неверовского, дом 10</p><a class="map__link" href="tel:+79305403020">+7
            (930) 540-30-20</a> <a class="map__link" href="mailto:info@skindex.ru">info@skindex.ru</a>
        <p class="map__text">Хотите чтобы мы перезвонили? Заполните <a href="#">эту форму</a></p></div>
</div>