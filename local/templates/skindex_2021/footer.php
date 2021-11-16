<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/* @var array $arCity */
/* @var array $arPhone */
?>
    <section class="map" style="margin-top: 20px">
        <iframe class="map__iframe"
                src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac5e05de97c57a1d5c066ea9e0229027698bbf05b958d6d6e2492b138f5dba0be&amp;source=constructor"
                width="320" height="720"></iframe>
        <div class="map__wrapper container">
            <div class="map__contacts-block"><h1 class="map__title">Как нас найти?</h1>
                <p class="map__address">ул. Неверовского, дом 10</p><a class="map__link" href="tel:+79305403020">+7
                    (930) 540-30-20</a> <a class="map__link" href="mailto:info@skindex.ru">info@skindex.ru</a>
                <p class="map__text">Хотите чтобы мы перезвонили? Заполните <a href="#">эту форму</a></p></div>
        </div>
    </section>
</main>
<footer class="page-footer">
    <div class="page-footer__wrapper container">
        <ul class="page-footer__list">
            <li class="page-footer__list-item"><a href="/about">О Скиндекс</a></li>
            <li class="page-footer__list-item"><a href="/study">Обучение</a></li>
            <li class="page-footer__list-item"><a href="/news">Новости</a></li>
            <li class="page-footer__list-item"><a href="/press">Мы в прессе</a></li>
            <li class="page-footer__list-item"><a href="/cooperation">Сотрудничество</a></li>
        </ul>
        <div class="page-footer__line">
            <ul class="page-footer__social">
                <li class="page-footer__social-item"><a
                        class="page-footer__social-link page-footer__social-link--instagram" href="#"
                        aria-label="instagram"></a></li>
                <li class="page-footer__social-item"><a
                        class="page-footer__social-link page-footer__social-link--global" href="#"
                        aria-label="global"></a></li>
                <li class="page-footer__social-item"><a
                        class="page-footer__social-link page-footer__social-link--twitter" href="#"
                        aria-label="twitter"></a></li>
                <li class="page-footer__social-item"><a
                        class="page-footer__social-link page-footer__social-link--youtube" href="#"
                        aria-label="youtube"></a></li>
            </ul>
            <p class="page-footer__copyright">© 2021 Скиндекс, ООО</p></div>
    </div>
</footer>
<script>const swiper = new Swiper('.swiper-container', {
        speed: 400,
        spaceBetween: 0,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        slidesPerView: 'auto',
        scrollbar: {
            el: '.swiper-scrollbar',
            draggable: true,
        },
    });</script>
</body>
</html>
