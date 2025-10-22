<header class="header">
    <!-- Верхній рядок -->
    <div class="header__top">
        <div class="container">
            <div class="header__top-content">
                <nav class="header__nav nav">
                    <ul class="nav__list">
                        <li class="nav__item dropdown">
                            <button type="button" class="nav__link dropdown__trigger" aria-expanded="false">
                                Продукты
                                <svg class="icon icon--arrow-down">
                                    <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#arrowdown') }}"></use>
                                </svg>
                            </button>
                            <ul class="dropdown__menu" aria-hidden="true">
                                <li><a href="beton.html" class="dropdown__link dropdown__link--active">Бетон</a></li>
                                <li><a href="catalog.html" class="dropdown__link">Цемент</a></li>
                                <li><a href="metal.html" class="dropdown__link">Металоконструкции</a></li>
                                <li><a href="transport.html" class="dropdown__link">Транспорт</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('services') }}" class="nav__link">Услуги</a></li>
                        <li><a href="partner.html" class="nav__link">Партнеры</a></li>
                        <li><a href="{{ route('about') }}" class="nav__link">О&#160;нас</a></li>
                    </ul>
                </nav>

                <div class="header__contacts">
                    <a href="tel:+37322480480" class="header__phone">+373 22 480 480</a>
                    <div class="header__language dropdown">
                        <button class="dropdown__trigger">
                            <span>RU</span>
                            <svg class="icon icon--arrow-down">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#arrowdown') }}"></use>
                            </svg>
                        </button>
                        <ul class="dropdown__menu">
                            <li><a href="#" class="dropdown__link dropdown__link--active">Русский</a></li>
                            <li><a href="#" class="dropdown__link">Rom&#226;nă</a></li>
                            <li><a href="#" class="dropdown__link">English</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Основний рядок -->
    <div class="header__main">
        <div class="container">
            <div class="header__main-content">
                <button class="header__burger" aria-label="Открыть меню" data-popup="mobileMenuPopup">
                    <svg class="icon icon--menu">
                        <use href="./img/svgsprite/sprite.symbol.svg#burger"></use>
                    </svg>
                </button>
                <div class="header__logo">
                    <a href="index.html" class="logo">
                        <img src="{{ asset('front/img/logo.svg') }}" alt="BPM Logo" class="logo__img">
                    </a>
                </div>

                <div class="header__center">
                    <div class="header__category">
                        <button class="btn btn--category">
                            <svg class="icon icon--menu">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#burger') }}"></use>
                            </svg>
                            <span>Металлопрокат</span>
                        </button>
                    </div>

                    <div class="header__search">
                        <input type="text" placeholder="Поиск" class="search__input">
                        <svg class="icon icon--search">
                            <use href="{{ asset("front/img/svgsprite/sprite.symbol.svg#search") }}"></use>
                        </svg>
                    </div>
                </div>

                <div class="header__actions">
                    <button class="header__cart">
                        <svg class="icon icon--cart">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#cart') }}"></use>
                        </svg>
                        <span class="header__cart-badge">2</span>
                    </button>

                    <button class="btn btn--secondary" data-popup="metalCalculatorPopup">
                        <span>Калькулятор метала</span>
                        <span class="btn__icon">
                            <svg class="icon icon--arrow-up-right">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Меню-каталог металопрокату -->
    <div class="catalog-menu" id="catalogMenu">
        <div class="container">
            <div class="catalog-menu__content">
                <a href="#" class="catalog-menu__item">
                    <img src="{{ asset('front/img/products/armatura.png') }}" alt="Арматура" class="catalog-menu__img">
                    <span class="catalog-menu__text">Арматура</span>
                </a>
                <a href="#" class="catalog-menu__item">
                    <img src="{{ asset('front/img/products/dvutavr.png') }}" alt="Двутавр" class="catalog-menu__img">
                    <span class="catalog-menu__text">Двутавр</span>
                </a>
                <a href="#" class="catalog-menu__item">
                    <img src="{{ asset('front/img/products/polosa.png') }}" alt="Полоса" class="catalog-menu__img">
                    <span class="catalog-menu__text">Полоса</span>
                </a>
                <a href="#" class="catalog-menu__item">
                    <img src="{{ asset('front/img/products/truba-profilnaya.png') }}" alt="Труба профильная" class="catalog-menu__img">
                    <span class="catalog-menu__text">Труба профильная</span>
                </a>
                <a href="#" class="catalog-menu__item">
                    <img src="{{ asset('front/img/products/list.png') }}" alt="Лист" class="catalog-menu__img">
                    <span class="catalog-menu__text">Лист</span>
                </a>
                <a href="#" class="catalog-menu__item">
                    <img src="{{ asset('front/img/products/katanka.png') }}" alt="Катанка" class="catalog-menu__img">
                    <span class="catalog-menu__text">Катанка</span>
                </a>
                <a href="#" class="catalog-menu__item">
                    <img src="{{ asset('front/img/products/truba-kruglaya.png') }}" alt="Труба круглая" class="catalog-menu__img">
                    <span class="catalog-menu__text">Труба круглая</span>
                </a>
                <a href="#" class="catalog-menu__item">
                    <img src="{{ asset('front/img/products/ugolok.png') }}" alt="Уголок" class="catalog-menu__img">
                    <span class="catalog-menu__text">Уголок</span>
                </a>
                <a href="#" class="catalog-menu__item">
                    <img src="{{ asset('front/img/products/setka.png') }}" alt="Сетка" class="catalog-menu__img">
                    <span class="catalog-menu__text">Сетка</span>
                </a>
                <a href="#" class="catalog-menu__item">
                    <img src="{{ asset('front/img/products/shveller.png') }}" alt="Швеллер" class="catalog-menu__img">
                    <span class="catalog-menu__text">Швеллер</span>
                </a>
                <a href="#" class="catalog-menu__item">
                    <img src="{{ asset('front/img/products/kvadrat.png') }}" alt="Квадрат" class="catalog-menu__img">
                    <span class="catalog-menu__text">Квадрат</span>
                </a>
                <a href="#" class="catalog-menu__item">
                    <img src="{{ asset('front/img/products/provoloka.png') }}" alt="Проволока" class="catalog-menu__img">
                    <span class="catalog-menu__text">Проволока</span>
                </a>
            </div>
        </div>
    </div>
</header>
