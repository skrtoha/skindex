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
$APPLICATION->SetTitle($arParams['SECTION']);
?>
<section class="machine">
    <div class="machine__wrapper container">
        <h1 class="machine__title"><?=$arParams['SECTION']?></h1>
    </div>
</section>

<section class="catalog catalog--with-bg container">
    <h1 class="catalog__title">Каталог</h1>
    <?foreach($arParams['ITEMS'] as $arItem){?>
        <article class="catalog__card card">
            <h3 class="card__title">
                <a class="card__title-link" href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a>
            </h3>
            <img class="card__img" src="<?=$arItem['PREVIEW_PICTURE']?>" srcset="<?=$arItem['PREVIEW_PICTURE']?> 2x" alt="Изображение товара">
            <div class="card__bottom-wrapper">
                <p class="card__price"><span><?=$arItem['PRICE']?></span> ₽</p>
                <a class="card__link" href="#" price_id="<?=$arItem['PRICE_ID']?>">Купить</a>
            </div>
        </article>
    <?}?>
    
</section>