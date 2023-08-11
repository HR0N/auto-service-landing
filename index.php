<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">

    <!--    Bootstrap   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!--    styles      -->
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/section.css">
    <link rel="stylesheet" href="styles/sectionMap.css">

    <title>Real Park</title>
</head>
<body>


<header>
    <div class="header-content">
        <a class="logo" href="/"><img src="img/logo/header-img-color-remaster.png"></a>
        <div class="text-content">
            <div class="row1">Вигідна оренда</div>
            <div class="row2">з правом викупу</div>
            <div class="row3">авто у Києві</div>
            <div class="row4">від 3000 грн/тиждень</div>
        </div>
    </div>
    <nav class="header-nav">
        <ul>
<!--            <li><img src="img/icons/xmark-solid.svg"></li>-->
            <li class="burgerButton"><img class="menu-icon" src="img/icons/bars-solid.svg"></li>
            <li><a href="#">Послуги</a></li>
            <li><a href="#">Автотовари</a></li>
            <li><a href="#">Автозапчастини</a></li>
            <li><a href="#">Контакти</a></li>
        </ul>
    </nav>
</header>


<main>

    <section class="section sectionMap">
        <h1>СТО в Києві - Real Park</h1>
        <div class="sectionMap_wrap">
            <div class="col1">
                <div class="callbackForm">
                    <h2>Запис / Консультація</h2>
                    <label><input type="tel" placeholder="Введіть телефон"></label>
                </div>
            </div>
            <div class="col2">
                <p>АВТОСЕРВІС У КИЄВІ:</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.44039627716!2d30.59768527615012!3d50.41426588996906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c59c768f515b%3A0x277891fb81f72b7e!2z0YPQuy4g0JrQu9C10LzQsNC90YHQutCw0Y8sIDEvNSwg0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1691751008981!5m2!1sru!2sua" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

</main>


<footer></footer>

<script src="jquery/jquery.js"></script>
<script src="js/father.js"></script>
<script src="js/header.js"></script>
<script>$(document).ready(() => { new Header('header') })</script>

</body>
</html>