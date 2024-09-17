<style>
    .nav-main {
        display: flex;
        justify-content: center;
    }

    .nav-main ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 120px;
    }

    .nav-main li {
        display: block;
        width: 150px; 
        text-align: center;
    }

    .nav-main a {
        display: block;
        padding: 24px;
        font-size: 17px;
    }

    .nav-main a:hover, .nav-main li.active a {
        color: var(--color-orange);
    }

    .nav-main a:after {
        content: ' ';
        display: block;
        width: 100%;
        margin-top: 4px;
        border-bottom: 2px solid var(--color-text);
    }

    .nav-main a:hover:after, .nav-main li.active a:after {
        border-bottom-color: var(--color-orange);
    }
</style>
<section class="nav-main">
    <nav>
        <ul>
            <li class="{{ (\Request::route()->getName() == 'products.index') ? 'active' : '' }}">
                <a href="{{ route('products.index') }}">Каталог продукции</a>
            </li>
            <li class="{{ (\Request::route()->getName() == 'solutions.index') ? 'active' : '' }}">
                <a href="{{ route('solutions.index') }}">Решения и технологии</a>
            </li>
            <li class="{{ (\Request::route()->getName() == 'partners.index') ? 'active' : '' }}">
                <a href="{{ route('partners.index') }}">Дилеры и партнёры</a>
            </li>
            <li class="{{ (\Request::route()->getName() == 'stm') ? 'active' : '' }}">
                <a href="{{ route('stm') }}">Производство под заказ</a>
            </li>
            <li class="{{ (\Request::route()->getName() == 'projects.index') ? 'active' : '' }}">
                <a href="{{ route('projects.index') }}">Реализованные проекты</a>
            </li>
        </ul>
    </nav>
</section>
