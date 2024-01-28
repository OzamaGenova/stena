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
        <a class="link" href="{{ route('products.index') }}">Каталог продукции</a>
        <span>{{ $record->title }}</span>
    </div>

    <h1 class="width-80">{{ $record->title }}</h1>

    <style>
        .product-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .product__info {

        }
    </style>
    <div class="product-grid width-80">
        <div>
            <img class="width-100" src="{{ Storage::disk(config('admin.upload.disk'))->url($record->img[0] ?? '') }}"/>
        </div>
        <div class="product__info">
            <p><b>Расход:</b> <span>{{ $record->consumption ?? '' }}</span></p>
            <p><b>Время высыхания:</b> <span>{{ $record->drying_time ?? '' }}</span></p>
            <p><b>Огнестойкость:</b> <span>{{ $record->fire_resistance ?? '' }}</span></p>
            <p><b>Нанесение:</b> <span>{{ $record->applying ?? '' }}</span></p>
            <p><b>Колеруется:</b> <span>{{ $record->colored ?? '' }}</span></p>
            <p><b>Возможный объём:</b> <span>{{ $record->possible_volume ?? '' }}</span></p>
            <p><b>{{ $record->code }}</b></p>
            <button
                class="button"
                onclick="document.querySelector('.modal').classList.remove('hide') || document.body.classList.add('clipped')">
                Калькулятор расхода
            </button>
        </div>
    </div>

    <div class="width-80">{!! $record->description !!}</div>

    @component('components.home.products')
    @endcomponent

    @component('components.calc', ['record' => $record])
    @endcomponent
@endsection
