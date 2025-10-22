@extends('front.layouts')

@section('title', 'BPM — Главная')

@section('content')
    <main class="main">
        <!-- Хіро слайдер -->
        <section class="hero" tabindex="0">
            <div class="hero__slider">
                <div class="hero__slide hero__slide--active">
                    <div class="hero__content">
                        <div class="hero__image" aria-hidden="true">
                            <img class="hero__img" src="{{ asset('front/img/hero/slide-1.png') }}" alt="Металопрокат">
                        </div>
                        <div class="container">
                            <div class="hero__text">
                                <h1 class="hero__title">
                                    <span class="hero__title--accent">Надёжность и&#160;стабильность</span>
                                    вашего проекта&#160;&#8212; наш стандарт
                                </h1>
                                <button class="btn btn--primary">
                                    <span>Посмотреть каталог</span>
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

                <div class="hero__slide">
                    <div class="hero__content">
                        <div class="hero__image" aria-hidden="true">
                            <img class="hero__img" src="{{ asset('front/img/hero/slide-2.png') }}" alt="Бетон">
                        </div>
                        <div class="container">
                            <div class="hero__text">
                                <h1 class="hero__title">
                                    <span class="hero__title--accent">Прочность и&#160;качество</span>
                                    для вашего строительства
                                </h1>
                                <button class="btn btn--primary">
                                    <span>Посмотреть каталог</span>
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

                <div class="hero__slide">
                    <div class="hero__content">
                        <div class="hero__image" aria-hidden="true">
                            <img class="hero__img" src="{{ asset('front/img/hero/slide-3.png') }}" alt="Цемент">
                        </div>
                        <div class="container">
                            <div class="hero__text">
                                <h1 class="hero__title">
                                    <span class="hero__title--accent">Качественный цемент</span>
                                    &#160;&#8212; основа вашего строительства
                                </h1>
                                <button class="btn btn--primary">
                                    <span>Посмотреть каталог</span>
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
            </div>

            <!-- Індикатори слайдів -->
            <div class="hero__indicators">
                <button class="hero__indicator hero__indicator--active" data-slide="0"></button>
                <button class="hero__indicator" data-slide="1"></button>
                <button class="hero__indicator" data-slide="2"></button>
            </div>
        </section>

        <!-- Блок переваг -->
        <section class="benefits">
            <div class="container">
                <div class="benefits__grid">
                    <div class="benefits__card">
                        <h3 class="card-title">Метал всегда в&#160;наличии</h3>
                        <p class="benefits__text">
                            Полный ассортимент металлопроката на&#160;складах в&#160;Молдове без задержек и&#160;срывов.
                        </p>
                    </div>
                    <div class="benefits__card">
                        <h3 class="card-title">Доставка за&#160;24 часа</h3>
                        <p class="benefits__text">
                            Оперативно привозим заказы по&#160;всей стране&#160;&#8212; быстро, без лишней суеты.
                        </p>
                    </div>
                    <div class="benefits__card">
                        <h3 class="card-title">Без переплат и&#160;наценок</h3>
                        <p class="benefits__text">
                            Прозрачные ценообразования и&#160;выгодные условия закупки для любого объема.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Блок з табами -->
        <section class="tabs-section">
            <div class="container">
                <h2 class="section-title center">Для кого мы&#160;работаем</h2>
                <div class="tabs-section__content">
                    <div class="tabs-section__text">
                        <div class="tabs-section__list">
                            <div class="tabs-section__item tabs-section__item--active" data-tab="0">
                                <div class="tabs-section__number">1</div>
                                <div class="tabs-section__item-content">
                                    <h3 class="card-title">Строительные компании</h3>
                                    <p class="tabs-section__item-text">
                                        Стабильные поставки металлопроката без срывов и&#160;задержек.
                                    </p>
                                </div>
                            </div>
                            <div class="tabs-section__item" data-tab="1">
                                <div class="tabs-section__number">2</div>
                                <div class="tabs-section__item-content">
                                    <h3 class="card-title">Девелоперы и&#160;застройщики</h3>
                                    <p class="tabs-section__item-text">
                                        Контроль бюджета и&#160;сроков&#160;&#8212; весь металл в&#160;одном месте.
                                    </p>
                                </div>
                            </div>
                            <div class="tabs-section__item" data-tab="2">
                                <div class="tabs-section__number">3</div>
                                <div class="tabs-section__item-content">
                                    <h3 class="card-title">Прорабы и&#160;мастера</h3>
                                    <p class="tabs-section__item-text">
                                        Экономия времени&#160;&#8212; нужный металл в&#160;наличии и&#160;с&#160;быстрой отгрузкой.
                                    </p>
                                </div>
                            </div>
                            <div class="tabs-section__item" data-tab="3">
                                <div class="tabs-section__number">4</div>
                                <div class="tabs-section__item-content">
                                    <h3 class="card-title">Дилеры и&#160;металлобазы</h3>
                                    <p class="tabs-section__item-text">
                                        Хорошие закупочные цены и&#160;складская программа под потребности.
                                    </p>
                                </div>
                            </div>
                            <div class="tabs-section__item" data-tab="4">
                                <div class="tabs-section__number">5</div>
                                <div class="tabs-section__item-content">
                                    <h3 class="card-title">Производственные предприятия</h3>
                                    <p class="tabs-section__item-text">
                                        Поставка металла под заказы&#160;&#8212; без остановок или пауз в&#160;производстве.
                                    </p>
                                </div>
                            </div>
                            <div class="tabs-section__item" data-tab="5">
                                <div class="tabs-section__number">6</div>
                                <div class="tabs-section__item-content">
                                    <h3 class="card-title">Частные клиенты и&#160;фермеры</h3>
                                    <p class="tabs-section__item-text">
                                        Можно купить любой объём без переплат&#160;&#8212; от&#160;листа до&#160;тонны.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-section__image">
                        <div class="tabs-section__img-container">
                            <img src="{{ asset('front/img/tabs_who_we_work_for/1.jpg') }}" alt="Строительные компании" class="tabs-section__img tabs-section__img--active">
                            <img src="{{ asset('front/img/tabs_who_we_work_for/2.jpg') }}" alt="Девелоперы и застройщики" class="tabs-section__img">
                            <img src="{{ asset('front/img/tabs_who_we_work_for/3.jpg') }}" alt="Прорабы и мастера" class="tabs-section__img">
                            <img src="{{ asset('front/img/tabs_who_we_work_for/4.jpg') }}" alt="Дилеры и металлобазы" class="tabs-section__img">
                            <img src="{{ asset('front/img/tabs_who_we_work_for/5.jpg') }}" alt="Производственные предприятия" class="tabs-section__img">
                            <img src="{{ asset('front/img/tabs_who_we_work_for/6.jpg') }}" alt="Частные клиенты и фермеры" class="tabs-section__img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Блок проблем та рішень -->
        <section class="problems-section">
            <div class="container">
                <h2 class="section-title center">Проблемы, которые мы&#160;решаем</h2>
                <div class="problems-section__list">
                    <div class="problems-section__item">
                        <div class="problems-section__problem">
                            <h3 class="card-title">Нет наличия на&#160;складе</h3>
                        </div>
                        <div class="problems-section__solution">
                            <h4 class="card-title">87% ассортимента&#160;&#8212; всегда на&#160;складе</h4>
                            <p class="problems-section__solution-text">
                                Основные позиции доступны для отгрузки со&#160;всех складов без ожидания.
                            </p>
                        </div>
                    </div>
                    <div class="problems-section__item">
                        <div class="problems-section__problem">
                            <h3 class="card-title">Задержки поставок</h3>
                        </div>
                        <div class="problems-section__solution">
                            <h4 class="card-title">Отправка за&#160;24 часа</h4>
                            <p class="problems-section__solution-text">
                                90% заказов отгружаем в&#160;течение суток&#160;&#8212; без задержек и&#160;ожидания.
                            </p>
                        </div>
                    </div>
                    <div class="problems-section__item">
                        <div class="problems-section__problem">
                            <h3 class="card-title">Высокие и&#160;нестабильные цены</h3>
                        </div>
                        <div class="problems-section__solution">
                            <h4 class="card-title">Прозрачные цены без сюрпризов</h4>
                            <p class="problems-section__solution-text">
                                Конкурентные условия и&#160;честное ценообразование&#160;&#8212;
                                никаких неожиданных доплат в&#160;счёте.
                            </p>
                        </div>
                    </div>
                    <div class="problems-section__item">
                        <div class="problems-section__problem">
                            <h3 class="card-title">Нет технической поддержки</h3>
                        </div>
                        <div class="problems-section__solution">
                            <h4 class="card-title">Ваш персональный эксперт</h4>
                            <p class="problems-section__solution-text">
                                Рассчитаем нужное сечение, подберём марку и&#160;объясним все детали простым языком.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="problems-section__action">
                    <button class="btn btn--primary">
                        <span>Получить консультацию</span>
                        <span class="btn__icon">
                    <svg class="icon icon--arrow-up-right">
                        <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                    </svg>
                </span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Блок категорій продукції -->
        <section class="categories-section">
            <div class="container">
                <h2 class="section-title center">Категории продукции</h2>
                <div class="categories-section__tabs">
                    <button class="categories-section__tab categories-section__tab--active" data-category="metal">
                        Металлопрокат
                    </button>
                    <button class="categories-section__tab" data-category="cement">
                        Цемент
                    </button>
                    <button class="categories-section__tab" data-category="concrete">
                        Бетон
                    </button>
                </div>

                <div class="categories-section__content">
                    {{-- Металлопрокат --}}
                    <div class="categories-section__grid categories-section__grid--active" data-category="metal">
                        <div class="categories-section__card">
                            <h3 class="card-title">Арматура</h3>
                            <div class="categories-section__card-image">
                                <img src="{{ asset('front/img/products/armatura.png') }}" alt="Арматура" class="categories-section__card-img">
                            </div>
                            <span class="btn btn--icon-only categories-section__card-btn">
                        <svg class="icon icon--arrow-up-right">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                        </svg>
                    </span>
                            <a href="armatura.html" class="categories-section__card-link"></a>
                        </div>

                        <div class="categories-section__card">
                            <h3 class="card-title">Труба профильная</h3>
                            <div class="categories-section__card-image">
                                <img src="{{ asset('front/img/products/truba-profilnaya.png') }}" alt="Труба профильная" class="categories-section__card-img">
                            </div>
                            <span class="btn btn--icon-only categories-section__card-btn">
                        <svg class="icon icon--arrow-up-right">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                        </svg>
                    </span>
                            <a href="truba-profilnaya.html" class="categories-section__card-link"></a>
                        </div>

                        <div class="categories-section__card">
                            <h3 class="card-title">Труба круглая</h3>
                            <div class="categories-section__card-image">
                                <img src="{{ asset('front/img/products/truba-kruglaya.png') }}" alt="Труба круглая" class="categories-section__card-img">
                            </div>
                            <span class="btn btn--icon-only categories-section__card-btn">
                        <svg class="icon icon--arrow-up-right">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                        </svg>
                    </span>
                            <a href="truba-kruglaya.html" class="categories-section__card-link"></a>
                        </div>

                        <div class="categories-section__card">
                            <h3 class="card-title">Швелер</h3>
                            <div class="categories-section__card-image">
                                <img src="{{ asset('front/img/products/shveller.png') }}" alt="Швелер" class="categories-section__card-img">
                            </div>
                            <span class="btn btn--icon-only categories-section__card-btn">
                        <svg class="icon icon--arrow-up-right">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                        </svg>
                    </span>
                            <a href="shveller.html" class="categories-section__card-link"></a>
                        </div>

                        <div class="categories-section__card">
                            <h3 class="card-title">Двутавр</h3>
                            <div class="categories-section__card-image">
                                <img src="{{ asset('front/img/products/dvutavr.png') }}" alt="Двутавр" class="categories-section__card-img">
                            </div>
                            <span class="btn btn--icon-only categories-section__card-btn">
                        <svg class="icon icon--arrow-up-right">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                        </svg>
                    </span>
                            <a href="dvutavr.html" class="categories-section__card-link"></a>
                        </div>

                        <div class="categories-section__card categories-section__card--view-all">
                            <div class="categories-section__card-content">
                                <h3 class="card-title">Просмотреть всю продукцию</h3>
                                <span class="btn btn--icon-only categories-section__card-btn">
                            <svg class="icon icon--arrow-up-right">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                            </svg>
                        </span>
                            </div>
                            <a href="catalog.html" class="categories-section__card-link"></a>
                        </div>
                    </div>

                    {{-- Цемент --}}
                    <div class="categories-section__grid" data-category="cement">
                        <div class="categories-section__card">
                            <h3 class="card-title">Цемент 550</h3>
                            <div class="categories-section__card-image">
                                <img src="{{ asset('front/img/products/cement_1.png') }}" alt="Цемент 550" class="categories-section__card-img">
                            </div>
                            <span class="btn btn--icon-only categories-section__card-btn">
                        <svg class="icon icon--arrow-up-right">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                        </svg>
                    </span>
                            <a href="cement-550.html" class="categories-section__card-link"></a>
                        </div>

                        <div class="categories-section__card">
                            <h3 class="card-title">Цемент 500</h3>
                            <div class="categories-section__card-image">
                                <img src="{{ asset('front/img/products/cement_2.png') }}" alt="Цемент 500" class="categories-section__card-img">
                            </div>
                            <span class="btn btn--icon-only categories-section__card-btn">
                        <svg class="icon icon--arrow-up-right">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                        </svg>
                    </span>
                            <a href="cement-500.html" class="categories-section__card-link"></a>
                        </div>

                        <div class="categories-section__card categories-section__card--view-all">
                            <div class="categories-section__card-content">
                                <h3 class="card-title">Просмотреть всю продукцию</h3>
                                <span class="btn btn--icon-only categories-section__card-btn">
                            <svg class="icon icon--arrow-up-right">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                            </svg>
                        </span>
                            </div>
                            <a href="catalog.html" class="categories-section__card-link"></a>
                        </div>
                    </div>

                    {{-- Бетон --}}
                    <div class="categories-section__grid" data-category="concrete">
                        <div class="categories-section__card">
                            <h3 class="card-title">Бетон C8/10</h3>
                            <div class="categories-section__card-image">
                                <img src="{{ asset('front/img/products/concrete-gravel-c8-10.png') }}" alt="Бетон C8/10" class="categories-section__card-img">
                            </div>
                            <span class="btn btn--icon-only categories-section__card-btn">
                        <svg class="icon icon--arrow-up-right">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                        </svg>
                    </span>
                            <a href="concrete-c8-10.html" class="categories-section__card-link"></a>
                        </div>

                        <div class="categories-section__card">
                            <h3 class="card-title">Бетон C12/15</h3>
                            <div class="categories-section__card-image">
                                <img src="{{ asset('front/img/products/concrete-gravel-c12-15.png') }}" alt="Бетон C12/15" class="categories-section__card-img">
                            </div>
                            <span class="btn btn--icon-only categories-section__card-btn">
                        <svg class="icon icon--arrow-up-right">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                        </svg>
                    </span>
                            <a href="concrete-c12-15.html" class="categories-section__card-link"></a>
                        </div>

                        <div class="categories-section__card">
                            <h3 class="card-title">Бетон C16/20</h3>
                            <div class="categories-section__card-image">
                                <img src="{{ asset('front/img/products/concrete-gravel-c16-20.png') }}" alt="Бетон C16/20" class="categories-section__card-img">
                            </div>
                            <span class="btn btn--icon-only categories-section__card-btn">
                        <svg class="icon icon--arrow-up-right">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                        </svg>
                    </span>
                            <a href="concrete-c16-20.html" class="categories-section__card-link"></a>
                        </div>

                        <div class="categories-section__card">
                            <h3 class="card-title">Бетон C25/30</h3>
                            <div class="categories-section__card-image">
                                <img src="{{ asset('front/img/products/concrete-granite-c25-30.png') }}" alt="Бетон C25/30" class="categories-section__card-img">
                            </div>
                            <span class="btn btn--icon-only categories-section__card-btn">
                        <svg class="icon icon--arrow-up-right">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                        </svg>
                    </span>
                            <a href="concrete-c25-30.html" class="categories-section__card-link"></a>
                        </div>

                        <div class="categories-section__card">
                            <h3 class="card-title">Бетон C30/37</h3>
                            <div class="categories-section__card-image">
                                <img src="{{ asset('front/img/products/concrete-granite-c30-37.png') }}" alt="Бетон C30/37" class="categories-section__card-img">
                            </div>
                            <span class="btn btn--icon-only categories-section__card-btn">
                        <svg class="icon icon--arrow-up-right">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                        </svg>
                    </span>
                            <a href="concrete-c30-37.html" class="categories-section__card-link"></a>
                        </div>

                        <div class="categories-section__card categories-section__card--view-all">
                            <div class="categories-section__card-content">
                                <h3 class="card-title">Просмотреть всю продукцию</h3>
                                <span class="btn btn--icon-only categories-section__card-btn">
                            <svg class="icon icon--arrow-up-right">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                            </svg>
                        </span>
                            </div>
                            <a href="catalog.html" class="categories-section__card-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Блок про компанію -->
        <section class="about-section">
            <div class="container">
                <div class="about-section__content">
                    <div class="about-section__text">
                        <div class="about-section__content-text">
                            <h2 class="section-title">ВРМ&#160;&#8212; надежность, проверенная годами</h2>
                            <h3 class="subsection-title">12 лет опыта на&#160;рынке</h3>
                            <p class="about-section__description">
                                Основаны 1&#160;февраля 2013 года. С&#160;тех пор&#160;&#8212;
                                тысячи успешных поставок для крупных и&#160;малых объектов по&#160;всей стране.
                            </p>
                        </div>
                        <button class="btn btn--primary">
                            <span>Узнать больше</span>
                            <span class="btn__icon">
                        <svg class="icon icon--arrow-up-right">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                        </svg>
                    </span>
                        </button>
                    </div>
                    <div class="about-section__image">
                        <img src="{{ asset('front/img/about-section.jpg') }}" alt="Здание компании ВРМ" class="about-section__img">
                    </div>
                </div>
            </div>
        </section>

        <!-- Блок партнерів -->
        <section class="partners-section">
            <div class="container">
                <h2 class="section-title">
                    Нам доверяют лидеры рынка в&#160;разных сферах производства и&#160;торговли
                </h2>
                <div class="partners-section__grid">
                    <div class="partners-section__item">
                        <img src="{{ asset('front/img/partners/chisinau-arena.svg') }}" alt="CHISINAU ARENA" class="partners-section__logo">
                    </div>
                    <div class="partners-section__item">
                        <img src="{{ asset('front/img/partners/radisson-blu.svg') }}" alt="Radisson BLU" class="partners-section__logo">
                    </div>
                    <div class="partners-section__item">
                        <img src="{{ asset('front/img/partners/port-mall.svg') }}" alt="PORT MALL" class="partners-section__logo">
                    </div>
                    <div class="partners-section__item">
                        <img src="{{ asset('front/img/partners/courtyard-marriott.svg') }}" alt="COURTYARD BY MARRIOTT" class="partners-section__logo">
                    </div>
                    <div class="partners-section__item">
                        <img src="{{ asset('front/img/partners/hora.svg') }}" alt="HORA" class="partners-section__logo">
                    </div>
                    <div class="partners-section__item">
                        <img src="{{ asset('front/img/partners/shopping-mall-dova.svg') }}" alt="shopping mall DOVA" class="partners-section__logo">
                    </div>
                </div>
            </div>
        </section>

        <!-- Блок контактної форми -->
        <section class="contact-section">
            <div class="container">
                <div class="contact-section__content">
                    <div class="contact-section__text">
                        <div class="contact-section__header">
                            <h2 class="section-title small-margin">Связаться с&#160;нами</h2>
                            <p class="contact-section__description">
                                Ответим на&#160;все вопросы, подготовим предложение и&#160;поможем подобрать оптимальное решение.
                            </p>
                        </div>
                        <div class="contact-section__image">
                            <img src="{{ asset('front/img/contact_form_img.png') }}" alt="Металлопрокат и строительные материалы" class="contact-section__img">
                        </div>
                    </div>

                    <div class="contact-section__form">
                        <form class="contact-form">
                            <div class="contact-form__field">
                                <input type="text" name="name" placeholder="Имя" class="contact-form__input" required>
                            </div>
                            <div class="contact-form__field">
                                <input type="email" name="email" placeholder="E-mail" class="contact-form__input" required>
                            </div>
                            <div class="contact-form__field">
                                <input type="tel" name="phone" placeholder="Телефон" class="contact-form__input" required>
                            </div>
                            <div class="contact-form__field">
                                <textarea name="question" placeholder="Вопрос" class="contact-form__textarea" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn--primary long contact-form__submit">
                                <span>Отправить</span>
                                <span class="btn__icon">
                            <svg class="icon icon--arrow-up-right">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                            </svg>
                        </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
