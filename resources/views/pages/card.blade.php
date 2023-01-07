@extends('layouts.main')

@section('main')
    <main id="main">
      <div id="breadcrumbs" class="cont">
        <div class="container">
          <nav class="row">
            <ul class="col-lg-4">
              <li><a href="#">Главная</a></li>
              <li><a href="#">Каталог</a></li>
              <li><span>Краска Expert Pro</span></li>
            </ul>
          </nav>
        </div>
      </div>

      <section class="cards">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-lg-3 list_1">
              <div class="aside">
                <div class="block">
                  <a href="#">
                    <img src="/img/aside/1.png" alt="">
                    <span>Краски, грунты</span>
                  </a>
                </div>
                <div class="block">
                  <a href="#">
                    <img src="/img/aside/2.png" alt="">
                    <span>Декоративные<i class="db"></i> кокрытия</span>
                  </a>
                </div>
                <div class="block">
                  <a href="#">
                    <img src="/img/aside/3.png" alt="">
                    <span>Здоровье стер.<i class="db"></i> материалов</span>
                  </a>
                </div>
                <div class="block">
                  <a href="#">
                    <img src="/img/aside/4.png" alt="">
                    <span>Специальные<i class="db"></i> материалы</span>
                  </a>
                </div>
                <div class="block_2">
                  <a href="#">
                    <span>
                      Каталог продукции<i class="db"></i> ГК “Стена”
                    </span>
                    <img src="/img/aside/5.png" alt="">
                  </a>
                </div>
                <div class="block_3">

                </div>
              </div>
            </div>
            <div class="col-md-9 col-lg-9 list_2">
              <div class="title">
                <h2>{{ $record['title'] }}</h2>
                <p>арт: <span>{{ $record['code'] }}</span></p>
              </div>
              <div class="cards_block">
                <div class="tabs_block">
                  <div class="tabs_items">
                    <div class="item active">
                      <div class="image_block">
                        <a href="#" style="background-image: url(images/cards/1.jpg)"></a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="image_block">
                        <a href="#" style="background-image: url(images/cards/2.jpg)"></a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="image_block video">
                        <iframe src="https://www.youtube.com/embed/TnFM2_hT4ZY"></iframe>
                      </div>
                    </div>
                  </div>
                  <!--end tabs_items-->
                  <div class="tabs_links">
                    <ul>
                      <li class="rL active">
                        <span style="background-image: url(images/cards/1.jpg)"></span>
                      </li>
                      <li class="rL">
                        <span style="background-image: url(images/cards/2.jpg)"></span>
                      </li>
                      <li class="rL link">
                        <span style="background-image: url(images/cards/3.jpg)"></span>
                      </li>
                    </ul>
                  </div>
                  <!--end tabs_links-->
                </div>
                <div class="text_block">
                  <div class="text_1">
                    <p>Бренда: <span>{{ $record['brand'] }}</span></p>
                    <p>Серия: <span>{{ $record['series'] }}</span></p>
                  </div>
                  <div class="text_2">
                    <h4>Основные хар-ки:</h4>
                    <table style="width: 340px">
                      @foreach($record['spec'] as $item)
                        <tr>
                          <td><p>{{ $item[0] ?? '' }}:</p></td>
                          <td style="text-align: right"><p>{{ $item[1] ?? '' }}</p></td>
                        </tr>
                      @endforeach
                    </table>
                  </div>
                  <div class="link">
                    <a href="#">Купить в вашем городе</a>
                    <a href="#">Расчитать расход</a>
                  </div>
                </div>
              </div>
              <!--end cards_block-->
              <div class="cards_tab">
                <div class="tabs_links">
                  <ul>
                    <li class="active">
                      <span>Описание</span>
                    </li>
                    <li>
                      <span>Сертификаты и заключения</span>
                    </li>
                  </ul>
                </div>
                <!--end tabs_links-->
                <div class="tabs_items">
                  <div class="item active">
                    <p style="white-space: pre-line;">
                      {!! $record['description'] !!}
                    </p>
                  </div>
                  <!--end item-->
                  <div class="item block">
                    <div class="block_1">
                      <div class="image_block">
                        <a href="#" style="background-image: url(images/cards/4.jpg)"></a>
                      </div>
                    </div>
                    <!--end block_1-->
                    <div class="block_1">
                      <div class="image_block">
                        <a href="#" style="background-image: url(images/cards/5.jpg)"></a>
                      </div>
                    </div>
                    <!--end block_1-->
                    <div class="block_1">
                      <div class="image_block">
                        <a href="#" style="background-image: url(images/cards/6.jpg)"></a>
                      </div>
                    </div>
                    <!--end block_1-->
                    <div class="block_1">
                      <div class="image_block">
                        <a href="#" style="background-image: url(images/cards/7.jpg)"></a>
                      </div>
                    </div>
                    <!--end block_1-->
                  </div>
                  <!--end item-->
                </div>
              </div>
              <!--end cards_tab-->
              <div class="cards_link">
                <a href="#">Купить в вашем городе</a>
                <a href="#">Расчитать расход</a>
              </div>
              <!--end cards_link-->
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection
