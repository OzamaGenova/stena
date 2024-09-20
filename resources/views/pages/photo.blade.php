@extends('layouts.main')

@section('banner')
    <section class="banner-main">
        <a href="/">
            <img src="/images/banners/photogallery.png">
        </a>
    </section>
@endsection

@section('main')
    <div class="breadcrumb width-80">
        <a class="link" href="/" style="font-size:15px;">Главная</a> 
        <a class="link" href="about" style="font-size:15px;">О компании</a> 
        <span style="font-size:15px;">Фотогалерея</span>
    </div>
    
    <div class="text">
        <h1>Фотогалерея</h1>
    </div>
@endsection