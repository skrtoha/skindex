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
$APPLICATION->SetTitle($arResult['SECTION']);
?>
<section class="product" item_id="<?=$arResult['ID']?>">
    <div class="product__wrapper container">
        <ul class="product__breadcrumbs-list breadcrumbs">
            <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="/">Каталог товаров</a></li>
            <li class="breadcrumbs__item">
                <a class="breadcrumbs__link" href="/catalog/<?=$arResult['SECTION_CODE']?>"><?=$arResult['SECTION']?></a>
            </li>
            <li class="breadcrumbs__item">
                <a class="breadcrumbs__link breadcrumbs__link--current"><?=$arResult['NAME']?></a>
            </li>
        </ul>
        <section class="product__item"><h1 class="product__title title"><?=$arResult['NAME']?></h1>
            <?if ($arResult['PREVIEW_PICTURE']){?>
                <div class="product__slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="product__slide swiper-slide">
                            <img src="<?=$arResult['PREVIEW_PICTURE']?>" srceset="<?=$arResult['PREVIEW_PICTURE']?>" alt="Изображение товара" width="199" height="159">
                        </div>
                        <?if (!empty($arResult['PHOTOS'])){
                            foreach($arResult['PHOTOS'] as $value){?>
                                <div class="product__slide swiper-slide">
                                    <img src="<?=$value?>" srceset="<?=$value?>" alt="Изображение товара" width="199" height="159">
                                </div>
                            <?}
                        }?>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            <?}?>
            
            <div class="product__info">
                <p class="product__text"><?=$arResult['PREVIEW_TEXT']?></p>
                <div class="product__wrap">
                    <p class="product__price">
                        <span price_id="<?=$arResult['PRICE_ID']?>"><?=$arResult['PRICE']?></span> ₽
                    </p>
                    <div class="product__count">
                        <button class="product__count-btn" type="button" aria-label="уменьшить">-</button>
                        <input class="product__count-field" type="number" name="count"
                               aria-label="количество товара" value="1">
                        <button class="product__count-btn" type="button" aria-label="добавить">+</button>
                    </div>
                    <a class="product__link" href="#">Купить</a></div>
            </div>
        </section>
    </div>
</section>

<script>
    const swiper = new Swiper('.swiper-container', {
        speed: 400,
        spaceBetween: 0,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
