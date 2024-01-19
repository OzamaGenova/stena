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
            @foreach($catalogs as $catalog)
                <li>
                    <a class="link" href="?catalog_id={{ $catalog->id }}">{{ $catalog->title }}</a>
                    <ul>
                        @foreach($catalog->children as $child)
                            <li><a class="link" href="?catalog_id={{ $child->id }}">{{ $child->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
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
            grid-template-columns: repeat(auto-fit, minmax(384px, 1fr));
            padding-bottom: 240px;
        }

        .card-product-wrapper {
            width: 384px;
            position: relative;
        }

        .card-product {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: var(--color-white);
        }

        .card-product--details {
            display: none;
            position: absolute;
            top: 11px;
            left: 11px;
            right: 11px;
            box-shadow: 0 0 10px var(--color-darkgrey);
            z-index: 100;
        }

        .card-product a {
            display: block;
        }

        .card-product img {
            width: 100%;
        }

        .card-product__title, .card-product__content {
            text-align: center;
        }

        .card-product__info {
            width: 100%;
            padding: 0 16px;
        }

        .card-product-wrapper:hover .card-product--details {
            display: block;
        }
    </style>
    <section class="card-grid card-list-product width-80">
        @foreach($records as $record)
            <section class="card-product-wrapper">
                <section class="card-product card-product--short">
                    <a href="{{ route('products.show', ['id' => $record->id]) }}">
                        <img class="card-product__img"
                             src="{{ Storage::disk(config('admin.upload.disk'))->url($record->img[0] ?? '') }}"/>
                        <h3 class="card-product__title">{{ $record->title }}</h3>
                        <p class="card-product__content">{{ $record->volume ?? '' }}</p>
                    </a>
                </section>
                <section class="card-product card-product--details">
                    <a href="{{ route('products.show', ['id' => $record->id]) }}">
                        <img class="card-product__img"
                             src="{{ Storage::disk(config('admin.upload.disk'))->url($record->img[0] ?? '') }}"/>
                        <h3 class="card-product__title">{{ $record->title }}</h3>
                        <p class="card-product__content">{{ $record->volume ?? '' }}</p>
                        <div class="card-product__info">
                            <p><span>{{ $record->consumption ?? '' }}</span>
                                <span>{{ $record->drying_time ?? '' }}</span></p>
                            <p><span>{{ $record->fire_resistance ?? '' }}</span></p>
                            <p><span>{{ $record->applying ?? '' }}</span></p>
                            <p><span>{{ $record->colored ?? '' }}</span></p>
                            <p><span>{{ $record->possible_volume ?? '' }}</span></p>
                        </div>
                    </a>
                </section>
            </section>
        @endforeach
    </section>

@endsection
