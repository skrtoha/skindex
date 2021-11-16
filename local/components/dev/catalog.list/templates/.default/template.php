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

$commonAmount = count($arResult['WIDE']) + count($arResult['NARROW']);

CJSCore::Init(array("jquery"));

$counterNarrow = 0;
$counterWide = 0;
?>
<section class="catalog container">
    <h1 class="catalog__title">Каталог</h1>
    <?for($i = 0; $i < $commonAmount; $i++){
        if ($counterNarrow < 4){
            $classBig = "";
            $counterNarrow++;
            $arItem = current($arResult['NARROW']);
            next($arResult['NARROW']);
        }
        else{
            $counterWide++;
            if ($counterWide == 2){
                $counterNarrow = 1;
                $counterWide = 1;
            }
            $arItem = current($arResult['WIDE']);
            next($arResult['WIDE']);
            $classBig = 'card--big';
        }?>
        <article class="catalog__card card <?=$classBig?>" item_id="<?=$arItem['ID']?>">
            <h3 class="card__title">
                <a class="card__title-link" href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a>
            </h3>
            <img class="card__img" src="<?=$arItem['PREVIEW_PICTURE']?>" srcset="<?=$arItem['PREVIEW_PICTURE']?>" alt="Изображение товара">
            <div class="card__bottom-wrapper">
                <p class="card__price"><span><?=$arItem['PRICE']?></span> ₽</p>
                <a class="card__link" href="#" price_id="<?=$arItem['PRICE_ID']?>">Купить</a>
            </div>
        </article>
    <?}?>
</section>
