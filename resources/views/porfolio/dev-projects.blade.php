<div class="dev-projects__contenedor-xl" id="proyectos-personales-contenedor">

    <h2 id="proyectos-personales" data-aos="fade-right" class="dark-mode">{{ __('portfolio_text.main') }}</h2>

    <div class="swiperProjects mySwiper">
        <div class="swiper-wrapper">

            {{-- Ticket Admin --}}
            <div class="dev-projects__contenedor-ticket swiper-slide">

                <div class="dev-projects__fix-tag-l"></div>
                <div class="dev-projects__grid">

                    <div class="dev-projects__card dev-projects__ticket">
                        <div class="dev-projects__contenedor-heading">
                            <h3 class="dev-projects__heading-ta">TicketAdmin</h3>

                            <div class="dev-projects__iconos">
                                <svg class="dev-projects__icono--oculto" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-brand-mysql" width="40" height="40"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="#0284C7" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M13 21c-1.427 -1.026 -3.59 -3.854 -4 -6c-.486 .77 -1.501 2 -2 2c-1.499 -.888 -.574 -3.973 0 -6c-1.596 -1.433 -2.468 -2.458 -2.5 -4c-3.35 -3.44 -.444 -5.27 2.5 -3h1c8.482 .5 6.421 8.07 9 11.5c2.295 .522 3.665 2.254 5 3.5c-2.086 -.2 -2.784 -.344 -3.5 0c.478 1.64 2.123 2.2 3.5 3" />
                                    <path d="M9 7h.01" />
                                </svg>
                                <i class="dev-projects__icono--oculto c-rojo fa-brands fa-laravel"></i>
                                <i class="dev-projects__icono--oculto c-ama fa-brands fa-square-js"></i>
                                <i class="dev-projects__icono--oculto c-rosa fa-brands fa-sass"></i>
                                <a href="https://github.com/dellpinos" target="_blank">
                                    <i class="dev-projects__icono fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>

                        <div class="dev-projects__text">
                            <p>{{ __('portfolio_text.ta_desc') }}</p>

                            <div class="tour__contenedor-card">
                                <div class="tour__card-ticket" id="tour-card-ticket">
                                    <i id="tour-play-icon-ticket" class="tour__play fa-solid fa-circle-play"></i>

                                    <img src="{{ asset('img/porfolio/page.svg') }}" class="tour__card-logo-ta"
                                        alt="Logo Ticket Admin" loading="lazy">
                                    <div class="tour__card-contenedor-text">

                                        <h4 class="tour__card-heading">TicketAdmin<br> {{ __('portfolio_text.view') }}</h4>
                                        <p class="tour__card-text">{{ __('portfolio_text.main_caract') }}</p>
                                    </div>

                                </div>
                            </div>
                            <a href="https://ticketadmin.dellpinos.com/" target="_blank">{{ __('portfolio_text.goto') }} TicketAdmin</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fin Ticket Admin --}}


            {{-- TusListas --}}
            <div class="dev-projects__contenedor swiper-slide" id="dev-projects-slide-tl">

                <div class="dev-projects__fix-tag-l"></div>
                <div class="dev-projects__fix-tag-r"></div>
                <div class="dev-projects__grid">
                    <div class="dev-projects__card dev-projects__tl">
                        <div class="dev-projects__contenedor-heading">

                            <div class="dev-projects__contenedor-img">
                                <img loading="lazy" src="img/porfolio/logoTL_2.png" alt="Logo Tus Listas" width="200"
                                    height="70">
                            </div>

                            <div class="dev-projects__iconos">
                                <svg class="dev-projects__icono--oculto" xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-brand-mysql" width="40" height="40"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="#0284C7" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M13 21c-1.427 -1.026 -3.59 -3.854 -4 -6c-.486 .77 -1.501 2 -2 2c-1.499 -.888 -.574 -3.973 0 -6c-1.596 -1.433 -2.468 -2.458 -2.5 -4c-3.35 -3.44 -.444 -5.27 2.5 -3h1c8.482 .5 6.421 8.07 9 11.5c2.295 .522 3.665 2.254 5 3.5c-2.086 -.2 -2.784 -.344 -3.5 0c.478 1.64 2.123 2.2 3.5 3" />
                                    <path d="M9 7h.01" />
                                </svg>
                                <i class="dev-projects__icono--oculto c-rojo fa-brands fa-laravel"></i>
                                <i class="dev-projects__icono--oculto c-ama fa-brands fa-square-js"></i>
                                <i class="dev-projects__icono--oculto c-rosa fa-brands fa-sass"></i>
                                <a href="https://github.com/dellpinos/tusListas" target="_blank">
                                    <i class="dev-projects__icono fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>

                        <div class="dev-projects__text">
                            <p>{{ __('portfolio_text.tl_desc') }}</p>

                            <div class="tour__contenedor-card">
                                <div class="tour__card" id="tour-card-tuslistas">
                                    <i id="tour-play-icon-tuslistas" class="tour__play fa-solid fa-circle-play"></i>

                                    <img src="{{ asset('img/porfolio/LogoSinFondo.png') }}" class="tour__card-logo"
                                        alt="Logo Tus Listas" loading="lazy">
                                    <div class="tour__card-contenedor-text">

                                        <h4 class="tour__card-heading">TusListas<br> {{ __('portfolio_text.view') }}</h4>
                                        <p class="tour__card-text">{{ __('portfolio_text.main_caract') }}</p>
                                    </div>

                                </div>
                            </div>
                            <a href="https://tuslistas.dellpinos.com/" target="_blank">{{ __('portfolio_text.goto') }} TusListas</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fin TusListas --}}


            {{-- Stuff --}}
            <div class="dev-projects__contenedor-stuff swiper-slide">
                <div class="dev-projects__fix-tag-r"></div>

                <div class="dev-projects__grid">
                    <div class="dev-projects__card dev-projects__stuff">
                        <div class="dev-projects__contenedor-heading">
                            <h3 class="dev-projects__heading-st">Stuff</h3>

                            <div class="dev-projects__iconos">
                                <i class="dev-projects__icono--oculto c-rojo fa-brands fa-laravel"></i>
                                <i class="dev-projects__icono--oculto c-ama fa-brands fa-square-js"></i>
                                <i class="dev-projects__icono--oculto c-ama fa-brands fa-square-js"></i>
                                <i class="dev-projects__icono--oculto c-ama fa-brands fa-square-js"></i>
                                <a href="https://github.com/dellpinos/stuffworks" target="_blank">
                                    <i class="dev-projects__icono fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>

                        <div class="dev-projects__text">
                            <p>{{ __('portfolio_text.ss_desc') }}</p>

                            <div class="tour__contenedor-card">
                                <div class="tour__card-stuff" id="tour-card-stuff">
                                    <i id="tour-play-icon-stuff" class="tour__play fa-solid fa-circle-play"></i>
                                    <i class="fa-solid fa-gears tour__card-logo-st"></i>
                                    <div class="tour__card-contenedor-text">

                                        <h4 class="tour__card-heading">Stuff<br> {{ __('portfolio_text.view') }}</h4>
                                        <p class="tour__card-text">{{ __('portfolio_text.main_caract') }}</p>
                                    </div>

                                </div>
                            </div>
                            <a href="https://stuffscripts.dellpinos.com/" target="_blank">{{ __('portfolio_text.goto') }} Stuff & Scripts</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fin Stuff --}}
        </div>
    </div>
</div>
