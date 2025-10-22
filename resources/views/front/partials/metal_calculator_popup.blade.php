<!-- Reusable Popup: metal calculator -->
<div class="popup" id="metalCalculatorPopup" aria-hidden="true">
    <div class="popup__overlay" data-close="true"></div>
    <div class="popup__modal popup__modal--large" role="dialog" aria-modal="true">
        <button class="popup__close" type="button" aria-label="Закрыть" data-close="true">
            <svg class="icon icon--close">
                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#X') }}"></use>
            </svg>
        </button>

        <h3 class="popup__title">Калькулятор метала</h3>

        <div class="popup__body">
            <div class="metal-calculator">
                <div class="metal-calculator__left">
                    <div class="metal-calculator__section">
                        <h4 class="metal-calculator__section-title">Категориии</h4>
                        <div class="custom-select custom-select--white">
                            <div class="custom-select__trigger">
                                <span class="custom-select__text">Поиск по&#160;каталогу</span>
                                <svg class="icon icon--arrow-down custom-select__arrow">
                                    <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#arrowdown') }}"></use>
                                </svg>
                            </div>
                            <div class="custom-select__dropdown">
                                <div class="custom-select__option" data-value="metal">Металлопрокат</div>
                                <div class="custom-select__option" data-value="cement">Цемент</div>
                                <div class="custom-select__option" data-value="concrete">Бетон</div>
                            </div>
                        </div>
                    </div>

                    <div class="metal-calculator__section">
                        <h4 class="metal-calculator__section-title">Номенклатура</h4>
                        <div class="custom-select custom-select--white">
                            <div class="custom-select__trigger">
                                <span class="custom-select__text">Виберите номенклатуру</span>
                                <svg class="icon icon--arrow-down custom-select__arrow">
                                    <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#arrowdown') }}"></use>
                                </svg>
                            </div>
                            <div class="custom-select__dropdown">
                                <div class="custom-select__option" data-value="armatura">Арматура</div>
                                <div class="custom-select__option" data-value="truba-profilnaya">Труба профильная</div>
                                <div class="custom-select__option" data-value="truba-kruglaya">Труба круглая</div>
                                <div class="custom-select__option" data-value="shveller">Швелер</div>
                                <div class="custom-select__option" data-value="dvutavr">Двутавр</div>
                            </div>
                        </div>
                    </div>

                    <div class="metal-calculator__inputs">
                        <div class="metal-calculator__input-group">
                            <label class="metal-calculator__label">Масса (кг)</label>
                            <div class="quantity-control quantity-control--white">
                                <input type="number" value="1" min="0" step="0.1" class="quantity-control__input">
                                <div class="quantity-control__arrows">
                                    <button type="button" class="quantity-control__arrow quantity-control__arrow--up">
                                        <svg class="icon icon--arrow-up">
                                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#arrowup') }}"></use>
                                        </svg>
                                    </button>
                                    <button type="button" class="quantity-control__arrow quantity-control__arrow--down">
                                        <svg class="icon icon--arrow-down">
                                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#arrowdown') }}"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="metal-calculator__input-group">
                            <label class="metal-calculator__label">Длина/Площадь (п.м/кв.м)</label>
                            <div class="quantity-control quantity-control--white">
                                <input type="number" value="1" min="0" step="0.1" class="quantity-control__input">
                                <div class="quantity-control__arrows">
                                    <button type="button" class="quantity-control__arrow quantity-control__arrow--up">
                                        <svg class="icon icon--arrow-up">
                                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#arrowup') }}"></use>
                                        </svg>
                                    </button>
                                    <button type="button" class="quantity-control__arrow quantity-control__arrow--down">
                                        <svg class="icon icon--arrow-down">
                                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#arrowdown') }}"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="metal-calculator__input-group">
                            <label class="metal-calculator__label">Количество (кг)</label>
                            <div class="quantity-control quantity-control--white">
                                <input type="number" value="1" min="0" step="0.1" class="quantity-control__input">
                                <div class="quantity-control__arrows">
                                    <button type="button" class="quantity-control__arrow quantity-control__arrow--up">
                                        <svg class="icon icon--arrow-up">
                                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#arrowup') }}"></use>
                                        </svg>
                                    </button>
                                    <button type="button" class="quantity-control__arrow quantity-control__arrow--down">
                                        <svg class="icon icon--arrow-down">
                                            <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#arrowdown') }}"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="metal-calculator__right">
                    <div class="metal-calculator__result">
                        <h4 class="metal-calculator__product-title">Труба профильная 100*100*3*12м</h4>

                        <div class="metal-calculator__calculations">
                            <div class="metal-calculator__calculation-item">
                                <span class="metal-calculator__calculation-label">Маса</span>
                                <span class="metal-calculator__calculation-value">3.7 кг</span>
                            </div>
                            <div class="metal-calculator__calculation-item">
                                <span class="metal-calculator__calculation-label">Длина</span>
                                <span class="metal-calculator__calculation-value">0.7236 кг</span>
                            </div>
                            <div class="metal-calculator__calculation-item">
                                <span class="metal-calculator__calculation-label">Количество</span>
                                <span class="metal-calculator__calculation-value">0.0343 шт</span>
                            </div>
                            <div class="metal-calculator__calculation-item">
                                <span class="metal-calculator__calculation-label">Стоимость</span>
                                <span class="metal-calculator__calculation-value">78.3 MDL</span>
                            </div>
                        </div>

                        <div class="metal-calculator__actions">
                            <button class="btn btn--primary btn--w100">
                                <span>Оформить заказ</span>
                                <span class="btn__icon">
                                    <svg class="icon icon--arrow-up-right">
                                        <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                                    </svg>
                                </span>
                            </button>
                            <button class="btn btn--outline btn--w100">Добавить в&#160;корзину</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
