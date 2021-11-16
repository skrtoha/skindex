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
<section class="news container"><h1 class="new__title title"><?=$arParams['TITLE']?></h1>

<?foreach($arResult as $arItem){?>
    <article class="news__item">
        <img class="news__image" src="<?=$arItem['PREVIEW_PICTURE']?>" srcset="<?=$arItem['PREVIEW_PICTURE']?>" alt="Превью" width="375" height="177">
        <div class="news__item-wrapper">
            <h2 class="news__item-title"><?=$arItem['NAME']?></h2>
            <p class="news__item-text"><?=$arItem['PREVIEW_TEXT']?></p>
            <span class="news__item-date"><?=$arItem['CREATED_DATE']?></span>
        </div>
    </article>
<?}?>
</section>