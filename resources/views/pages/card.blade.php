@extends('layouts.main')

@section('main')
    <main id="main">
      <div id="breadcrumbs" class="cont">
        <div class="container">
          <nav class="row">
            <ul class="col-lg-auto">
              <li><a href="/">Главная</a></li>
              @if($category['parent'] !== null)
                <li><a href="{{ route('categories.show', $category['parent']['slug'] ?? '') }}"><span>{{ $category['parent']['title'] ?? '' }}</span></a></li>
              @endif
              <li><a href="{{ route('categories.show', $category['slug'] ?? '') }}"><span>{{ $category['title'] ?? '' }}</span></a></li>
              <li><span>{{ $record['title'] ?? '' }}</span></li>
            </ul>
          </nav>
        </div>
      </div>

      <section class="cards">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-lg-3 list_1">
              <div class="aside">
                <div class="block_2">
                  <a href="{{ route('categories.show', 'catalog') }}">
                    <span>Каталог продукции<i class="db"></i> ГК “Стена”</span>
                    <img src="/img/aside/5.png" alt="">
                  </a>
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
                    @foreach($record['img'] as $key => $img)
                      <div class="item @if($key == 0) active @endif">
                        <div class="image_block">
                          <a style="background-image: url({{ Storage::disk(config('admin.upload.disk'))->url($img) }})"></a>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <!--end tabs_items-->
                  <div class="tabs_links">
                    <ul>
                      @foreach($record['img'] as $key => $img)
                      <li class="rL @if($key == 0) active @endif">
                        <span style="background-image: url({{ Storage::disk(config('admin.upload.disk'))->url($img) }})"></span>
                      </li>
                      @endforeach
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
