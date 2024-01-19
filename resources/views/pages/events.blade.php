@extends('layouts.main')

@section('banner')
    <section class="banner-main">
        <a href="/">
            <img src="/images/banners/events.png">
        </a>
    </section>
@endsection

@section('main')

    <div class="breadcrumb width-80">
        <a class="link" href="/">Главная</a>
        <span>События</span>
    </div>


    <h1 class="width-80">События</h1>

    <style>
        .card-list-events {
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
        }
    </style>
    <div class="card-grid width-80 card-list-events">
        @foreach($records as $record)
            <section class="card card--medium">
                <a href="{{ route('events.show', ['id' => $record->id]) }}">
                    <img class="card__img"
                         src="{{ Storage::disk(config('admin.upload.disk'))->url($record->img[0] ?? '') }}"
                         height="160"/>
                    <h3 class="card__title" style="font-weight: normal; font-size: 1rem;">
                        {{ $record->title }}
                    </h3>
                    <p class="card__info">{{ date("d.m.Y", strtotime($record->date)) }}</p>
                </a>
            </section>
        @endforeach
    </div>

    @component('components.promotion')
    @endcomponent

    @component('components.form-solutions')
    @endcomponent

    @component('components.home.company')
    @endcomponent

@endsection
