<section class="home__solutions width-80">
    <h2 class="font-xl">Наши технологии и решения</h2>
    <div class="card-list">
        @for ($i = 0; $i < 4; $i++)
            <section class="card card--medium">
                <img class="card__img" src="/images/temp/solution.png"/>
                <h3 class="card__title">Флоковые покрытия</h3>
                <p class="card__content">
                    Текстовый анонс, который открывается при наведении курсора
                </p>
                <a class="card__link link" href="#">Подробнее</a>
            </section>
        @endfor
    </div>
    <div class="card__button-block">
        <a class="button" href="#">Посмотреть все решения</a>
    </div>
</section>
