<head>
    <style>
        header {
            display: flex;
            justify-content: center;
        }

        .header__nav {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 16px;
        }

        .header__nav ul {
            display: flex;
        }

        .header__nav li {
            display: block;
        }

        .header__nav a {
            display: block;
            padding: 16px 24px;
        }

        .header__nav a:hover {
            background-color: rgba(0, 0, 0, 0.19);
        }

        .header__search {
            width: 360px;
            height: 100%;
        }

        .header__search input {
            width: 100%;
            height: 100%;
            padding: 0 16px;
            border: none;
            background-color: #333333;
            color: #FFFFFF;
        }
        .phone{
            display: flex !important;
            img{
                width: 24px;
                height: 24px;
            }  
        }
    </style>
</head>

<body>
        <header>
        <nav class="header__nav">
            <ul>
                <li>
                    <a href="/pages/about">●&nbsp;О&nbsp;компании</a>
                </li>

                <li>
                    <a href="/">●&nbsp;&nbsp;Главная&nbsp;</a>
                </li>
                <li>
                    <a href="/pages/contacts">●&nbsp;&nbsp;Контакты</a>
                </li>
                
            </ul>

            <form class="header__search">
                <label>
                    <input type="search" placeholder="Поиск по сайту">
                </label>
            </form>

            <ul>
                <li class="mail">
                    <a href="mailto:info.stena18@mail.ru"><img src="/images/send.png">info.stena18@mail.ru</a>
                </li>
                <li class="phone">
                    <a href="tel:+73412439700"><img src="/images/telephone.png">+7 3412 439-700</a>
                </li>
            </ul>
        </nav>
    </header>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('link').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('place').scrollIntoView();
        });
        });
    </script>
</body>
