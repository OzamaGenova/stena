<section class="home__projects width-80">
    <h2 class="font-xl">Реализованные проекты</h2>
    <div class="card-list">
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
        <a class="button" href="{{ route('products.index') }}">Посмотреть весь каталог продукции</a>
    </div>
</section>
