

  {{-- <script src="{{ URL::asset('front/js/jquery-3.6.0.min.js')}}?ver={{ env('FILES_VER')}}"></script> --}}
  <script src="{{ URL::asset('front/js/bootstrap.bundle.min.js')}}?ver={{env('FILES_VER')}}"></script>
  <script src="{{ URL::asset('front/js/multiple-select.min.js')}}?ver={{env('FILES_VER')}}"></script>
  <script src="{{ URL::asset('front/js/swiper-bundle.min.js')}}?ver={{ env('FILES_VER')}}"></script>
  <script src="{{ URL::asset('front/js/intlTelInput.min.js')}}?ver={{ env('FILES_VER')}}"></script>
  <script src="{{ URL::asset('front/js/bootstrap-datetimepicker.min.js')}}?ver={{ env('FILES_VER')}}"></script>
  <script src="{{ URL::asset('front/js/bootstrap-datetimepicker.ar.js')}}?ver={{ env('FILES_VER')}}"></script>
  <script src="{{ URL::asset('front/js/magnific-popup.js')}}?ver={{ env('FILES_VER')}}"></script>
  <script src="{{ URL::asset('front/js/bootstrap-tokenfield.min.js')}}?ver={{env('FILES_VER')}}"></script>
  <script src="{{ URL::asset('front/js/typeahead.bundle.min.js')}}?ver={{env('FILES_VER')}}"></script>
  <script src="{{ URL::asset('front/js/aos.js')}}?ver={{env('FILES_VER')}}"></script>
  <script src="{{ URL::asset('front/js/numscroller.js')}}?ver={{env('FILES_VER')}}"></script>
  <script src="{{ URL::asset('front/js/jquery.nicescroll.min.js')}}?ver={{env('FILES_VER')}}"></script>
  <script src="{{ URL::asset('front/js/intlTelInput-jquery.min.js') }}?ver={{ env('FILES_VER') }}"></script>
  <script src="{{ URL::asset('front/js/app.js')}}?ver={{ env('FILES_VER')}}"></script>
  <script src="{{ URL::asset('front/js/init-plugin.js')}}?ver={{ env('FILES_VER')}}"></script>

  <!-- Aos Init -->
  <script>
    AOS.init({
      disable: "mobile",
      duration: 800,
      once: true
    });
  </script>

@if (Route::currentRouteName() == 'front.home')
<script>
    const splashScreen = document.querySelector(".splash-screen");
    const splashLogo = document.querySelector(".splash-screen img");

    setTimeout(() => {
      splashLogo.classList.add("show");
      splashScreen.classList.add("hide");
    }, 1000);
  </script>
@endif
<script src="{{ URL::asset('8x/assets/js/parsley.min.js') }}?ver={{ env('FILES_VER') }}" type="text/javascript">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js" type="text/javascript">
</script>
<script src="{{ URL::asset('front/js/bootstrap-flash-alert.min.js') }}?ver={{ env('FILES_VER') }}"
type="text/javascript"></script>
<script>
    $('.subscribe-from').on('click', function(e) {
        e.preventDefault()
        var form = $(this).closest('form');

        /* Parsley validate front-end */
        if (!form.parsley().isValid()) {
            // Display notification

            $.unblockUI();

            $.alert("{{ __('main.oh_snap_change_a_few_thing_up_and_try_submitting_again') }}", {
                title: '',
                type: 'warning',
                position: ['top-right', [0, 20]],
            });
            form.find('[data-parsley-type]').each(function(i, v) {
                $(this).parsley().validate({
                    focusInvalid: false,
                    invalidHandler: function() {
                        $(this).find(":input.error:first").focus();
                    }
                });

                return;
            });
            form.find('[data-parsley-pattern]').each(function(i, v) {
                $(this).parsley().validate({
                    focusInvalid: false,
                    invalidHandler: function() {
                        $(this).find(":input.error:first").focus();
                    }
                });

                return;
            });
            form.parsley().validate({
                focusInvalid: false,
                invalidHandler: function() {
                    $(this).find(":input.error:first").focus();
                }
            });

            return;
        }

        var url = "{{ route('front.subscribe') }}";
        var headers = {
            'content-type': 'appliction/json'
        };
        var data = $('.form-subscribe').serialize()

        // Send  subscribe request
        $.post(url, data, headers).done(function(response) {
            // Un Block UI
            $.unblockUI();

            if (response.status) {
                $.alert(response.message, {
                    title: '',
                    type: 'info',
                    position: ['top-right', [0, 20]],
                });

            } else {
                $.alert(response.message, {
                    title: '',
                    type: 'warning',
                    position: ['top-right', [0, 20]],
                });
            }
        }).fail(function(xhr, error_text, statusText) {
            // Un Block UI
            $.unblockUI();

            // Display notificaion
            if (xhr.responseJSON && xhr.responseJSON.errors) {
                $.each(xhr.responseJSON.errors, function(index, error) {
                    $.alert(error.message, {
                        title: '',
                        type: 'warning',
                        position: ['top-right', [0, 20]],
                    });
                });
            } else {
                $.alert(statusText, {
                    title: '',
                    type: 'warning',
                    position: ['top-right', [0, 20]],
                });
            }
        });
    });
