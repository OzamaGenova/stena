<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport"
          content="minimum-scale=1.0, target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">
    <meta name="format-detection" content="telephone=no">
    <title>{{ $seo['title'] ?? 'ГК “Стена”' }}</title>
    <meta name="description" content="{{ $seo['title'] ?? 'ГК “Стена”' }}">
    <link rel="stylesheet" type="text/css" href="/style/var.css">
    <link rel="stylesheet" type="text/css" href="/fonts/font.css">
    <link rel="stylesheet" type="text/css" href="/style/normalize.css">
    <link rel="stylesheet" type="text/css" href="/style/reset.css">
    <link rel="stylesheet" type="text/css" href="/style/global.css">
    <link rel="stylesheet" type="text/css" href="/style/card.css">
</head>

<style>
    .clipped {
        overflow: hidden!important;
    }
    main {
        display: flex;
        align-items: center;
        flex-direction: column;
    }
</style>

<body>
@component('components.header')
@endcomponent

<main>
    @yield('banner')

    @component('components.nav')
    @endcomponent

    @yield('main')
</main>

@component('components.footer')
@endcomponent


{{--<!-- modal-->--}}
{{--<div class="g-hidden">--}}
{{--    <div class="b-modal" id="modal_1">--}}
{{--        <div class="popup">--}}
{{--            <div class="b-modal_close arcticmodal-close"></div>--}}
{{--            <h2>--}}
{{--                Заполните форму заявки и--}}
{{--                <span>получите прайс</span>--}}
{{--            </h2>--}}
{{--            <form method="post">--}}
{{--                <div>--}}
{{--                    <input class="inputbox box ell rL w100 db" type="text" name="text" placeholder="Ваше имя">--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <input class="inputbox box ell rL w100 db" type="text" name="phone" placeholder="Ваш телефон">--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <input class="inputbox box ell rL w100 db" type="email" name="email" placeholder="Ваш email">--}}
{{--                </div>--}}
{{--                <label>--}}
{{--                    <input type="checkbox">--}}
{{--                    <b></b>--}}
{{--                    <span>Отправляя заявку вы соглашаетесь с политикой<i class="db"></i> конфиденциальности и соглашение об использовании сайта</span>--}}
{{--                </label>--}}
{{--                <button type="submit" name="button">Отправить заявку</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<!-- modal-->--}}
{{--<div class="g-hidden">--}}
{{--    <div class="b-modal" id="modal_2">--}}
{{--        <div class="popup">--}}
{{--            <div class="b-modal_close arcticmodal-close"></div>--}}
{{--            <h2><span id="prod_title"></span>--}}
{{--            </h2>--}}
{{--            <form method="post">--}}
{{--                <div class="hide">--}}
{{--                    <input id="z_title" class="inputbox box ell rL w100 db" type="text" name="title" placeholder="">--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <input class="inputbox box ell rL w100 db" type="text" name="text" placeholder="Ваше имя">--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <input class="inputbox box ell rL w100 db" type="text" name="phone" placeholder="Ваш телефон">--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <input class="inputbox box ell rL w100 db" type="email" name="email" placeholder="Ваш email">--}}
{{--                </div>--}}
{{--                <label>--}}
{{--                    <input type="checkbox">--}}
{{--                    <b></b>--}}
{{--                    <span>Отправляя заявку вы соглашаетесь с политикой<i class="db"></i> конфиденциальности и соглашение об использовании сайта</span>--}}
{{--                </label>--}}
{{--                <button type="submit" name="button">Отправить заявку</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<!-- modal-->--}}
{{--<div class="g-hidden">--}}
{{--    <div class="b-modal" id="spasibo">--}}
{{--        <div class="b-modal_close arcticmodal-close"></div>--}}
{{--        <h2><span>Спасибо</span> за заявку!</h2>--}}
{{--        <p>--}}
{{--            Мы свяжемся с вами в--}}
{{--            ближайшее время--}}
{{--        </p>--}}
{{--    </div>--}}
{{--</div>--}}

</body>

</html>
