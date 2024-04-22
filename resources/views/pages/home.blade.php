@extends('layouts.main')

@section('banner')
    @component('components.home.slider')
    @endcomponent
@endsection

@section('main')

    @component('components.home.company')
    @endcomponent

    @component('components.home.director-form')
    @endcomponent

    @component('components.home.products')
    @endcomponent

    @component('components.home.solutions')
    @endcomponent

    @component('components.promotion')
    @endcomponent

    <style>
        .home__city-form form {
            display: grid;
            gap: 16px;
            grid-template-areas:
            "name phone city"
            "send send send"
        }
    </style>
    <section class="home__city-form  width-80">
        <h2 class="font-xl">Напишите в каком городе Вы хотите купить нашу продукцию</h2>
        <h3 class="font-l">и мы перезвоним вам</h3>
        <form>
            <label style="grid-area: name">
                <input class="input" placeholder="Ваше имя">
            </label>
            <label style="grid-area: phone">
                <input class="input" placeholder="Ваш номер телефона">
            </label>
            <label style="grid-area: city">
                <input class="input" placeholder="Ваш город">
            </label>
            <div class="card__button-block" style="grid-area: send">
                <a class="button" href="#">Отправить заявку</a>
            </div>
        </form>
    </section>

    @component('components.home.events')
    @endcomponent

    @component('components.home.projects')
    @endcomponent

    @component('components.home.partners')
    @endcomponent

@endsection
