
<h2 class="skills__heading dark-mode" id="skills" data-aos="fade-right" >{{ __('portfolio_text.profile' ) }}</h2>

<div class="skills__grid">

    <div class="skills__card" > {{-- cada card --}}
        <div class="skills__contenedor-vector" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom" data-aos-delay="0">
            <i class="skills__vector dark-mode fa-solid fa-bolt"></i>
        </div>

        <div class="skills__text dark-mode">
            <h3>{{ __('portfolio_text.fast' ) }}</h3>
            <p>{{ __('portfolio_text.fast_desc' ) }}</p>
        </div>
    </div>

    <div class="skills__card" > {{-- cada card --}}
        <div class="skills__contenedor-vector" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom" data-aos-delay="500">
            <i class="skills__vector dark-mode fa-solid fa-mobile-screen"></i>
        </div>
        <div class="skills__text dark-mode" >
            <h3>{{ __('portfolio_text.resp' ) }}</h3>
            <p>{{ __('portfolio_text.resp_desc' ) }}</p>
        </div>
    </div>

    <div class="skills__card" > {{-- cada card --}}
        <div class="skills__contenedor-vector" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom" data-aos-delay="1000">
            <i class="skills__vector dark-mode fa-solid fa-shield-halved"></i>
        </div>
        <div class="skills__text dark-mode">
            <h3>{{ __('portfolio_text.secure' ) }}</h3>
            <p>{{ __('portfolio_text.secure_desc' ) }}</p>
        </div>
    </div>

    <div class="skills__card" > {{-- cada card --}}
        <div class="skills__contenedor-vector" data-aos="fade-up"
        data-aos-anchor-placement="top-bottom" data-aos-delay="1500">
            <i class="skills__vector dark-mode fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="skills__text dark-mode">
            <h3 id="skill-dinamico">{{ __('portfolio_text.detail' ) }}</h3>
            <p>{{ __('portfolio_text.detail_desc' ) }}</p>
        </div>
    </div>
</div>