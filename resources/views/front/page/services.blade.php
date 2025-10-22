@extends('front.layouts')

@section('title', 'Услуги')

@section('content')
    <main class="main">
        <!-- Хлібні крихти -->
        <div class="container">
            <div class="breadcrumbs">
                <nav class="breadcrumbs__nav">
                    <a href="{{ url('/') }}" class="breadcrumbs__link">Главная</a>
                    <span class="breadcrumbs__separator">/</span>
                    <span class="breadcrumbs__current">Услуги</span>
                </nav>
            </div>
        </div>

        <!-- Hero секція -->
        <section class="hero-banner hero-banner--shifted-img">
            <div class="container">
                <div class="hero-banner__image" aria-hidden="true">
                    <img class="hero-banner__img"
                         src="{{ asset('front/img/metal_processing_bg.jpg') }}"
                         alt="Обработка металла">
                </div>
                <div class="hero-banner__content">
                    <div class="hero-banner__text">
                        <h1 class="section-title small-margin">
                            Обработка металла под <br>любые задачи
                        </h1>
                        <p class="hero-banner__description">
                            Современное оборудование. Быстро, точно, под ваши требования.
                        </p>
                        <div class="hero-banner__actions">
                            <a href="#service-contact-form" class="btn btn--primary">
                                <span>Заказать услугу</span>
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

        <!-- Наши услуги -->
        <section class="tabs-section tabs-section--equal">
            <div class="container">
                <h2 class="section-title center">Наши услуги</h2>
                <div class="tabs-section__content">
                    <div class="tabs-section__text">
                        <div class="tabs-section__list">
                            @foreach([
                                ['Гибка металла', 'Формирование деталей различной геометрии. Используем современное оборудование для точной гибки.'],
                                ['Плазменная резка металла', 'Высокоточная резка листового и профильного металла любой сложности. Толщина — по требованиям проекта.'],
                                ['Токарные работы', 'Обработка металлических деталей на станках. Изготовление осей, валов, втулок, фланцев и других элементов.'],
                                ['Вальцовка', 'Придание металлу изогнутой формы (цилиндры, дуги и пр.). Работаем с трубами, профилями, листами.'],
                            ] as $i => [$title, $desc])
                                <div class="tabs-section__item {{ $i === 0 ? 'tabs-section__item--active' : '' }}" data-tab="{{ $i }}">
                                    <div class="tabs-section__number">{{ $i + 1 }}</div>
                                    <div class="tabs-section__item-content">
                                        <h3 class="card-title">{{ $title }}</h3>
                                        <p class="tabs-section__item-text">{{ $desc }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tabs-section__image">
                        <div class="tabs-section__img-container">
                            @foreach(['1.jpg','2.jpg','3.jpg','4.jpg'] as $i => $img)
                                <img src="{{ asset("front/img/services/$img") }}"
                                     alt="Услуга {{ $i + 1 }}"
                                     class="tabs-section__img {{ $i === 0 ? 'tabs-section__img--active' : '' }}">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="service-order-action">
                    <a href="#service-contact-form" class="btn btn--primary">
                        <span>Заказать услугу</span>
                        <span class="btn__icon">
                        <svg class="icon icon--arrow-up-right">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                        </svg>
                    </span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Почему выбирают нас -->
        <section class="features-section features-section--secondary">
            <div class="container">
                <div class="section__header">
                    <h2 class="section-title center is-subtitle">Почему выбирают нас</h2>
                </div>
                <div class="features-section__grid features-section__grid--two">
                    @foreach([
                        ['Users', 'Опытные специалисты', 'Команда профессионалов с многолетним опытом работы в металлообработке.'],
                        ['Wrench', 'Современное оборудование', 'Используем новейшие станки и технологии для точной и быстрой обработки.'],
                        ['Timer', 'Быстрые сроки выполнения', 'Выполняем заказы в кратчайшие сроки без потери качества.'],
                        ['UserFocus', 'Индивидуальный подход', 'Подбираем решения и технологии под задачи каждого клиента.'],
                    ] as [$icon, $title, $text])
                        <div class="feature-card feature-card--page-bg">
                            <div class="feature-card__icon">
                                <svg class="icon">
                                    <use href="{{ asset("front/img/svgsprite/sprite.symbol.svg#$icon") }}"></use>
                                </svg>
                            </div>
                            <div class="feature-card__content">
                                <h3 class="feature-card__title">{{ $title }}</h3>
                                <p class="feature-card__text">{{ $text }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Форма консультации -->
        <section class="service-form-section">
            <div class="container">
                <div class="service-form-section__content">
                    <div class="service-form-section__form">
                        <h2 class="section-title is-subtitle">Есть вопросы или нужна консультация?</h2>
                        <p class="section-subtitle-small mb-40">
                            Оставьте заявку — наш менеджер свяжется с вами и поможет с выбором продукции или расчётом стоимости.
                        </p>

                        <form class="contact-form" id="service-contact-form" method="POST" action="#">
                            @csrf
                            <div class="contact-form__field">
                                <input type="text" name="name" placeholder="Имя" class="contact-form__input" required>
                            </div>
                            <div class="contact-form__field">
                                <input type="tel" name="phone" placeholder="Телефон" class="contact-form__input" required>
                            </div>
                            <button type="submit" class="btn btn--primary long">
                                <span class="btn__text">Отправить</span>
                                <span class="btn__icon">
                                <svg class="icon icon--arrow-up-right">
                                    <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                                </svg>
                            </span>
                            </button>
                        </form>
                    </div>

                    <div class="service-form-section__image">
                        <img src="{{ asset('front/img/contact_form_img_servise.png') }}"
                             alt="Работы BPM"
                             class="service-form-section__img">
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
