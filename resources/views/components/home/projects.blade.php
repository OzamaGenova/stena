<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение стилей Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <!-- Подключение скриптов Slick Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- Стили для слайдера -->
    <style>
        .home__projects .card-list {
            display: flex;
            overflow: hidden;
        }
        .home__projects .card {
            display: inline-block;
            vertical-align: top;
        }
        .slider {
            width: 100%;
        }
        .slider .card {
            margin: 0 10px;
        }
        .slider img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <section class="home__projects width-80">
        <h2 class="font-xl">Реализованные проекты</h2>
        <div class="slider">
            @foreach($projects as $record)
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