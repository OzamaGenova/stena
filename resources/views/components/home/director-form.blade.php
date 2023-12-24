<style>
    .director-form-home {
        margin-top: 60px;
        position: relative;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .director-form-home__hr {
        width: 100%;
        z-index: -100;
    }

    .director-form-home__content {
        align-self: center;
        display: flex;
        gap: 20px;
    }

    .director-form-home__director {
        margin-top: -30px;
        padding-left: 40px;
    }

    .director-form-home h2 {
        margin: 30px 0;
        font-weight: bold;
    }

    .director-form-home cite {
        margin-top: 60px;
        margin-bottom: 60px;
        display: block;
        color: var(--color-text-lightgrey);
        font-style: normal;
    }

    .director-form-home form {
        width: 540px;
        display: grid;
        gap: 16px;
        grid-template-areas:
            "name phone"
            "message message"
            "send ."
    }
</style>

<section class="director-form-home">
    <img class="director-form-home__hr" src="/images/hr.png">
    <div class="director-form-home__content width-80">
        <div class="director-form-home__director">
            <img src="/images/director.png"/>
        </div>
        <div>
            <h2 class="font-xl">Обращение генеральному директору</h2>
            <article>
                <p>
                    Сегодня разработана и активно реализуется философия экологического пространства, реализованная в
                    новой
                    линейке наномодифицированных материалов «PAINTTECH», которая объединяет материалы для строительства
                    и
                    решения различных специальных технических задач. Материалы с наномодификаторами обладают улучшенными
                    эксплуатационными свойствами.
                </p>
                <p>
                    Теперь отделочные материалы защищают от вирусов, бактерий, микробов, ультрафиолета, гамма- и
                    бетаизлучений, обладают увеличенной адгезией, износостойкостью. Это все — новая линейка отделочных
                    материалов «PAINTTECH».
                </p>
                <p>
                    Значительное внимание уделяется кадровой политике компании. Реализуется разработанная стратегия,
                    сформирован коллектив из высококлассных специалистов.
                </p>
            </article>
            <cite>
                Искренне Ваш, Андрей Овчинников<br>
                Генеральный директор Группы компаний «Стена»
            </cite>
            <h2 class="font-xl">Задайте вопрос генеральному директору</h2>
            <form>
                <label style="grid-area: name">
                    <input class="input" placeholder="Ваше имя">
                </label>
                <label style="grid-area: phone">
                    <input class="input" placeholder="Ваш номер телефона">
                </label>
                <label style="grid-area: message">
                    <textarea class="input" placeholder="Текст сообщения"></textarea>
                </label>
                <div style="grid-area: send">
                    <button class="button">Задать вопрос</button>
                </div>
            </form>
        </div>
    </div>
</section>

