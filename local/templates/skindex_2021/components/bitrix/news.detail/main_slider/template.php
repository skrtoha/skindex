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
<section class="main-slider">
    <h1 class="visually-hidden">Слайдер товаров Skindex</h1>
    <div class="main-slider__wrapper swiper-container">
        <div class="swiper-wrapper">
            <?foreach($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $file_id){?>
                <div class="main-slider__slide swiper-slide">
                    <img src="<?=CFile::GetPath($file_id)?>" alt="skindex 386">
                </div>
            <?}?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-scrollbar"></div>
    </div>
    <div class="main-slider__product-wrapper container">
        <div class="main-slider__product-info">
            <h2 class="main-slider__title title"><?=$arResult['NAME']?></h2>
            <p class="main-slider__text"><?=$arResult['PREVIEW_TEXT']?></p>
            <a class="main-slider__link" href="#">Купить</a>
        </div>
    </div>
</section>