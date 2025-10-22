@extends('front.layouts')

@section('title', 'О нас')

@section('content')
    <main class="main">
        <!-- Breadcrumbs -->
        <div class="container">
            <div class="breadcrumbs">
                <nav class="breadcrumbs__nav">
                    <a href="{{ url('/') }}" class="breadcrumbs__link">Главная</a>
                    <span class="breadcrumbs__separator">/</span>
                    <span class="breadcrumbs__current">О&#160;нас</span>
                </nav>
            </div>
        </div>

        <!-- Hero Banner -->
        <section class="hero-banner hero-banner--shifted-img">
            <div class="container">
                <div class="hero-banner__image" aria-hidden="true">
                    <img class="hero-banner__img" src="{{ asset('front/img/object/about_us_bg.jpg') }}" alt="BPM металлопрокат">
                </div>
                <div class="hero-banner__content">
                    <div class="hero-banner__text">
                        <h1 class="section-title small-margin">BPM&#160;&#8212; ваш стабильный партнёр в&#160;мире металлопроката</h1>
                        <div class="hero-banner__actions">
                            <a href="#contact-section" class="btn btn--primary">
                                <span>Стать партнёром</span>
                                <span class="btn__icon">
                            <svg class="icon icon--arrow-up-right">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                            </svg>
                        </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission Section -->
        <section class="mission-section">
            <div class="container">
                <div class="mission-section__content">
                    <div class="mission-section__text">
                        <h2 class="section-title">Миссия компании</h2>
                        <p class="mission-section__description">
                            Мы&#160;обеспечиваем строительную, производственную и&#160;логистическую отрасли Молдовы качественным металлопрокатом,
                            чтобы каждый проект был реализован точно в&#160;срок и&#160;без компромиссов по&#160;качеству.
                        </p>
                    </div>
                    <div class="mission-section__stats">
                        <div class="stats-grid stats-grid--two">
                            <div class="stats-card stats-card--secondary">
                                <div class="stats-number">~ 1200</div>
                                <div class="stats-label">Позиций в&#160;каталоге</div>
                            </div>
                            <div class="stats-card stats-card--secondary">
                                <div class="stats-number">4</div>
                                <div class="stats-label">Металоцентров</div>
                            </div>
                            <div class="stats-card stats-card--secondary">
                                <div class="stats-number">13</div>
                                <div class="stats-label">Собственных авто</div>
                            </div>
                            <div class="stats-card stats-card--secondary">
                                <div class="stats-number">50+</div>
                                <div class="stats-label">Сотрудников</div>
                            </div>
                            <a href="{{ url('catalog') }}" class="categories-section__card-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vision Section -->
        <section class="vision-section">
            <div class="container">
                <div class="vision-section__content">
                    <div class="vision-section__text">
                        <h2 class="section-title is-subtitle">Видение компании</h2>
                        <p class="vision-section__description">
                            Мы&#160;стремимся сформировать на&#160;молдавском рынке новый стандарт поставок металлопроката&#160;&#8212;
                            надёжный, прозрачный, гибкий. Хотим, чтобы каждый клиент воспринимал нас не&#160;только как продавца,
                            а&#160;как логистического и&#160;технического партнёра в&#160;своих проектах.
                        </p>
                    </div>
                    <div class="vision-section__quote">
                        <blockquote class="vision-quote">
                            <p class="vision-quote__text">
                                Мы&#160;не&#160;просто продаём металл. Мы&#160;помогаем клиентам строить и&#160;расти&#160;&#8212;
                                без рисков, задержек и&#160;лишних слов.
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="tabs-section tabs-section--reversed">
            <div class="container">
                <h2 class="section-title center">Преимущества ВРМ</h2>
                <div class="tabs-section__content">
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
                    <div class="tabs-section__text">
                        <div class="tabs-section__list">
                            <div class="tabs-section__item tabs-section__item--active" data-tab="0">
                                <div class="tabs-section__number">1</div>
                                <div class="tabs-section__item-content">
                                    <h3 class="card-title">Гибкая финансовая политика</h3>
                                    <p class="tabs-section__item-text">Работаем с&#160;юр. и&#160;физ. лицами, возможна рассрочка</p>
                                </div>
                            </div>
                            <div class="tabs-section__item" data-tab="1">
                                <div class="tabs-section__number">2</div>
                                <div class="tabs-section__item-content">
                                    <h3 class="card-title">Широкий ассортимент</h3>
                                    <p class="tabs-section__item-text">Металлопрокат всех видов от&#160;листового металла до&#160;балки</p>
                                </div>
                            </div>
                            <div class="tabs-section__item" data-tab="2">
                                <div class="tabs-section__number">3</div>
                                <div class="tabs-section__item-content">
                                    <h3 class="card-title">Удобная логистика</h3>
                                    <p class="tabs-section__item-text">Доставляем по&#160;всей Молдове, возможна доставка в&#160;день заказа</p>
                                </div>
                            </div>
                            <div class="tabs-section__item" data-tab="3">
                                <div class="tabs-section__number">4</div>
                                <div class="tabs-section__item-content">
                                    <h3 class="card-title">Выгодные закупочные цены</h3>
                                    <p class="tabs-section__item-text">Индивидуальные условия для постоянных клиентов</p>
                                </div>
                            </div>
                            <div class="tabs-section__item" data-tab="4">
                                <div class="tabs-section__number">5</div>
                                <div class="tabs-section__item-content">
                                    <h3 class="card-title">Точное соответствие размеров</h3>
                                    <p class="tabs-section__item-text">Честный металл: без недовеса, по&#160;стандартам и&#160;с&#160;сертификатами</p>
                                </div>
                            </div>
                            <div class="tabs-section__item" data-tab="5">
                                <div class="tabs-section__number">6</div>
                                <div class="tabs-section__item-content">
                                    <h3 class="card-title">От&#160;1 листа до&#160;тонны</h3>
                                    <p class="tabs-section__item-text">Продаём и&#160;оптом, и&#160;в&#160;розницу без ограничений</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Certificates Section -->
        <section class="certificates-section">
            <div class="container">
                <div class="certificates-section__header">
                    <h2 class="section-title">Сертификаты и&#160;<br>стандарты</h2>
                    <div class="certificates-section__description">
                        <p>
                            Вся поставляемая продукция проходит обязательный контроль качества и&#160;соответствует международным и&#160;национальным стандартам:
                            ISO, ГОСТ, EN&#160;и&#160;другим. Ниже представлены актуальные сертификаты компании ВРМ.
                        </p>
                    </div>
                </div>
                <div class="certificates-section__content">
                    <div class="certificates-section__slider">
                        <div class="certificates-section__slider-container">
                            <div class="certificates-section__slider-track">

                                <!-- ISO -->
                                <div class="certificates-section__slide certificates-section__slide--active" data-certificate="iso">
                                    <div class="certificates-section__logo">
                                        <img src="{{ asset('front/img/ISO.png') }}" alt="ISO Logo" class="certificates-section__logo-img">
                                    </div>
                                    <div class="certificates-section__info">
                                        <div class="certificates-section__details">
                                            <h3 class="certificates-section__cert-title">Сертификат ISO 9001</h3>
                                            <div class="certificates-section__details-list">
                                                <div class="certificates-section__detail-item">
                                                    <span class="certificates-section__detail-label">Стандарт/ Регламент</span>
                                                    <span class="certificates-section__detail-value">ISO 9001:2015</span>
                                                </div>
                                                <div class="certificates-section__detail-item">
                                                    <span class="certificates-section__detail-label">Что подтверждает</span>
                                                    <span class="certificates-section__detail-value">Система менеджмента качества</span>
                                                </div>
                                                <div class="certificates-section__detail-item">
                                                    <span class="certificates-section__detail-label">Срок действия</span>
                                                    <span class="certificates-section__detail-value">до&#160;12.2025</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="certificates-section__action">
                                            <button class="btn btn--primary">
                                                <span>Скачать сертификат</span>
                                                <span class="btn__icon">
                                            <svg class="icon">
                                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowLineDown') }}"></use>
                                            </svg>
                                        </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- GOST -->
                                <div class="certificates-section__slide" data-certificate="gost">
                                    <div class="certificates-section__logo">
                                        <img src="{{ asset('front/img/GOST.png') }}" alt="GOST Logo" class="certificates-section__logo-img">
                                    </div>
                                    <div class="certificates-section__info">
                                        <div class="certificates-section__details">
                                            <h3 class="certificates-section__cert-title">Сертификат ГОСТ</h3>
                                            <div class="certificates-section__details-list">
                                                <div class="certificates-section__detail-item">
                                                    <span class="certificates-section__detail-label">Стандарт/ Регламент</span>
                                                    <span class="certificates-section__detail-value">ГОСТ 27772-2015</span>
                                                </div>
                                                <div class="certificates-section__detail-item">
                                                    <span class="certificates-section__detail-label">Что подтверждает</span>
                                                    <span class="certificates-section__detail-value">Качество металлопроката</span>
                                                </div>
                                                <div class="certificates-section__detail-item">
                                                    <span class="certificates-section__detail-label">Срок действия</span>
                                                    <span class="certificates-section__detail-value">до&#160;12.2026</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="certificates-section__action">
                                            <button class="btn btn--primary">
                                                <span>Скачать сертификат</span>
                                                <span class="btn__icon">
                                            <svg class="icon">
                                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowLineDown') }}"></use>
                                            </svg>
                                        </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slider Controls -->
                            <button class="certificates-section__slider-btn certificates-section__slider-btn--prev">
                                <svg class="icon icon--caret-left">
                                    <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#CaretLeft') }}"></use>
                                </svg>
                            </button>
                            <button class="certificates-section__slider-btn certificates-section__slider-btn--next">
                                <svg class="icon icon--caret-right">
                                    <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#CaretRight') }}"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cooperation Section -->
        <section class="cooperation-section">
            <div class="container">
                <div class="section__header">
                    <h2 class="section-title center is-subtitle">Готовы начать сотрудничество?</h2>
                    <p class="section-subtitle center">
                        Мы&#160;готовы обсудить партнёрство, помочь с&#160;расчётом заказа или согласовать встречу в&#160;нашем офисе.
                    </p>
                </div>
                <div class="benefits__grid">
                    <div class="benefits__card with-button">
                        <h3 class="card-title">Стать партнёром</h3>
                        <button class="btn btn--icon-only">
                            <svg class="icon icon--arrow-up-right">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="benefits__card with-button">
                        <h3 class="card-title">Связаться с&#160;нами</h3>
                        <button class="btn btn--icon-only">
                            <svg class="icon icon--arrow-up-right">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="benefits__card with-button">
                        <h3 class="card-title">Посмотреть каталог</h3>
                        <button class="btn btn--icon-only">
                            <svg class="icon icon--arrow-up-right">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section class="categories-section">
            <div class="container">
                <h2 class="section-title">Продукция, которую мы&#160;поставляем</h2>

                <div class="categories-section__tabs">
                    <button class="categories-section__tab categories-section__tab--active" data-category="metal">Металлопрокат</button>
                    <button class="categories-section__tab" data-category="cement">Цемент</button>
                    <button class="categories-section__tab" data-category="concrete">Бетон</button>
                </div>

                <div class="categories-section__content">
                    {{-- Металлопрокат --}}
                    <div class="categories-section__grid categories-section__grid--active" data-category="metal">
                        @foreach ([
                            ['Арматура', 'armatura.png'],
                            ['Труба профильная', 'truba-profilnaya.png'],
                            ['Труба круглая', 'truba-kruglaya.png'],
                            ['Швелер', 'shveller.png'],
                            ['Двутавр', 'dvutavr.png'],
                        ] as [$title, $img])
                            <div class="categories-section__card">
                                <h3 class="card-title">{{ $title }}</h3>
                                <div class="categories-section__card-image">
                                    <img src="{{ asset("front/img/products/$img") }}" alt="{{ $title }}" class="categories-section__card-img">
                                </div>
                                <span class="btn btn--icon-only categories-section__card-btn">
                            <svg class="icon icon--arrow-up-right">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                            </svg>
                        </span>
                                <a href="#" class="categories-section__card-link"></a>
                            </div>
                        @endforeach

                        <div class="categories-section__card categories-section__card--view-all">
                            <div class="categories-section__card-content">
                                <h3 class="card-title">Просмотреть всю продукцию</h3>
                                <span class="btn btn--icon-only categories-section__card-btn">
                            <svg class="icon icon--arrow-up-right">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                            </svg>
                        </span>
                            </div>
                            <a href="{{ url('catalog') }}" class="categories-section__card-link"></a>
                        </div>
                    </div>

                    {{-- Цемент --}}
                    <div class="categories-section__grid" data-category="cement">
                        @foreach ([
                            ['Цемент 550', 'cement_1.png'],
                            ['Цемент 500', 'cement_2.png'],
                        ] as [$title, $img])
                            <div class="categories-section__card">
                                <h3 class="card-title">{{ $title }}</h3>
                                <div class="categories-section__card-image">
                                    <img src="{{ asset("front/img/products/$img") }}" alt="{{ $title }}" class="categories-section__card-img">
                                </div>
                                <span class="btn btn--icon-only categories-section__card-btn">
                            <svg class="icon icon--arrow-up-right">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                            </svg>
                        </span>
                                <a href="#" class="categories-section__card-link"></a>
                            </div>
                        @endforeach

                        <div class="categories-section__card categories-section__card--view-all">
                            <div class="categories-section__card-content">
                                <h3 class="card-title">Просмотреть всю продукцию</h3>
                                <span class="btn btn--icon-only categories-section__card-btn">
                            <svg class="icon icon--arrow-up-right">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                            </svg>
                        </span>
                            </div>
                            <a href="{{ url('catalog') }}" class="categories-section__card-link"></a>
                        </div>
                    </div>

                    {{-- Бетон --}}
                    <div class="categories-section__grid" data-category="concrete">
                        @foreach ([
                            ['Бетон C8/10', 'concrete-gravel-c8-10.png'],
                            ['Бетон C12/15', 'concrete-gravel-c12-15.png'],
                            ['Бетон C16/20', 'concrete-gravel-c16-20.png'],
                            ['Бетон C25/30', 'concrete-granite-c25-30.png'],
                            ['Бетон C30/37', 'concrete-granite-c30-37.png'],
                        ] as [$title, $img])
                            <div class="categories-section__card">
                                <h3 class="card-title">{{ $title }}</h3>
                                <div class="categories-section__card-image">
                                    <img src="{{ asset("front/img/products/$img") }}" alt="{{ $title }}" class="categories-section__card-img">
                                </div>
                                <span class="btn btn--icon-only categories-section__card-btn">
                            <svg class="icon icon--arrow-up-right">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                            </svg>
                        </span>
                                <a href="#" class="categories-section__card-link"></a>
                            </div>
                        @endforeach

                        <div class="categories-section__card categories-section__card--view-all">
                            <div class="categories-section__card-content">
                                <h3 class="card-title">Просмотреть всю продукцию</h3>
                                <span class="btn btn--icon-only categories-section__card-btn">
                            <svg class="icon icon--arrow-up-right">
                                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                            </svg>
                        </span>
                            </div>
                            <a href="{{ url('catalog') }}" class="categories-section__card-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section" id="contact-section">
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
                            <img src="{{ asset('front/img/contact_form_img.png') }}"
                                 alt="Металлопрокат и строительные материалы"
                                 class="contact-section__img">
                        </div>
                    </div>

                    <div class="contact-section__form">
                        <form class="contact-form" method="POST" action="#">
                            @csrf
                            <div class="contact-form__field">
                                <input type="text" name="name" placeholder="Имя"
                                       class="contact-form__input" required>
                            </div>

                            <div class="contact-form__field">
                                <input type="email" name="email" placeholder="E-mail"
                                       class="contact-form__input" required>
                            </div>

                            <div class="contact-form__field">
                                <input type="tel" name="phone" placeholder="Телефон"
                                       class="contact-form__input" required>
                            </div>

                            <div class="contact-form__field">
                        <textarea name="question" placeholder="Вопрос"
                                  class="contact-form__textarea" rows="4"></textarea>
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
