<style>
    .home__partners .card-list {
        display: flex;
        gap: 24px;
    }

    .home__partners .card {
        display: flex;
        justify-content: center;
    }
</style>
<section class="home__partners width-80">
    <h2 class="font-xl">Клиенты и партнёры</h2>
    <div class="card-list">
        @for ($i = 1; $i < 7; $i++)
            <div class="card">
                <img src="/images/partners/partner-{{$i}}.png"/>
            </div>
        @endfor
    </div>
    <div class="card__button-block">
        <a class="button" href="#">Посмотреть всех клиентов и партнёров</a>
    </div>
</section>
