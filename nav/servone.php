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

    <title>СТО у Дарницькому</title>
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
            <div class="address_title">СТО Дарницький</div>
            <div class="street">вул. Клеманська, 1/5</div>
            <div class="phone">
                <div class="title">НОМЕР ТЕЛЕФОНУ</div>
                <div class="number"><i class="icon-phone-solid"></i> (044) 555 55 55</div>
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
                <a target="_blank" href="https://www.google.com.ua/maps/place/%D1%83%D0%BB.+%D0%9A%D0%BB%D0%B5%D0%BC%D0%B0%D0%BD%D1%81%D0%BA%D0%B0%D1%8F,+1%2F5,+%D0%9A%D0%B8%D0%B5%D0%B2,+02000/@50.4142659,30.5976853,17z/data=!3m1!4b1!4m6!3m5!1s0x40d4c59c768f515b:0x277891fb81f72b7e!8m2!3d50.4142625!4d30.6002602!16s%2Fg%2F1vd74f5g?entry=ttu" class="nav_btn google">GOOGLE MAPS</a>
                <a target="_blank" href="https://www.waze.com/ru/live-map/directions/ua/misto-kiyiv/kiyiv/vulicya-klemans%D1%8Cka,-15?navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location&to=place.ChIJW1GPdpzF1EARfiv3gfuReCc" class="nav_btn waze">WAZE</a>
            </div>
        </div>
        <div class="map">
            <div class="title">Мапа</div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.44039627716!2d30.59768527615012!3d50.41426588996906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c59c768f515b%3A0x277891fb81f72b7e!2z0YPQuy4g0JrQu9C10LzQsNC90YHQutCw0Y8sIDEvNSwg0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1691751008981!5m2!1sru!2sua" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
        <div class="service icon-location-dot-solid"> Оболонь вул. Бережанська, 75</div>
        <div class="service icon-location-dot-solid"> Відрадний пр-т. Відрадний, 18</div>
        <div class="service icon-location-dot-solid"> Лук'янівка вул. Нагірна, 37</div>
    </div>

    <div class="module social">
        <div class="title">Автосервіс Real Car Service в соцмережах</div>
        <div class="row1">
            <a href="#"><img src="img/icons/youtube.svg" alt="" title="youtube"></a>
            <a href="#"><img src="img/icons/instagram.svg" alt="" title="instagram"></a>
            <a href="#"><img src="img/icons/facebook.svg" alt="" title="facebook"></a>
            <a href="#"><img src="img/icons/twitter.svg" alt="" title="twitter"></a>
        </div>
        <div class="row2">
            <img src="img/icons/visa.png" alt="" title="visa">
            <img src="img/icons/mastercard.png" alt="" title="mastercard">
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