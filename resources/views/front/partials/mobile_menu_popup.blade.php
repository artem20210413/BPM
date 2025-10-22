<div class="popup" id="mobileMenuPopup" aria-hidden="true">
    <div class="popup__overlay" data-close="true"></div>
    <div class="popup__modal popup__modal--mobile-menu" role="dialog" aria-modal="true">
        <button class="popup__close" type="button" aria-label="Закрыть" data-close="true">
            <svg class="icon icon--close">
                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#X') }}"></use>
            </svg>
        </button>

        <h3 class="popup__title">Меню</h3>

        <nav class="mobile-menu">
            <button class="mobile-menu__catalog btn btn--category" data-popup="mobileCatalogPopup">
                <svg class="icon icon--menu">
                    <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#burger') }}"></use>
                </svg>
                <span>Металлопрокат</span>
            </button>

            <ul class="mobile-menu__list">
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
                <li><a href="service.html" class="nav__link">Услуги</a></li>
                <li><a href="partner.html" class="nav__link">Партнеры</a></li>
                <li><a href="about.html" class="nav__link">О&#160;нас</a></li>

            </ul>

            <div class="mobile-menu__footer">
                <a href="tel:+37322480480" class="mobile-menu__phone">+373 22 480 480</a>

                <div class="mobile-menu__langs">
                    <a href="#" class="mobile-menu__lang mobile-menu__lang--active" lang="ro" hreflang="ro">RO</a>
                    <a href="#" class="mobile-menu__lang" lang="ru" hreflang="ru">RU</a>
                </div>

                <button class="btn btn--secondary" data-popup="metalCalculatorPopup">
                    <span>Калькулятор металла</span>
                    <span class="btn__icon">
                        <svg class="icon icon--arrow-up-right">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                        </svg>
                    </span>
                </button>
            </div>
        </nav>
    </div>
</div>
