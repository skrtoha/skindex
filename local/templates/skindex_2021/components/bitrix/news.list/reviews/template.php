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
Helper::print_d($arResult);
$names = [];
$professions = [];
$pictures = [];
?>
<section class="reviews">
    <h1 class="visually-hidden">Отзывы</h1>
    <div class="reviews__wrapper swiper-container">
        <div class="swiper-wrapper">
            <?foreach($arResult['ITEMS'] as $arItem){
                $names[] = $arItem['NAME'];
                $professions[] = $arItem['DISPLAY_PROPERTIES']['PROFESSION']['VALUE'];
                $pictures[] = $arItem['PREVIEW_PICTURE']['SRC']
                ?>
                <div class="reviews__slide swiper-slide">
                    <p class="reviews__slide-text"><?=$arItem['PREVIEW_TEXT']?></p>
                </div>
            <?}?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<script>
    const names = JSON.parse('<?=json_encode($names)?>');
    const professions = JSON.parse('<?=json_encode($professions)?>');
    const pictures = JSON.parse('<?=json_encode($pictures)?>');
    const swiper = new Swiper('.swiper-container', {
        speed: 400,
        spaceBetween: 100,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            dynamicBullets: true,
            clickable: true,
            slidesPerView: 'auto',
            renderBullet: function (index, className) {
                return `<span class="${className}">
                            <img class="reviews__bullet-img" src="${pictures[index]}" width="72" height="72"/>
                            <span class="reviews__bullet-info">
                                <span class="reviews__bullet-name">${names[index]}</span>
                                <span class="reviews__bullet-text">${professions[index]}</span>
                            </span>
                        </span>`;
            }
        },
    });
</script>