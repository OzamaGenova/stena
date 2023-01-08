<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="minimum-scale=1.0, target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">
    <meta name="format-detection" content="telephone=no">
    <title>Title here</title>
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
    <header id="header" class="cont">
        <div class="header_top">
            <div class="container">
                <div class="burger hide">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-sm-6 col-md-6 col-lg-auto box">
                        <a class="logo" href="/"></a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-auto seek box">
                        <form class="tb w100 h100" method="post">
                            <div class="tbc w100 h100 vM">
                                <input class="inputbox box ell rL w100 db" type="email" name="email" placeholder="">
                            </div>
                            <div class="tbc w100 h100 vM">
                                <button type="submit" name="button">Найти</button>
                            </div>
                        </form>
                        <p class="text">например: <span>штукатурка</span></p>
                    </div>
                    <div class="col-auto col-md-3 col-lg-auto box link">
                        <a class="rL db" href="#">
                            Скачать<i class="db"></i> каталог
                        </a>
                    </div>
                    <div class="col-auto col-md-3 col-lg-auto box link">
                        <a class="rL btn_1 db">Заказать<i class="db"></i> звонок</a>
                    </div>
                    <div class="col-auto link_1">
                        <a href="tel:880000000000">8 (800) 0000-00-00</a>
                        <p>пн-пт с 09:00 - 19:00</p>
                    </div>
                </div>
            </div>
        </div>
        <!--end header_top-->
        <div class="header_bot">
            <div class="container">
                <ul class="row menu justify-content-between">
                    <li class="col-auto rL list_1">
                        <a class="item_1" href="{{ route('categories.show', 'catalog') }}">Каталог продукции</a>
                        @if(isset($categories['catalog']['children']))
                            <ul class="menu_list hide abs">
                                @foreach($categories['catalog']['children'] as $category)
                                    <li>
                                        <a href="{{ route('categories.show', $category['slug']) }}">
                                            {{ $category['title'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                    <li class="col-auto rL list_1">
                        <a class="item_1" href="{{ route('categories.show', 'solutions') }}">Решения</a>
                        @if(isset($categories['solutions']['children']))
                            <ul class="menu_list hide abs">
                                @foreach($categories['solutions']['children'] as $category)
                                    <li>
                                        <a href="{{ route('categories.show', $category['slug']) }}">
                                            {{ $category['title'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                    <li class="col-auto rL list_1">
                        <a class="item_1" href="{{ route('categories.show', 'textures') }}">Текстуры</a>
                        @if(isset($categories['textures']['children']))
                            <ul class="menu_list hide abs">
                                @foreach($categories['textures']['children'] as $category)
                                    <li>
                                        <a href="{{ route('categories.show', $category['slug']) }}">
                                            {{ $category['title'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                    <li class="col-auto">
                        <a href="#">Дилерам и дизайнерам</a>
                    </li>
                    <li class="col-auto">
                        <a href="#">Производство под СТМ</a>
                    </li>
                    <li class="col-auto rL list_1">
                        <a class="item_1" href="#">О компании</a>
                        <ul class="menu_list menu_list_2 hide abs">
                            <li>
                                <a href="/pages/contacts">
                                    Контакты
                                </a>
                            </li>
                            <li>
                                <a href="/pages/about">
                                    О нас
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--end header_bot-->
    </header>
    <!--end header-->

    @yield('main')

    <div id="subfooter"></div>
</div>
<!--end wrapper-->

<footer id="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 box list_1">
                <a class="logo db" href="#"></a>
                <p>Группа компаний «Стена» © 2013 Все права защищены</p>
            </div>
            <div class="col-12 col-sm-4 col-md-3 col-lg-2 list_2">
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
            <div class="col-12 col-sm-4 col-md-3 col-lg-2 box list_3">
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
            <div class="col-12 col-sm-4 col-md-4 col-lg-auto list_4">
                <h3>Мы в социальных сетях</h3>
                <ul>
                    <li>
                        <a href="#">
                            <img src="/img/footer/3.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/img/footer/4.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-2 list_5">
                <a class="link_2" href="tel:880000000000">8 (800) 0000-00-00</a>
                <span>пн-пт с 09:00 - 19:00</span>
                <a class="link_3 btn_1 rL">Заказать звонок</a>
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
