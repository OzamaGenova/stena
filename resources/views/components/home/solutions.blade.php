<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Подключение стилей Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <!-- Подключение скриптов Slick Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</head>
<body>
    <section class="home__solutions width-80">
        <h2 class="font-xl">Наши технологии и решения</h2>
        <div class="card-list slick-carousel" data-slides-to-show="4" data-slides-to-scroll="1">
            @foreach($solutions as $record)
                <section class="card card--medium">
                    <a href="{{ route('solutions.show', ['id' => $record->id]) }}">
                        <img class="card__img"
                            src="{{ Storage::disk(config('admin.upload.disk'))->url($record->img[0] ?? '') }}"/>
                        <h3 class="card__title">{{ $record->title }}</h3>
                        <p class="card__content">{{ $record->short_description }}</p>
                    </a>
                </section>
            @endforeach
        </div>
        <div class="card__button-block">
            <button class="slick-prev slick-arrow">Назад</button>
            <button class="slick-next slick-arrow">Вперед</button>
        </div>
    </section>
    <script>
    $(document).ready(function(){
        $('.slick-carousel').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            prevArrow: '.slick-prev',
            nextArrow: '.slick-next',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
    </script>
</body>

