<div class="home-info">

    <div class=" home-info__card">
        <div class="home-info__card-img">
            <img src="{{ asset('img/home/bg_responsive.svg') }}" alt="Ideas imagen" width="200">
        </div>
        <div class="home-info__text">
            <h3 class="home-heading__m">{{ __('home_text.info_responsive_heading') }}</h3>
            <p>{{ __('home_text.info_responsive_desc') }}</p>
            <div class="home-info__card-enlace">
                <a href="{{ route('responsive') }}">Ver más...</a>
            </div>
        </div>
    </div>

    <div class=" home-info__card">
        <div class="home-info__card-img">
            <img src="{{ asset('img/home/bg_hosting.svg') }}" alt="Ideas imagen" width="200">
        </div>
        <div class="home-info__text">
            <h3 class="home-heading__m">{{ __('home_text.info_host_heading') }}</h3>
            <p>{{ __('home_text.info_host_desc') }}</p>
            <div class="home-info__card-enlace">
                <a href="{{ route('hosting') }}">Ver más...</a>
            </div>
        </div>
    </div>

    <div class=" home-info__card">
        <div class="home-info__card-img">
            <img src="{{ asset('img/home/team.png') }}" alt="Ideas imagen" width="200">
        </div>
        <div class="home-info__text">
            <h3 class="home-heading__m">{{ __('home_text.info_advice_heading') }}</h3>
            <p>{{ __('home_text.info_advice_desc') }}</p>
            <div class="home-info__card-enlace">
                <a href="{{ route('tec_info') }}">Ver más...</a>
            </div>
        </div>
    </div>

</div>
