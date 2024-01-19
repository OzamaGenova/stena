<section class="home__events width-80">
    <h2 class="font-xl">События</h2>
    <div class="card-list">
        @foreach($events as $record)
            <section class="card card--medium">
                <a href="{{ route('events.show', ['id' => $record->id]) }}">
                    <img class="card__img"
                         src="{{ Storage::disk(config('admin.upload.disk'))->url($record->img[0] ?? '') }}"
                         height="160"/>
                    <h3 class="card__title" style="font-weight: normal; font-size: 1rem;">
                        {{ $record->title }}
                    </h3>
                    <p class="card__info">{{ date("d.m.Y", strtotime($record->date)) }}</p>
                </a>
            </section>
        @endforeach
    </div>
    <div class="card__button-block">
        <a class="button" href="{{ route('events.index') }}">Посмотреть все события</a>
    </div>
</section>
