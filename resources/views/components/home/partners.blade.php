<head>
    <style>
        .home__partners .card-list {
            display: flex;
            overflow: hidden;
        }
        .home__partners .card {
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
            height: 100px;
            object-fit: contain;
        }
    </style>
</head>
<body>
    <section class="home__partners width-80 card-slider">
        <h2 class="font-xl">Клиенты и партнёры</h2>
        <div class="card-list slider">
            @for ($i = 1; $i < 20; $i++)
                <div class="card">
                    <img src="/images/partners/partner-{{$i}}.png" alt="Partner {{ $i }}"/>
                </div>
            @endfor
        </div>
    </section>

    <!-- Скрипт для инициализации слайдера -->
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                slidesToShow: 5,
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