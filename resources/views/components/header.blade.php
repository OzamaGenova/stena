<style>
    .logo {
        color: #fff;
        font-size: 1.8rem;
        padding: 12px 32px;
        background-color: #909090;
    }

    .main-nav {
        display: flex;
        flex-direction: column;
    }

    .toolbar {
        height: 80px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .toolbar, .main-nav li {
        background-color: #b4aea6;
    }

    .toolbar .search {
        display: flex;
        border: 2px solid #fff;
        border-radius: 20px;
        padding: 4px 20px;
        margin: 0;
        margin-right: 10px;
    }

    .toolbar .search input, .toolbar .search button {
        color: #fff;
        background-color: transparent;
    }

    .main-nav .toolbar > ul {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .main-nav ul {
        padding: 0;
    }

    .main-nav li {
        padding: 20px;
        position: relative;
    }
    .main-nav a {
        color: #fff;
    }

    /* отображение выпадающего меню */
    .main-nav ul ul {
        display: none;
        position: absolute;
        z-index: 100;
        top: 48px;
        left: 0;
    }

    .main-nav li:hover ul {
        display: block !important;
    }
</style>
<nav class="main-nav">
    <div class="logo">ГК Стена</div>
    <div class="toolbar">
        <ul>
            <li>
                <a href="{{ route('categories.show', 'catalog') }}">Каталог продукции</a>
                @if(isset($categories['catalog']['children']))
                    <ul>
                        @foreach($categories['catalog']['children'] as $category)
                            <li>
                                <a href="{{ route('categories.show', $category['slug']) }}">
                                    {{ $category['title'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
            <li>
                <a href="{{ route('categories.show', 'solutions') }}">Решения</a>
                @if(isset($categories['solutions']['children']))
                    <ul>
                        @foreach($categories['solutions']['children'] as $category)
                            <li>
                                <a href="{{ route('categories.show', $category['slug']) }}">
                                    {{ $category['title'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
            <li>
                <a href="{{ route('categories.show', 'textures') }}">Текстуры</a>
                @if(isset($categories['textures']['children']))
                    <ul>
                        @foreach($categories['textures']['children'] as $category)
                            <li>
                                <a href="{{ route('categories.show', $category['slug']) }}">
                                    {{ $category['title'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
            <li>
                <a href="#">Дилерам и дизайнерам</a>
            </li>
            <li>
                <a href="#">Производство под СТМ</a>
            </li>
            <li>
                <a href="#">О компании</a>
                <ul>
                    <li>
                        <a href="/pages/contacts">
                            Контакты
                        </a>
                    </li>
                    <li>
                        <a href="/pages/about">
                            О нас
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <form>
            <label class="search">
                <input  type="search" placeholder="Поиск">
                <button type="submit">Найти</button>
            </label>
        </form>
    </div>
</nav>
