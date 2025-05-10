<div class="works" id="home-works-container">

    <div class="works__slider-container">
        <div class="works__text">
            <p>{{ __('home_text.works_heading') }}</p>
        </div>

        <div class="home-swiper swiper works__slider">
            <div class="home-swiper-wrapper swiper-wrapper">
                <div class="home-swiper-slide swiper-slide">
                    <a href="{{ route('apps.ecommerce') }}" class="works__card">
                        <img src="{{ asset('img/home/commerce.svg') }}" alt="Ecommerce imagen" width="200">
                        <h4>{{ __('home_text.works_card_commerce') }}</h4>
                    </a>
                </div>
                <div class="home-swiper-slide swiper-slide">
                    <a href="{{ route('apps.corporation') }}" class="works__card">
                        <img src="{{ asset('img/home/company.svg') }}" alt="Institucionales imagen" width="200">
                        <h4>{{ __('home_text.works_card_corp') }}</h4>
                    </a>
                </div>
                <div class="home-swiper-slide swiper-slide">
                    <a href="{{ route('apps.landing') }}" class="works__card">
                        <img src="{{ asset('img/home/landing.svg') }}" alt="Landing Page imagen" width="200">
                        <h4>{{ __('home_text.works_card_landing') }}</h4>
                    </a>
                </div>
                <div class="home-swiper-slide swiper-slide">
                    <a href="{{ route('apps.porfolio') }}" class="works__card">
                        <img src="{{ asset('img/home/porfolio.svg') }}" alt="Porfolio imagen" width="200">
                        <h4>{{ __('home_text.works_card_porfolio') }}</h4>
                    </a>
                </div>

                <div class="home-swiper-slide swiper-slide">
                    <a href="{{ route('apps.management') }}" class="works__card">
                        <img src="{{ asset('img/home/gestion.svg') }}" alt="Gestion imagen" width="200">
                        <h4>{{ __('home_text.works_card_management') }}</h4>
                    </a>
                </div>
                <div class="home-swiper-slide swiper-slide">
                    <a href="{{ route('apps.reservation') }}" class="works__card">
                        <img src="{{ asset('img/home/calendar.svg') }}" alt="Reservas Imagen" width="200">
                        <h4>{{ __('home_text.works_card_platforms') }}</h4>
                    </a>
                </div>
                <div class="home-swiper-slide swiper-slide">
                    <a href="{{ route('apps.blog') }}" class="works__card">
                        <img src="{{ asset('img/home/content.svg') }}" alt="Blog imagen" width="200">
                        <h4>{{ __('home_text.works_card_blogs') }}</h4>
                    </a>
                </div>
                <div class="home-swiper-slide swiper-slide">
                    <a href="{{ route('apps.api') }}" class="works__card">
                        <img src="{{ asset('img/home/api.svg') }}" alt="Api imagen" width="200">
                        <h4>{{ __('home_text.works_card_apis') }}</h4>
                    </a>
                </div>
                <div class="home-swiper-slide swiper-slide">
                    <a href="{{ route('apps.industry') }}" class="works__card">
                        <img src="{{ asset('img/home/delivery.svg') }}" alt="Industria imagen" width="200">
                        <h4>{{ __('home_text.works_card_industry') }}</h4>
                    </a>
                </div>
            </div>

            <!-- Navigation -->
            <div class="home-swiper-button-prev swiper-button-prev"></div>
            <div class="home-swiper-button-next swiper-button-next"></div>

        </div>
        <!-- Pagination -->
        <div class="home-swiper-pagination swiper-pagination"></div>

    </div>
</div>