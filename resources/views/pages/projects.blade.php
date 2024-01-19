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
            <a class="link" href="{{ route('projects.index') }}">Все проекты</a>
            @foreach($catalogs as $catalog)
                <a class="link" href="?catalog_id={{ $catalog->id }}">{{ $catalog->title }}</a>
            @endforeach
        </p>
    </section>

    <style>
        .card-list-project {
            grid-template-columns: repeat(auto-fit, minmax(165px, 1fr));
        }
    </style>
    <div class="card-grid width-80 card-list-project">
        @foreach($records as $record)
            <section class="card card--small">
                <a href="{{ route('projects.show', ['id' => $record->id]) }}">
                    <img class="card__img"
                         src="{{ Storage::disk(config('admin.upload.disk'))->url($record->img[0] ?? '') }}"/>
                    <h3 class="card__title">{{ $record->title }}</h3>
                    <p class="card__content">{{ $record->short_description }}</p>
                    <p class="card__info">{{ $record->city }}</p>
                </a>
            </section>
        @endforeach
    </div>

    @component('components.home.solutions')
    @endcomponent

    @component('components.promotion')
    @endcomponent

    @component('components.form-solutions')
    @endcomponent

@endsection
