@extends('layouts.main')

@section('banner')
    <section class="banner-main">
        <a href="/">
            <img src="/images/banners/products.png">
        </a>
    </section>
@endsection

@section('main')

    <div class="breadcrumb width-80">
        <a class="link" href="/">Главная</a>
        <span>Каталог продукции</span>
    </div>

    <h1 class="width-80">Каталог продукции</h1>

    <style>
        .category-list {
            display: flex;
            gap: 16px;
        }

        .category-list ul {
            min-width: 150px;
            display: none;
            position: absolute;
            right: 0;
            left: 0;
            z-index: 100;
            padding: 8px 0;
            background-color: #fff;
        }

        .category-list li {
            position: relative;
            padding: 8px 16px;
            display: block;
        }

        .category-list li:hover ul {
            display: block;
        }
    </style>
    <section class="width-80">
        <ul class="category-list">
            <li>
                <a class="link" href="#">Интерьерные краски</a>
                <ul>
                    <li><a class="link" href="#">Для обоев</a></li>
                    <li><a class="link" href="#">Для потолков</a></li>
                    <li><a class="link" href="#">Для влажных помещений</a></li>
                    <li><a class="link" href="#">Для спален и гостиных</a></li>
                    <li><a class="link" href="#">Для офисов и холлов</a></li>
                </ul>
            </li>
            <li>
                <a class="link" href="#">Фасадные краски</a>
                <ul>
                    <li><a class="link" href="#">Для обоев</a></li>
                    <li><a class="link" href="#">Для потолков</a></li>
                    <li><a class="link" href="#">Для влажных помещений</a></li>
                    <li><a class="link" href="#">Для спален и гостиных</a></li>
                    <li><a class="link" href="#">Для офисов и холлов</a></li>
                </ul>
            </li>
            <li>
                <a class="link" href="#">Эмали</a>
                <ul>
                    <li><a class="link" href="#">Для обоев</a></li>
                    <li><a class="link" href="#">Для потолков</a></li>
                    <li><a class="link" href="#">Для влажных помещений</a></li>
                    <li><a class="link" href="#">Для спален и гостиных</a></li>
                    <li><a class="link" href="#">Для офисов и холлов</a></li>
                </ul>
            </li>
            <li>
                <a class="link" href="#">Грунты</a>
                <ul>
                    <li><a class="link" href="#">Для обоев</a></li>
                    <li><a class="link" href="#">Для потолков</a></li>
                    <li><a class="link" href="#">Для влажных помещений</a></li>
                    <li><a class="link" href="#">Для спален и гостиных</a></li>
                    <li><a class="link" href="#">Для офисов и холлов</a></li>
                </ul>
            </li>
        </ul>
    </section>

    <section class="width-80">
        <p>
            Закончили запуск станка для изготовления диффузоров, поставленного нами по спецзаказу. Он предназначен для
            отбортовки круглых отверстий в деталях, используемых под установку вентузлов.
        </p>
    </section>

    <style>
        .card-list-product {
            display: grid;
            width: 100%;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 24px;
            overflow: hidden;
        }

        .card-product {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card-product a {
            position: relative;
            display: block;
            background-color: var(--color-white);
        }

        .card-product__title, .card-product__content {
            text-align: center;
        }

        .card-product__info {
            display: none;
            width: 100%;
            padding: 0 16px;
        }

        .card-product a:hover {
            position: absolute;
            box-shadow: 0 0 10px var(--color-darkgrey);
            z-index: 100;
        }

        .card-product a:hover .card-product__info {
            display: block;
        }
    </style>
    <section class="card-list-product width-80">
        @for ($i = 0; $i < 36; $i++)
            <section class="card-product">
                <a href="#">
                    <img class="card-product__img" src="/images/temp/tin.png"/>
                    <h3 class="card-product__title">Краска «Сильвер Нано»</h3>
                    <p class="card-product__content">12 литров</p>
                    <div class="card-product__info">
                        <p><span>1л / 6м2</span> <span>24 часа</span></p>
                        <p><span>Огнестойкость КМО</span></p>
                        <p><span>Кисть валик распылитель</span></p>
                        <p><span>Колеруется</span></p>
                        <p><span>1л / 3л / 5л / 12л / 25л</span></p>
                    </div>
                </a>
            </section>
        @endfor
    </section>

@endsection