</script>
<script>
    // var ddSelect2;
    var rtl = false;
    @if (LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
        rtl =true;
    @endif

    var darkMood = "{{ __('main.dark_mode') }}";
    var lightMood = "{{ __('main.light_mode') }}";
</script>


@include('front.components.custom-scripts')

@if (App::environment('local'))
@else
    @include('front.components.custom-scripts-min')
@endif

@php
$contact_phones = [];
foreach ($contacts as $key => $contact) {
    if ($key == 'phone') {
        foreach ($contact as $phone) {
            array_push($contact_phones, $phone->contact);
        }
    }
}
$contact_phones = implode(', ', $contact_phones);

$contact_emails = [];
foreach ($contacts as $key => $contact) {
    if ($key == 'email') {
        foreach ($contact as $email) {
            array_push($contact_emails, $email->contact);
        }
    }
}
$contact_emails = implode(', ', $contact_emails);

$contact_address = [];
foreach ($contacts as $key => $contact) {
    if ($key == 'address') {
        foreach ($contact as $address) {
            array_push($contact_address, $address->contact);
        }
    }
}
$contact_address = implode(', ', $contact_address);

$social_urls = [];
foreach ($socials as $social) {
    array_push($social_urls, $social->link);
}
@endphp
<!-- SCHEMA JSON-LD -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "ngip Properties",
            "image":"{{ URL::asset('/front/img/logo_1.png') }}",
            "url": "{{ env('APP_URL_FULL') }}",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "{{ $contact_address }}",
                "postalCode": "",
                "streetAddress": ""
            },
            "telephone": "{{ $contact_phones }}",
            "faxNumber": "",
            "email": "{{ $contact_emails }}",
            "sameAs": @json($social_urls),
            "member": [{
                    "@type": "Organization"
                },
                {
                    "@type": "Organization"
                }
            ]
        }
    </script>


    <script src="{{ asset('front/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/swiper.min.js') }}"></script>
    <script src="{{ asset('front/js/pace.min.js') }}"></script>
    <script src="{{ asset('front/js/wow.min.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>
    <script id="loading" src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="{{ asset('front/js/removeloading.js') }}"></script>
    <script src="{{ asset('front/js/ToggleDark.js') }}"></script>
    <script src="{{ asset('front/js/scroll.js') }}"></script>
    <script src="{{ asset('front/js/ToggleLang.js') }}"></script>
    <script src="{{ asset('front/js/home-page-slider-projects.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

    <script src="{{ asset('front/js/slick.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $(".slider-for").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: false,
                speed: 1000,
                autoplaySpeed: 4000,
                asNavFor: ".slider-nav"
            });
            $(".slider-nav").slick({
                autoplay: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: ".slider-for",
                dots: false,
                arrows: false,
                centerMode: true,
                focusOnSelect: true
            });

            $('#focus-ask').focus();
        });

        $("#accordion").accordion({
            heightStyle: "content",
            collapsible: true,
            header: "div.accordianheader"
        });
    </script>

    <script src="{{ asset('front/js/slider-single-page.js')}}"></script>

@stack('scripts')
