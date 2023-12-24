<section class="home__events width-80">
    <h2 class="font-xl">События</h2>
    <div class="card-list">
        @for ($i = 0; $i < 4; $i++)
            <section class="card card--medium">
                <img class="card__img" src="/images/temp/event.png" height="160"/>
                <h3 class="card__title" style="font-weight: normal; font-size: 1rem;">
                    Запустили новую краску Мадам Палет с био-добавками и нано-частицами
                </h3>
                <p class="cards__info">01.11.2022</p>
            </section>
        @endfor
    </div>
    <div class="card__button-block">
        <a class="button" href="#">Посмотреть все события</a>
    </div>
</section>
