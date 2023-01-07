@extends('layouts.main')

@section('main')
    <main id="main">
        <div id="breadcrumbs">
            <div class="container">
                <nav class="row">
                    <ul class="col-lg-auto">
                        <li><a href="#">Главная</a></li>
                        <li><span>Каталог</span></li>
                    </ul>
                </nav>
            </div>
        </div>

        <section class="catalogue">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3 list_1">
                        <div class="aside">
                            @foreach($sidebar as $catalog)
                                <div class="block">
                                    <a href="/catalog/{{ $catalog['slug'] }}">
                                        <img src="{{ Storage::disk(config('admin.upload.disk'))->url($catalog['img']) }}" alt="">
                                        <span>{{ $catalog['title'] }}</span>
                                    </a>
                                </div>
                            @endforeach
                            <div class="block_2">
                                <a href="{{ route('catalog') }}">
                    <span>
                      Каталог продукции<i class="db"></i> ГК “Стена”
                    </span>
                                    <img src="img/aside/5.png" alt="">
                                </a>
                            </div>
                            <div class="block_3">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-9 list_2">
                        <h1> {{ $title }} <span>ГК “Стена”</span></h1>
                        <div class="item_1">
                            <span>По линиям продукции:</span>
                            <div class="sel">
                                <select class="nice select" name="select">
                                    <option value="Времена года">Времена года</option>
                                    <option value="Времена года">Времена года</option>
                                    <option value="Времена года">Времена года</option>
                                    <option value="Времена года">Времена года</option>
                                    <option value="Времена года">Времена года</option>
                                </select>
                            </div>
                            <div class="link">
                                <a href="#">Новинки</a>
                            </div>
                        </div>
                        <div class="item_2">
                            <div class="row_2">
                                @foreach($records as $record)
                                    <div class="col-sm-12 col-md-6 col-lg-3 items">
                                    <div class="hover">
                                        <a href="{{ route('products', $record['id']) }}">
                                            <span class="image_block">
                                              <i href="#" style="background-image: url(/images/catalogue/3.jpg)"></i>
                                            </span>
                                            <span class="text">{{ $record['short_description'] }}</span>
                                            <span class="link">{{ $record['title'] }}</span>
                                            <span>{{ $record['catalog']['title'] }}</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a>
                                            <span class="image_block">
                                              <i href="#" style="background-image: url(images/catalogue/1.jpg)"></i>
                                            </span>
                                            <a class="link">{{ $record['title'] }}</a>
                                            <span>{{ $record['catalog']['title'] }}</span>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="pagination">
                            <ul>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
