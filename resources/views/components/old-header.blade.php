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
