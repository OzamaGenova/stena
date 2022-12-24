@extends('layouts.main')

@section('main')
    <main id="main">
        <div id="breadcrumbs" class="cont">
            <div class="container">
                <nav class="row">
                    <ul class="col-lg-4">
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><span>Контакты</span></li>
                    </ul>
                </nav>
            </div>
        </div>

        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3 list_1">
                        <div class="aside">
                            <div class="block">
                                <a href="#">
                                    <img src="img/aside/1.png" alt="">
                                    <span>Краски, грунты</span>
                                </a>
                            </div>
                            <div class="block">
                                <a href="#">
                                    <img src="img/aside/2.png" alt="">
                                    <span>Декоративные<i class="db"></i> кокрытия</span>
                                </a>
                            </div>
                            <div class="block">
                                <a href="#">
                                    <img src="img/aside/3.png" alt="">
                                    <span>Здоровье стер.<i class="db"></i> материалов</span>
                                </a>
                            </div>
                            <div class="block">
                                <a href="#">
                                    <img src="img/aside/4.png" alt="">
                                    <span>Специальные<i class="db"></i> материалы</span>
                                </a>
                            </div>
                            <div class="block_2">
                                <a href="#">
                    <span>
                      Каталог продукции<i class="db"></i> ГК “Стена”
                    </span>
                                    <img src="img/aside/5.png" alt="">
                                </a>
                            </div>
                            <div class="block_3">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-9 list_2">
                        <div class="item_1">
                            <div class="image_block">
                                <a href="#" style="background-image: url(images/contact/1.jpg)"></a>
                            </div>
                            <div class="text_block">
                                <h3>Центральный офис в Ижевске</h3>
                                <p><span class="span_1">Адрес</span> <a href="">ул. Маяковского 30</a></p>
                                <p><span class="span_2">Телефон</span> <a href="tel:73412455455">+7 (3412) 455-455</a></p>
                                <p><span class="span_3">e-mail</span> <a href="mailto:">name@site.ru</a></p>
                                <p><span class="span_4">Режим работы</span> пн-пт с 08:00 - 19:00</p>
                            </div>
                        </div>
                        <!--end item_1-->
                        <div class="item_2">
                            <h2><span>Контакты</span> дилеров</h2>
                            <p>Ваш город</p>
                            <div class="sel">
                                <select class="nice select" name="select">
                                    <option value="Ижевск">Ижевск</option>
                                    <option value="Ижевск">Ижевск</option>
                                    <option value="Ижевск">Ижевск</option>
                                    <option value="Ижевск">Ижевск</option>
                                    <option value="Ижевск">Ижевск</option>
                                </select>
                            </div>
                            <div class="map">
                                <img src="images/contact/2.jpg" alt="">
                            </div>
                        </div>
                        <!--end item_2-->
                        <div class="item_3">
                            <div class="row_2">
                                <div class="items">
                                    <div class="image_block">
                                        <a href="#" style="background-image: url(images/contact/3.jpg)"></a>
                                    </div>
                                    <div class="text_block">
                                        <h3>г. Ижевск</h3>
                                        <p><span class="span_1">Адрес</span> <a href="">ул. Маяковского 30</a></p>
                                        <p><span class="span_2">Телефон</span> <a href="tel:73412455455">+7 (3412) 455-455</a></p>
                                        <p><span class="span_3">e-mail</span> <a href="mailto:">name@site.ru</a></p>
                                        <p><span class="span_4">Режим работы</span> пн-пт с 08:00 - 19:00</p>
                                    </div>
                                </div>
                                <!--end items-->
                                <div class="items">
                                    <div class="image_block">
                                        <a href="#" style="background-image: url(images/contact/3.jpg)"></a>
                                    </div>
                                    <div class="text_block">
                                        <h3>г. Ижевск</h3>
                                        <p><span class="span_1">Адрес</span> <a href="">ул. Маяковского 30</a></p>
                                        <p><span class="span_2">Телефон</span> <a href="tel:73412455455">+7 (3412) 455-455</a></p>
                                        <p><span class="span_3">e-mail</span> <a href="mailto:">name@site.ru</a></p>
                                        <p><span class="span_4">Режим работы</span> пн-пт с 08:00 - 19:00</p>
                                    </div>
                                </div>
                                <!--end items-->
                                <div class="items">
                                    <div class="image_block">
                                        <a href="#" style="background-image: url(images/contact/3.jpg)"></a>
                                    </div>
                                    <div class="text_block">
                                        <h3>г. Ижевск</h3>
                                        <p><span class="span_1">Адрес</span> <a href="">ул. Маяковского 30</a></p>
                                        <p><span class="span_2">Телефон</span> <a href="tel:73412455455">+7 (3412) 455-455</a></p>
                                        <p><span class="span_3">e-mail</span> <a href="mailto:">name@site.ru</a></p>
                                        <p><span class="span_4">Режим работы</span> пн-пт с 08:00 - 19:00</p>
                                    </div>
                                </div>
                                <!--end items-->
                            </div>
                        </div>
                        <!--end item_3-->
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
