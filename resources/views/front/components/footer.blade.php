{{--

<footer class='main-footer'>
    <div class="container">

        <div class="contacts__social">
            <span class="d-md-block d-none">{{ __('main.follow_us') }}:</span>
            @foreach ($socials as $social)
                <a class="contacts__social--link" href="{{ $social->link }}" target="_blank"><i
                        class="{{ $social->icon }}"></i></a>
            @endforeach
        </div>
    </div>

    <hr>

    <div class="container">

        <div class="accordion">
            <div class="row my-md-5 py-md-3">

                <div class="col-lg-3 col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#footer-acc-1" aria-expanded="false">
                                {{ __('main.contact_us') }}
                            </button>
                        </h2>
                        <div id="footer-acc-1" class="accordion-collapse collapse dont-collapse-sm">
                            <div class="accordion-body">
                                <ul>
                                    @foreach ($contacts as $key => $contact)
                                        @if ($key == 'address')
                                            @foreach ($contact as $address)
                                                <li>
                                                    <address>
                                                        <i class="ri-map-pin-line"></i>
                                                        @if (App::getLocale() == 'ar')
                                                            {{ $address->contact_ar }}
                                                        @else
                                                            {{ $address->contact }}
                                                        @endif
                                                    </address>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                    @foreach ($contacts as $key => $contact)
                                        @if ($key == 'phone')
                                            @foreach ($contact as $phone)
                                                <li>
                                                    <a href='tel:+{{ $phone->contact }}'>
                                                        <i class="ri-phone-line"></i>
                                                        <bdi>+{{ $phone->contact }}</bdi>
                                                    </a>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                    @foreach ($contacts as $key => $contact)
                                        @if ($key == 'email')
                                            @foreach ($contact as $email)
                                                <li>
                                                    <a href='mailto:{{ $email->contact }}'>
                                                        <i class="ri-mail-line"></i>
                                                        {{ $email->contact }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#footer-acc-2" aria-expanded="false">
                                {{__('main.fast_links')}}
                            </button>
                        </h2>
                        <div id="footer-acc-2" class="accordion-collapse collapse dont-collapse-sm">
                            <div class="accordion-body">
                                <ul class='text-capitalize'>
                                    <li><a href="{{route('front.about')}}">{{__('main.about_us')}}</a></li>
                                    <li><a href="{{route('front.home')}}">{{__('main.home_title')}}</a></li>
                                    <li><a href="{{route('front.properties')}}">{{__('main.all_properties')}}</a></li>
                                    <li><a href="{{route('front.blogs')}}">{{__('main.news')}}</a></li>
                                    <li><a href="{{route('front.projects')}}">{{__('main.projects')}}</a></li>
                                    <li><a href="{{route('front.privacies')}}">{{__('main.privcy_policy')}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#footer-acc-3" aria-expanded="false">
                                {{__('main.properties')}}
                            </button>
                        </h2>
                        <div id="footer-acc-3" class="accordion-collapse collapse dont-collapse-sm">
                            <div class="accordion-body">
                                <ul class='text-capitalize'>
                                    @foreach ($footer_units as $footer_unit)
                                        <li><a href="{{route('front.singleUnit', ['id' => $footer_unit->id,'title' => str_slug($footer_unit->default_title)])}}">{{$footer_unit->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#footer-acc-4" aria-expanded="false">
                                {{__('main.projects')}}
                            </button>
                        </h2>
                        <div id="footer-acc-4" class="accordion-collapse collapse dont-collapse-sm">
                            <div class="accordion-body">
                                <ul class='text-capitalize'>
                                    @foreach ($footer_projects as $footer_project)
                                    <li><a href="{{ route('front.singleProject', ['id' => $footer_project->id, 'slug' => $footer_project->slug]) }}">{{$footer_project->project}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="copyrights text-center">
        <div class="container">

            <p> {{__('main.all_rights_reserved')}}
                <i class="ri-heart-fill ri-lg"></i> By
                <a href='https://www.8worx.com/' target='_blank' class='eight-worx-webpage'>
                    8WORX
                </a>
                &trade;
            </p>
        </div>
    </div>
</footer> --}}
<!-- ========================
    footer
 ======================== -->

<div class="footer">
    <div class="container">
        <div class="flex-box">
            <div class="col">
                <div class="logo-footer">
                    <a href="{{ route('front.home') }}">
                        <img src="{{ asset('front/img/footer.png') }}" alt="" />
                    </a>
                </div>
                <ul class="social-icons">
                    @foreach ($socials as $social)
                        <li>
                            <a class="contacts__social--link" href="{{ $social->link }}" target="_blank"><i
                                    class="{{ $social->icon }}"></i></a>
                        </li>
                    @endforeach

                </ul>
            </div>
            <!-- close col -->
            <div class="col">
                <h4>{{ __('main.contact_us') }} </h4>
                <ul class="touch">
                    @foreach ($contacts as $key => $contact)
                        @if ($key == 'address')
                            @foreach ($contact as $address)
                                <li>
                                    <address>
                                        @if (App::getLocale() == 'ar')
                                            <p> <i class="fas fa-map-marker-alt"></i>{{ $address->contact_ar }}</p>
                                        @else
                                            <p><i class="fas fa-map-marker-alt"></i> {{ $address->contact }}</p>
                                        @endif
                                    </address>
                                </li>
                            @endforeach
                        @endif
                    @endforeach
                    @foreach ($contacts as $key => $contact)
                        @if ($key == 'phone')
                            @foreach ($contact as $phone)
                                <li>
                                    <a href='tel:+{{ $phone->contact }}'>
                                        <p>
                                            <i class="fas fa-phone-volume fa-lg"></i>
                                            <bdi>+{{ $phone->contact }}</bdi>
                                        </p>
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    @endforeach
                    @foreach ($contacts as $key => $contact)
                        @if ($key == 'email')
                            @foreach ($contact as $email)
                                <li>
                                    <a href='mailto:{{ $email->contact }}'>
                                        <p class="mail">
                                            <i class="far fa-envelope"></i>
                                            {{ $email->contact }}
                                        </p>
                                    </a>

                                </li>
                            @endforeach
                        @endif
                    @endforeach

                </ul>
            </div>
            <!-- close col -->
            {{-- <div class="col">
                <h4>{{ __('main.newsletter') }}</h4>
                <p>
                    {{ __('main.subscribe_your_email_to_get_the_latest_news_and_new_offer_also_discount') }}</p>
                </p>
                <div class="news_letter">
                    <form action="#" method="get">
                        <input type="email" name="email" class='form-control' inputmode="email" name="email"
                            placeholder="{{ __('users.email') }}" required />
                        <button><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div> --}}
            <!-- close col -->
            <div class="col">
                <h4> {{ __('main.fast_links') }}
                </h4>
                <ul class="footer-news">
                    <li><a href="{{ route('front.about') }}">{{ __('main.about_us') }}</a></li>
                    <li><a href="{{ route('front.home') }}">{{ __('main.home_title') }}</a></li>
                    <li><a href="{{ route('front.properties') }}">{{ __('main.all_properties') }}</a></li>
                    <li><a href="{{ route('front.blogs') }}">{{ __('main.news') }}</a></li>
                    <li><a href="{{ route('front.projects') }}">{{ __('main.projects') }}</a></li>
                    {{-- <li><a href="{{ route('front.privacies') }}">{{ __('main.privcy_policy') }}</a></li> --}}
                </ul>
            </div>
            <!-- close col -->
            {{-- <div class="col">
                <h4> {{ __('main.properties') }}
                </h4>
                <ul class="footer-news">
                    @foreach ($footer_units as $footer_unit)
                        <li>
                            <a
                                href="{{ route('front.singleUnit', ['id' => $footer_unit->id, 'title' => str_slug($footer_unit->default_title)]) }}">{{ $footer_unit->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div> --}}

            <div class="col">
                <h4> {{ __('main.projects') }}
                </h4>
                <ul class="footer-news">
                    @foreach ($footer_projects as $footer_project)
                        <li><a
                                href="{{ route('front.singleProject', ['id' => $footer_project->id, 'slug' => $footer_project->slug]) }}">{{ $footer_project->project }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- close col -->
        </div>
        <!-- close flex-box -->
    </div>
    <!-- close container -->
</div>
<!-- close footer -->

<div class="bottom-fooer" id="footer">
    <div clas="container">
        <div class="flex-box">
            <p>
                Copyright <strong>NBIG</strong> &copy; 2023 All Right Reserved &reg;
            </p>
            <span>Made with love <i class="fa fa-heart pulse2"></i> in
                <a href="https://www.8worx.com/">8WORK</a>
            </span>
        </div>
        <!-- close flex-box -->
    </div>
    <!-- close container -->
</div>
<!-- close bottom-footer -->
