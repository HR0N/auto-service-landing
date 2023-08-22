<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--    Bootstrap   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!--    styles      -->
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/section.css">
    <link rel="stylesheet" href="../styles/callback-form.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/ico_fonts.css">
    <link rel="stylesheet" href="../styles/callback_modal_window.css">
    <link rel="stylesheet" href="../styles/section-navigation.css">

    <title>Правий берег</title>
</head>
<body>

<header>
    <div class="header-content">
        <a class="logo" href="/"><img src="../img/logo/header-img.png"></a>
        <div class="text-content">
            <div class="row1">Якість та довіра</div>
            <div class="row2">на кожному кілометрі !</div>
            <div class="row3">автосервіс у Києві</div>
            <div class="row4">Діагностика від 1000 грн</div>
        </div>
    </div>
    <nav class="header-nav">
        <ul style="justify-content: flex-start;">
            <li class="burgerButton icon-bars-solid"></li>
            <li><a href="/">Головна</a></li>
        </ul>
    </nav>
</header>

<div class="section section-navigation">

    <div class="col1">
        <div class="address">
            <div class="address_title">СТО Правий берег</div>
            <div class="street">вул. Шкільна, 36, Михайлівка-Рубежівка</div>
            <div class="phone">
                <div class="title">НОМЕР ТЕЛЕФОНУ</div>
                <div class="number"><i class="icon-phone-solid"></i> +38 (093) 834 27 09</div>
            </div>
        </div>

        <div class="work_schedule">
            <div class="title">Графік роботи</div>
            <div class="wrap">
                <div class="text service">
                    <div class="text__title icon-car-solid">&nbsp;Автосервіс</div>
                    <div>Пн - Пт: 08:00 — 19:00</div>
                    <div>Сб - Нд: 09:00 — 19:00</div>
                </div>
                <div class="text call-center">
                    <div class="text__title icon-phone-solid">&nbsp;Кол-центр</div>
                    <div>Пн - Нд: 08:00 — 20:00</div>
                </div>
            </div>
        </div>
        <div class="callbackForm callbackFormNav">
            <h2>Запис / Консультація</h2>
            <label>
                <input type="tel" placeholder="Введіть телефон" name="phone">
                <button class="submit icon-arrow-right-solid"></button>
            </label>
        </div>
    </div>

    <div class="col2">
        <div class="nav">
            <div class="title">Прокласти маршрут</div>
            <div class="navs_btn">
                <a target="_blank" href="https://goo.gl/maps/7LCN3yftcUvht9RK8" class="nav_btn google">GOOGLE MAPS</a>
                <a target="_blank" href="https://ul.waze.com/ul?ll=50.51833704%2C30.13246179&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location" class="nav_btn waze">WAZE</a>
            </div>
        </div>
        <div class="map">
            <div class="title">Мапа</div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1163.1654404056833!2d30.131212397344665!3d50.51776970854919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1692705049100!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

</div>


<footer>

    <div class="module callback">
        <div class="callbackForm callbackForm3">
            <h2>Запис / Консультація</h2>
            <label>
                <input type="tel" placeholder="Введіть телефон" name="phone">
                <button class="submit icon-arrow-right-solid"></button>
            </label>
        </div>
    </div>

    <div class="module work_schedule">
        <div class="title">Графік роботи</div>
        <div class="wrap">
            <div class="text service">
                <div class="text__title icon-car-solid">&nbsp;Автосервіс</div>
                <div>Пн - Пт: 08:00 — 19:00</div>
                <div>Сб - Нд: 09:00 — 19:00</div>
            </div>
            <div class="text call-center">
                <div class="text__title icon-phone-solid">&nbsp;Кол-центр</div>
                <div>Пн - Нд: 08:00 — 20:00</div>
            </div>
        </div>
    </div>

    <div class="module our_services">
        <div class="title">Наші автосервіси:</div>
        <div class="service icon-location-dot-solid"> вул. Клеманська, 1/5</div>
        <div class="service icon-location-dot-solid"> вул. Шкільна, 36, Михайлівка-Рубежівка</div>
    </div>

    <div class="module social">
        <div class="title">Real Car Service в соцмережах</div>
        <div class="row1">
            <a href="#"><img src="../img/icons/youtube.svg" title="youtube"></a>
            <a href="#"><img src="../img/icons/instagram.svg" title="instagram"></a>
            <a href="#"><img src="../img/icons/facebook.svg" title="facebook"></a>
            <a href="#"><img src="../img/icons/twitter.svg" title="twitter"></a>
        </div>
        <div class="row2">
            <img src="../img/icons/visa.png" title="visa">
            <img src="../img/icons/mastercard.png" title="mastercard">
        </div>
    </div>

</footer>

<div class="callback_modal_window">
    <div class="message">
        <div class="close icon-xmark-solid"></div>
        Дякуємо!
        <br>
        <div class="sm">Ми зв'яжемося з Вами найближчим часом!</div>
    </div>
</div>

</body>
<script src="../libs/jquery/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="../js/father.js"></script>
<script src="../js/header.js"></script>
<script src="../js/callback_form.js"></script>
<script src="../js/env.js"></script>
<script>$(document).ready(() => { new Header('header') })</script>
<script>$(document).ready(() => { new Callback_form('.callbackFormNav') })</script>
</html>