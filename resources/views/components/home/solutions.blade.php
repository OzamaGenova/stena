<section class="home__solutions width-80">
    <h2 class="font-xl">Наши технологии и решения</h2>
    <div class="card-list">
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
        <a class="button" href="#">Посмотрите все решения</a>
    </div>
</section>
