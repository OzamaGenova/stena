@extends('layouts.main')

@section('banner')
    <section class="banner-main">
        <a href="/">
            <img src="/images/banners/solutions.png">
        </a>
    </section>
@endsection

@section('main')

    <div class="breadcrumb width-80">
        <a class="link" href="/">Главная</a>
        <span>Решения и технологии</span>
    </div>

    <h1 class="width-80">Решения и технологии</h1>

    <section class="width-80">
        <p>
            Группа компаний «Стена» была основана в 1994 году. Это время знаменательно для Российского строительного
            рынка появлением зарубежных технологий строительных материалов, до того времени не известных или не
            применявшихся в нашей стране. Руководством компании приняло решение из огромного числа наименований
            остановить выбор на сухих строительных смесях, применяющихся как при строительстве «с нуля», так и при
            капитальном ремонте и реконструкции.
        </p>
        <p>
            С первых дней «Стена» вела плотную и продуктивную работу со строительными и проектными организациями. Были
            выявлены насущные и перспективные потребности, после анализа которых, компания расширила границы
            деятельности и в 1999 году появилось новое подразделение «Строительная компания «Стена».
        </p>
        <p>
            В начале нового тысячелетия появилась необходимость организации собственного производства. Это могло бы дать
            серьезные конкурентные преимущества, не только как производителю работ, но и как поставщику строительных
            материалов. Спустя несколько лет были открыты следующие производства.
        </p>
        <p>
            Группа компаний «Стена» является постоянным участником строительных выставок. В нашем архиве свыше тридцати
            дипломов первой, второй и третьей степеней, полученных в Ижевске, Москве, Уфе, Набережных Челнах, Казани.
        </p>
        <p>
            В нашем портфолио собрано большое количество благодарных отзывов заказчиков и партнеров. Среди них есть и
            благодарности Министра строительства, архитектуры и жилищной политики УР Загайнова В.Ф. и Президента
            Удмуртской Республики Волкова А.А.

        </p>
    </section>

    <style>
        .card-list-solution {
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
        }
    </style>
    <section class="card-grid card-list-solution width-80">
        @foreach($records as $record)
            <section class="card card--medium">
                <a href="{{ route('solutions.show', ['id' => $record->id]) }}">
                    <img class="card__img"
                         src="{{ Storage::disk(config('admin.upload.disk'))->url($record->img[0] ?? '') }}"/>
                    <h3 class="card__title">{{ $record->title }}</h3>
                    <p class="card__content">{{ $record->short_description }}</p>
                </a>
            </section>
        @endforeach
    </section>

    @component('components.promotion')
    @endcomponent

    @component('components.form-solutions')
    @endcomponent

    @component('components.home.company')
    @endcomponent

    @component('components.home.events')
    @endcomponent

@endsection
