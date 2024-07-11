<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <<!-- Подключение стилей Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <!-- Подключение скриптов Slick Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</head>
<body>
    <section class="home__solutions width-80">
        <h2 class="font-xl">Наши технологии и решения</h2>
        <div class="card-list" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "autoplaySpeed": 2000}'>
            @foreach($solutions as $record)
                <div class="card card--medium">
                    <a href="{{ route('solutions.show', ['id' => $record->id]) }}">
                        <img class="card__img"
                             src="{{ Storage::disk(config('admin.upload.disk'))->url($record->img[0] ?? '') }}"/>
                        <h3 class="card__title">{{ $record->title }}</h3>
                        <p class="card__content">{{ $record->short_description }}</p>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="card__button-block">
            <a class="button" href="#">Посмотрите все решения</a>
        </div>

        <script>
            $(document).ready(function(){
                $('.card-list').slick();
            });
        </script>
    </section>
</body>
</html>
