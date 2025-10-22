<footer class="footer">
    <div class="container">
        <div class="footer__content">
            <!-- Колонка 1: Логотип та інформація -->
            <div class="footer__section footer__section--logo">
                <div class="footer__logo">
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ asset('front/img/logo_white.svg') }}" alt="BPM Logo" class="logo__img">
                    </a>
                </div>
                <p class="footer__copyright">
                    &#169; 2025 &#171;BPM&#187; <br>Все права защищены
                </p>
                <div class="footer__social">
                    <a href="#" class="footer__social-link">
                        <svg class="icon icon--instagram">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#instagram') }}"></use>
                        </svg>
                    </a>
                    <a href="#" class="footer__social-link">
                        <svg class="icon icon--facebook">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#facebook') }}"></use>
                        </svg>
                    </a>
                    <a href="#" class="footer__social-link">
                        <svg class="icon icon--youtube">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#youtube') }}"></use>
                        </svg>
                    </a>
                    <a href="#" class="footer__social-link">
                        <svg class="icon icon--telegram">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#telegram') }}"></use>
                        </svg>
                    </a>
                    <a href="#" class="footer__social-link">
                        <svg class="icon icon--linkedin">
                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#linkedin') }}"></use>
                        </svg>
                    </a>
                </div>
            </div>


            <!-- Колонка 2: Продукти -->
            <div class="footer__section">
                <h3 class="footer-title">Продукты</h3>
                <ul class="footer__nav">
                    <li><a href="catalog.html" class="footer__link">Металлопрокат</a></li>
                    <li><a href="metal.html" class="footer__link">Металлоконструкции</a></li>
                    <li><a href="beton.html" class="footer__link">Бетон</a></li>
                    <li><a href="transport.html" class="footer__link">Транспорт</a></li>
                    <li><a href="catalog.html" class="footer__link">Цемент</a></li>
                </ul>
            </div>

            <!-- Колонка 3: Компанія -->
            <div class="footer__section">
                <h3 class="footer-title">Компания</h3>
                <ul class="footer__nav">
                    <li><a href="about.html" class="footer__link">О&#160;нас</a></li>
                    <li><a href="blog.html" class="footer__link">Блог</a></li>
                    <li><a href="partner.html" class="footer__link">Партнеры</a></li>
                    <li><a href="contacts.html" class="footer__link">Контакты</a></li>
                </ul>
            </div>

            <!-- Колонка 4: Контакти -->
            <div class="footer__section">
                <h3 class="footer-title">Контакты</h3>
                <div class="footer__contacts">
                    <p class="footer__contact">
                        <span class="footer__contact-label">Офис и&#160;склад</span>
                    </p>
                    <p class="footer__contact">
                        <span class="footer__contact-text">
                            str. Uzinelor, 78<br>
                            Chisinau, MD&#160;2023<br>
                            Republica Moldova
                        </span>
                    </p>
                    <p class="footer__contact">
                        <a href="tel:+37322480480" class="footer__contact-phone">+373 (22) 480 480</a>
                    </p>
                    <p class="footer__contact">
                        <a href="tel:+37379480480" class="footer__contact-phone">+373 (79) 480 480</a>
                    </p>
                    <p class="footer__contact">
                        <a href="mailto:info@bpmplus.md" class="footer__contact-email">info@bpmplus.md</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Нижня секція -->
        <div class="footer__bottom">
            <p class="footer__privacy">
                <a href="privacy.html" class="footer__privacy-link">Полтитика конфиденцальности</a>
            </p>
        </div>
    </div>
</footer>
