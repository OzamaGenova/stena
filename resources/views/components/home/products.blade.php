<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Слайдер-карусель</title>
    <!-- Подключение стилей Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <!-- Стили для слайдера -->
    <style>
        .card-list-product {
            grid-template-columns: repeat(auto-fit, minmax(384px, 1fr));
            padding-bottom: 240px;
        }

        .card-product-wrapper {
            width: 384px;
            position: relative;
        }

        .card-product {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: var(--color-white);
        }

        .card-product--details {
            display: none;
            position: absolute;
            top: 11px;
            left: 11px;
            right: 11px;
            box-shadow: 0 0 10px var(--color-darkgrey);
            z-index: 100;
        }

        .card-product a {
            display: block;
        }

        .card-product img {
            width: 100%;
        }

        .card-product__title, .card-product__content {
            text-align: center;
        }

        .card-product-wrapper:hover .card-product--details {
            display: block;
        }
    </style>
</head>
<body>
    <section>
        <h2 class="font-xl">Наша продукция</h2>

        <div class="slider">
            @foreach($products as $record)
                <section class="card-product card-product--short">
                    <a href="{{ route('products.show', ['id' => $record->id]) }}">
                        <img class="card-product__img"
                             src="{{ Storage::disk(config('admin.upload.disk'))->url($record->img[0] ?? '') }}"/>
                        <h3 class="card-product__title">{{ $record->title }}</h3>
                        <p class="card-product__content">{{ $record->volume ?? '' }}</p>
                    </a>
                </section>
            @endforeach
        </div>
        <div class="card__button-block">
            <a class="button" href="{{ route('products.index') }}">Посмотрите весь каталог продукции</a>
        </div>
    </section>

    <!-- Скрипт для инициализации слайдера -->
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                        }
                    }
                ]
            });
        });
    </script>
</body>
</html>