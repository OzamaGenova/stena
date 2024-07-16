<head>
    <style>
        /* Стили для контейнера слайдера */
        .card-list1 {
            position: relative;
            overflow: hidden;
        }

        /* Стили для слайдов */
        .card-list1 .card1 {
            margin: 0 10px;
            flex: 0 0 calc(25% - 20px); /* Рассчитываем ширину карточки, учитывая отступы */
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .card-list1 .card1:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }

        /* Стили для изображений в карточках */
        .card__img1 {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Стили для заголовков в карточках */
        .card__title1 {
            margin: 10px 0;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        /* Стили для описаний в карточках */
        .card__content1 {
            margin: 10px 0;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <section class="home__solutions width-80">
        <h2 class="font-xl">Наши технологии и решения</h2>
        <div class="card-list card-list1">
            @foreach($solutions as $record)
                <section class="card1 card--small card">
                    <a href="{{ route('solutions.show', ['id' => $record->id]) }}">
                        <img class="card__img1 card__img"
                             src="{{ Storage::disk(config('admin.upload.disk'))->url($record->img[0] ?? '') }}"/>
                        <h3 class="card__title1 card__title">{{ $record->title }}</h3>
                        <p class="card__content1 card__content">{{ $record->short_description }}</p>
                    </a>
                </section>
            @endforeach
        </div>
        <div class="card__button-block">
            <a class="button" href="{{ route('solutions.index') }}">Посмотрите все решения</a>
        </div>
    </section>

    <!-- Скрипт для инициализации слайдера -->
    <script>
        $(document).ready(function(){
            $('.card-list1').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
        });
</script>
</body>