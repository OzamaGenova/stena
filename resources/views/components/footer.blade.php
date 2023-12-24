<style>
    footer {
        margin-top: 80px;
        display: flex;
        justify-content: center;
        gap: 100px;
        padding: 40px 0;
        width: 100%;
        color: var(--color-text-white);
        background-color: var(--color-darkgrey);
    }

    .footer__brand {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .footer__nav {

    }

    .footer__nav-row {
        padding: 4px 0;
    }

    .footer__nav-row:first-child {
        display: flex;
        justify-content: space-between;
    }

    .footer__nav-row ul {
        display: flex;
        justify-content: space-around;
    }

    .footer__nav-row li {
        display: block;
    }

    .footer__nav-row a {
        display: block;
        padding: 16px;
    }

    .footer__nav-row a:hover {
        background-color: var(--color-lightgrey);
    }

    .footer__search {
        width: 360px;
        height: 50px;
    }

    .footer__search input {
        width: 100%;
        height: 100%;
        padding: 0 16px;
        border: none;
    }
</style>

<footer>
    <section class="footer__brand">
        <img src="/images/logo/logo-white.png"/>
        <p>Авторские краски, штукатурки<br/>и декоративные покрытия</p>
    </section>
    <nav class="footer__nav">
        <div class="footer__nav-row">
            <ul>
                <li>
                    <a href="/pages/about">О&nbsp;компании</a>
                </li>
                <li>
                    <a href="/pages/contacts">Контакты</a>
                </li>
                <li>
                    <a href="#">Обратный&nbsp;звонок</a>
                </li>
            </ul>
            <ul>
                <li class="mail">
                    <a href="mailto:info.stena18@mail.ru">info.stena18@mail.ru</a>
                </li>
                <li class="phone">
                    <a href="tel:+73412439700">+7 3412 439-700</a>
                </li>
            </ul>
        </div>
        <div class="footer__nav-row">
            <form class="footer__search">
                <label>
                    <input type="search" placeholder="Поиск по сайту">
                </label>
            </form>
        </div>
        <div class="footer__nav-row">
            <ul>
                <li>
                    <a href="#">Каталог продукции</a>
                </li>
                <li>
                    <a href="#">Решения и технологии</a>
                </li>
                <li>
                    <a href="#">Дилеры и партнёры</a>
                </li>
                <li>
                    <a href="#">Производство под заказ</a>
                </li>
                <li>
                    <a href="#">Реализованные проекты</a>
                </li>
            </ul>
        </div>
    </nav>
</footer>
