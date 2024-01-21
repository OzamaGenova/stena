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
        <a class="link" href="{{ route('events.index') }}">События</a>
        <span>{{ $record->title }}</span>
    </div>

    <h1 class="width-80">{{ $record->title }}</h1>
    <style>
        .event__date {
            margin-top: -14px;
            color: var(--color-text-lightgrey);
        }
    </style>
    <p class="event__date width-80">{{ date("d.m.Y", strtotime($record->date)) }}</p>

    <div class="width-30">
        <img class="width-100" src="{{ Storage::disk(config('admin.upload.disk'))->url($record->img[0] ?? '') }}"/>
    </div>
    <div class="width-80">{!! $record->description !!}</div>

    @component('components.form-solutions')
    @endcomponent

    @component('components.home.events')
    @endcomponent

    @component('components.promotion')
    @endcomponent

    @component('components.home.company')
    @endcomponent

@endsection
