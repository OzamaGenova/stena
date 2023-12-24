<section class="home__projects width-80">
    <h2 class="font-xl">Реализованные проекты</h2>
    <div class="card-list">
        @for ($i = 0; $i < 6; $i++)
            <section class="card card--small">
                <img class="card__img" src="/images/temp/project.png"/>
                <h3 class="card__title">Покраска МОПов</h3>
                <p class="card__content">Использовали 500 литров штукатурки</p>
                <p class="cards__info">Дмитров</p>
            </section>
        @endfor
    </div>
    <div class="card__button-block">
        <a class="button" href="#">Посмотреть все проекты</a>
    </div>
</section>
