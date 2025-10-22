<!-- Reusable Popup: cart -->
<div class="popup" id="cartPopup" aria-hidden="true">
    <div class="popup__overlay" data-close="true"></div>
    <div class="popup__modal" role="dialog" aria-modal="true">
        <button class="popup__close" type="button" aria-label="Закрыть" data-close="true">
            <svg class="icon icon--close">
                <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#X') }}"></use>
            </svg>
        </button>
        <h3 class="popup__title">Товары в&#160;корзине (2)</h3>

        <div class="popup__body">
            <div class="popup__products">
                <div class="popup__product-item">
                    <div class="popup__product-details">
                        <div class="popup__name">Арматура</div>
                        <div class="popup__spec">A400C</div>
                        <div class="popup__specs">
                            <span>&#216; 5.5&#160;мм</span>
                        </div>
                    </div>
                    <div class="popup__product-controls">
                        <div class="quantity-control">
                            <input type="number" value="1" min="1" class="quantity-control__input">
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
                        <div class="custom-select">
                            <div class="custom-select__trigger">
                                <span class="custom-select__text">п.м</span>
                                <svg class="custom-select__arrow">
                                    <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#arrowdown') }}"></use>
                                </svg>
                            </div>
                            <div class="custom-select__dropdown">
                                <div class="custom-select__option selected" data-value="linear-meter">п.м</div>
                                <div class="custom-select__option" data-value="pieces">шт.</div>
                                <div class="custom-select__option" data-value="kg">кг</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="popup__product-item">
                    <div class="popup__product-details">
                        <div class="popup__name">Труба профильная</div>
                        <div class="popup__spec">Ст3</div>
                        <div class="popup__specs">
                            <span>40&#215;40&#215;2 мм</span>
                        </div>
                    </div>
                    <div class="popup__product-controls">
                        <div class="quantity-control">
                            <input type="number" value="2" min="1" class="quantity-control__input">
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
                        <div class="custom-select">
                            <div class="custom-select__trigger">
                                <span class="custom-select__text">шт.</span>
                                <svg class="custom-select__arrow">
                                    <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#arrowdown') }}"></use>
                                </svg>
                            </div>
                            <div class="custom-select__dropdown">
                                <div class="custom-select__option" data-value="linear-meter">п.м</div>
                                <div class="custom-select__option selected" data-value="pieces">шт.</div>
                                <div class="custom-select__option" data-value="kg">кг</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="popup__actions">
            <button class="btn btn--primary btn--w100">
                <span>Перейти в&#160;корзину</span>
                <span class="btn__icon">
                    <svg class="icon icon--arrow-up-right">
                        <use href="{{ asset('front/img/svgsprite/sprite.symbol.svg#ArrowUpRight') }}"></use>
                    </svg>
                </span>
            </button>
        </div>
    </div>
</div>
