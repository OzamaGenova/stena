<style>
    .company-home {
        text-align: center;
    }

    .company-home__award-list {
        margin-top: 44px;
        display: flex;
        justify-content: space-around;
        font-weight: bold;
    }

    .company-home__award-list > * {
        padding: 0 8px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .award-img {
        width: 115px;
        height: 73px;
        background: url(/images/awards/stroke.png);
        font-weight: bold;
    }

    .award-img p {
        margin-top: 20px;
        margin-bottom: -6px;
    }

    .award-img:after {
        content: 'год';
    }
    .images_stena_about{
        width: 360px;
        height: 389px;
        background-color: #E5E5E5;
        img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }

        /* Стили для параграфа */
        p {
            text-align: center;
            font-size: 18px;
            margin: 20px 0;
        }

        /* Стили для ссылки */
        a {
            display: block;
            text-align: center;
            font-size: 20px;
            margin: 20px 0;
            text-decoration: none;
            color: #000;
        }

        /* Стили для иконки */
        a img {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            width: 50px;
            height: 50px;
            background-color: #f00; /* Замените на цвет вашей иконки */
        }
    }
</style>

<section class="company-home width-80">
    <h2 class="font-xl">О компании</h2>
    <article>
        <p>
            Группа компаний «Стена» была основана в 1994 году. Это время знаменательно для Российского строительного
            рынка появлением зарубежных технологий строительных материалов, до того времени не известных или не
            применявшихся в нашей стране. Руководством компании приняло решение из огромного числа наименований
            остановить выбор на сухих строительных смесях, применяющихся как при строительстве «с нуля», так и при
            капитальном ремонте и реконструкции.
        </p>
        <p>
            С первых дней «Стена» вела плотную и продуктивную работу со строительными и проектными организациями.
            Были выявлены насущные и перспективные потребности, после анализа которых, компания расширила границы
            деятельности и в 1999 году появилось новое подразделение «Строительная компания «Стена».
        </p>
        <p>
            В начале нового тысячелетия появилась необходимость организации собственного производства. Это могло бы
            дать серьезные конкурентные преимущества, не только как производителю работ, но и как поставщику
            строительных материалов. Спустя несколько лет были открыты следующие производства.
        </p>
    </article>
    <div class="company-home__award-list">
        <div>
            <div class="award-img"><p class="font-xxl">2002</p></div>
            <p>Вентилируемая система утепления и отделки зданий «Столичные фасады®»</p>
        </div>
        <div>
            <div class="award-img"><p class="font-xxl">2004</p></div>
            <p>Водоэмульсионные
                и латексные краски, декоративные фасадные штукатурки и краски «Времена года®»</p>
        </div>
        <div>
            <div class="award-img"><p class="font-xxl">2005</p></div>
            <p>Невентилируемая система утепления и отделки зданий «Столичные фасады®»</p>
        </div>
        <div>
            <div class="award-img"><p class="font-xxl">2007</p></div>
            <p>Венецианские штукатурки «COLORICCI», декоративные и флоковые покрытия с различными эффектами</p>
        </div>
        <div>
            <div class="award-img"><p class="font-xxl">2009</p></div>
            <p>Высококачественные лакокрасочные материалы «PAINTTECH» с содержанием наноразмерных компонентов</p>
        </div>
    </div>
</section>
