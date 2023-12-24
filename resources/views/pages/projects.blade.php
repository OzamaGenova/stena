@extends('layouts.main')

@section('banner')
    <section class="banner-main">
        <a href="/">
            <img src="/images/banners/projects.png">
        </a>
    </section>
@endsection

@section('main')

    <div class="breadcrumb width-80">
        <a class="link" href="/">Главная</a>
        <span>Реализованные проекты</span>
    </div>

    <h1>Реализованные проекты</h1>

    <style>
        .category-projects-list a {
            padding: 8px;
        }
    </style>
    <section class="width-80">
        <p style="color: var(--color-text-lightgrey)">Выберите сферу реализации проектов</p>
        <p class="category-projects-list">
            <a class="link" href="#">Все проекты</a>
            <a class="link" href="#">Застройщики</a>
            <a class="link" href="#">Собственные технологии</a>
            <a class="link" href="#">Общественные здания</a>
            <a class="link" href="#">Частные дома</a>
        </p>
    </section>

    <div class="card-list">
        @for ($i = 0; $i < 6; $i++)
            <section class="card card--small">
                <img class="card__img" src="/images/temp/project.png"/>
                <h3 class="card__title">Покраска МОПов</h3>
                <p class="card__content">Использовали 500 литров штукатурки</p>
                <p class="cards__info">Дмитров</p>
            </section>
        @endfor
    </div>
    <div class="card-list">
        @for ($i = 0; $i < 6; $i++)
            <section class="card card--small">
                <img class="card__img" src="/images/temp/project.png"/>
                <h3 class="card__title">Покраска МОПов</h3>
                <p class="card__content">Использовали 500 литров штукатурки</p>
                <p class="cards__info">Дмитров</p>
            </section>
        @endfor
    </div>

    @component('components.home.solutions')
    @endcomponent

    @component('components.promotion')
    @endcomponent

    @component('components.form-solutions')
    @endcomponent

@endsection
