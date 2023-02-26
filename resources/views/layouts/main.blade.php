<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="minimum-scale=1.0, target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">
    <meta name="format-detection" content="telephone=no">
    <title>{{ $seo['title'] ?? 'ГК “Стена”' }}</title>
    <meta name="description" content="{{ $seo['title'] ?? 'ГК “Стена”' }}">
    <link rel="stylesheet" type="text/css" href="fonts/font.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/global.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/adaptive.css">
    <script src="/js/html5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<div id="wrapper">
    <header>
        @component('components.header')
        @endcomponent
    </header>
    <!--end header-->


    @yield('main')

    <div id="subfooter"></div>
</div>
<!--end wrapper-->

<style>
    #footer {
        padding-top: 60px;
        height: auto;
    }

    #footer h3 {
        font-size: 1.4rem;
        margin-bottom: 30px;
    }

    #footer li {
        padding: 4px 0;
    }
</style>
<footer id="footer">
    <div class="container">
        <div class="row" style="display: grid; grid-template-columns: repeat(4, 1fr);">
            <div class=" box list_1">
                <a class="logo db" href="#" style="width: 140px;"></a>
                <p>Группа компаний «Стена»<br>© 2013 Все права защищены</p>
            </div>
            <div class="list_2">
                <h3>Каталог продукции</h3>
                <ul>
                    <li>
                        <a href="#">Интерьерные краски</a>
                    </li>
                    <li>
                        <a href="#">Фасадные краски</a>
                    </li>
                    <li>
                        <a href="#">Эмали и лаки</a>
                    </li>
                    <li>
                        <a href="#">Штукатурки декоративные грунты</a>
                    </li>
                </ul>
                <a class="link_1" target="_blank" href="#">Скачать каталог</a>
            </div>
            <div class="box list_3">
                <h3>О компании</h3>
                <ul>
                    <li>
                        <a href="#">Где купить</a>
                    </li>
                    <li>
                        <a href="#">Для дилеров и дизайнеров</a>
                    </li>
                    <li>
                        <a href="#">Для застройщиков</a>
                    </li>
                </ul>
            </div>
            <div class=" list_4">
                <h3>Мы в социальных сетях</h3>
                <ul>
                    <li>
                        <a href="#">
                            <img src="/img/footer/3.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--end footer-->

<!-- modal-->
<div class="g-hidden">
    <div class="b-modal" id="modal_1">
        <div class="popup">
            <div class="b-modal_close arcticmodal-close"></div>
            <h2>
                Заполните форму заявки и
                <span>получите прайс</span>
            </h2>
            <form method="post">
                <div>
                    <input class="inputbox box ell rL w100 db" type="text" name="text" placeholder="Ваше имя">
                </div>
                <div>
                    <input class="inputbox box ell rL w100 db" type="text" name="phone" placeholder="Ваш телефон">
                </div>
                <div>
                    <input class="inputbox box ell rL w100 db" type="email" name="email" placeholder="Ваш email">
                </div>
                <label>
                    <input type="checkbox">
                    <b></b>
                    <span>Отправляя заявку вы соглашаетесь с политикой<i class="db"></i> конфиденциальности и соглашение об использовании сайта</span>
                </label>
                <button type="submit" name="button">Отправить заявку</button>
            </form>
        </div>
    </div>
</div>

<!-- modal-->
<div class="g-hidden">
    <div class="b-modal" id="modal_2">
        <div class="popup">
            <div class="b-modal_close arcticmodal-close"></div>
            <h2><span id="prod_title"></span>
            </h2>
            <form method="post">
                <div class="hide">
                    <input id="z_title" class="inputbox box ell rL w100 db" type="text" name="title" placeholder="">
                </div>
                <div>
                    <input class="inputbox box ell rL w100 db" type="text" name="text" placeholder="Ваше имя">
                </div>
                <div>
                    <input class="inputbox box ell rL w100 db" type="text" name="phone" placeholder="Ваш телефон">
                </div>
                <div>
                    <input class="inputbox box ell rL w100 db" type="email" name="email" placeholder="Ваш email">
                </div>
                <label>
                    <input type="checkbox">
                    <b></b>
                    <span>Отправляя заявку вы соглашаетесь с политикой<i class="db"></i> конфиденциальности и соглашение об использовании сайта</span>
                </label>
                <button type="submit" name="button">Отправить заявку</button>
            </form>
        </div>
    </div>
</div>

<!-- modal-->
<div class="g-hidden">
    <div class="b-modal" id="spasibo">
        <div class="b-modal_close arcticmodal-close"></div>
        <h2><span>Спасибо</span> за заявку!</h2>
        <p>
            Мы свяжемся с вами в
            ближайшее время
        </p>
    </div>
</div>


<script src="/js/jquery.gradienttext.js"></script>
<script src="/js/jquery.arcticmodal.js"></script>
<script src="/js/jquery.nice-select.js"></script>
<script src="/js/owl.carousel.js"></script>
<script src="/js/mask.js"></script>
<script src="/js/validate.js"></script>
<script src="/js/jquery.fancybox.min.js"></script>
<script src="/js/script.js"></script>

<link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.min.css">
</body>

</html>
