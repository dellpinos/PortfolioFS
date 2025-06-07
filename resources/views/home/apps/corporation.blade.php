@extends('layout.home')

@section('headers')
    <link rel="preload" href="{{ asset('img/home/company.svg') }}" as="image">
@endsection

@section('contenido')
    <div class="apps">
        <div class="apps__container">

            <div id="tsparticles2" style="position: absolute; top: 0; left: 0; width: 100%; height: 100dvh; z-index: -1;">
            </div>
            <div class="apps__principal">
                <img src="{{ asset('img/home/company.svg') }}" alt="Institucionales imagen" width="200" height="300">
                <div class="apps__text">
                    <h3>{{ __('home_text.apps_corp_heading') }}</h3>

                    <div class="apps__grid">

                        <p class="apps__legend">{{ __('home_text.apps_corp_sub') }}</p>
                        <ul class="apps__list">
                            <li>{{ __('home_text.apps_corp_list0') }} <i class="c-green fa-solid fa-check"></i></li>
                            <li>{{ __('home_text.apps_corp_list1') }} <i class="c-green fa-solid fa-check"></i></li>
                            <li>{{ __('home_text.apps_corp_list2') }} <i class="c-green fa-solid fa-check"></i></li>
                            <li>{{ __('home_text.apps_corp_list3') }} <i class="c-green fa-solid fa-check"></i></li>
                        </ul>
                        <div class="apps__btn-cont">
                            <a href="{{ route('contact') }}" class="btn-grad w-full">{{ __('home_text.btn_to_contact') }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="apps__description">
                <p>{{ __('home_text.apps_corp_desc0') }}</p>
                <p>{{ __('home_text.apps_corp_desc1') }}</p>
                <p>{{ __('home_text.apps_corp_desc2') }}</p>
            </div>
        </div>

        @include('home.includes.choose')
    </div>
@endsection
