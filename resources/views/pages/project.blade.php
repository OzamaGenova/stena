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
        <a class="link" href="{{ route('projects.index') }}">Реализованные проекты</a>
        <span>{{ $record->title }}</span>
    </div>

    <h1 class="width-80">{{ $record->title }}</h1>

    <div class="width-30">
        <img class="width-100" src="{{ Storage::disk(config('admin.upload.disk'))->url($record->img[0] ?? '') }}"/>
    </div>
    <div class="width-80">{!! $record->description !!}</div>

    @component('components.home.projects')
    @endcomponent

    @component('components.promotion')
    @endcomponent

    @component('components.form-solutions')
    @endcomponent

    @component('components.home.partners')
    @endcomponent

@endsection
