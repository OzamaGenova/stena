<style>
    .card-list-product {
        grid-template-columns: repeat(auto-fit, minmax(384px, 1fr));
        padding-bottom: 240px;
    }

    .card-product-wrapper {
        width: 384px;
        position: relative;
    }

    .card-product {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: var(--color-white);
    }

    .card-product--details {
        display: none;
        position: absolute;
        top: 11px;
        left: 11px;
        right: 11px;
        box-shadow: 0 0 10px var(--color-darkgrey);
        z-index: 100;
    }

    .card-product a {
        display: block;
    }

    .card-product img {
        width: 100%;
    }

    .card-product__title, .card-product__content {
        text-align: center;
    }

    .card-product__info {
        width: 100%;
        padding: 0 16px;
    }

    .card-product-wrapper:hover .card-product--details {
        display: block;
    }
</style>
<section>
    <h2 class="font-xl">Наша продукция</h2>

    <section class="card-grid card-list-product">
        @foreach($products as $record)
            <section class="card-product-wrapper">
                <section class="card-product card-product--short">
                    <a href="{{ route('products.show', ['id' => $record->id]) }}">
                        <img class="card-product__img"
                             src="{{ Storage::disk(config('admin.upload.disk'))->url($record->img[0] ?? '') }}"/>
                        <h3 class="card-product__title">{{ $record->title }}</h3>
                        <p class="card-product__content">{{ $record->volume ?? '' }}</p>
                    </a>
                </section>
                <section class="card-product card-product--details">
                    <a href="{{ route('products.show', ['id' => $record->id]) }}">
                        <img class="card-product__img"
                             src="{{ Storage::disk(config('admin.upload.disk'))->url($record->img[0] ?? '') }}"/>
                        <h3 class="card-product__title">{{ $record->title }}</h3>
                        <p class="card-product__content">{{ $record->volume ?? '' }}</p>
                        <div class="card-product__info">
                            <p><span>{{ $record->consumption ?? '' }}</span>
                                <span>{{ $record->drying_time ?? '' }}</span></p>
                            <p><span>{{ $record->fire_resistance ?? '' }}</span></p>
                            <p><span>{{ $record->applying ?? '' }}</span></p>
                            <p><span>{{ $record->colored ?? '' }}</span></p>
                            <p><span>{{ $record->possible_volume ?? '' }}</span></p>
                        </div>
                    </a>
                </section>
            </section>
        @endforeach
        <div class="card__button-block">
            <a class="button" href="{{ route('projects.index') }}">Посмотрите весь каталог продукции</a>
        </div>
    </section>
</section>