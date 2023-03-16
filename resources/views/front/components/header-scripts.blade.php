<!-- scripts -->

<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="ngip">
<meta name="publisher" content="ngip">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta name="yandex-verification" content="" />
<meta name="google-site-verification" content="" />
<link rel="canonical" href="{{ Request::fullUrl() }}">
@stack('meta')

<title>@yield('page_name')</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" />
{{--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"> --}}

<link rel="shortcut icon" href="{{asset('front/img/logo_2.png')}}" />
{{-- <link rel="stylesheet" href="{{ URL::asset('front/css/bootstrap.min.css') }}?ver={{ env('FILES_VER') }}"> --}}
{{-- <link rel="stylesheet" href="{{ URL::asset('front/css/index.css') }}?ver={{ env('FILES_VER') }}"> --}}
{{-- <link rel="stylesheet" href="{{ URL::asset('front/css/addition.css') }}?ver={{ env('FILES_VER') }}"> --}}
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<!--  create shorcut icon logo -->
<!--  reset css default values  -->
<link rel="stylesheet" href="{{asset('front/vendors/normalize.css')}}" />
<!-- external style file -->
<link rel="stylesheet" href="{{asset('front/css/style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('front/vendors/slick.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('front/vendors/slick-theme.css')}}" />
<!--  font awesome icons library  -->
<link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
  integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
  crossorigin="anonymous"
/>
<!--  animation library for some animations  -->
<link rel="stylesheet" href="{{asset('front/vendors/animate.css')}}" />
<!-- using swiper slider images -->
<link rel="stylesheet" href="{{asset('front/vendors/swiper.min.css')}}" />
<!-- pace loader plugin  -->
<link rel="stylesheet" href="{{asset('front/vendors/pace-theme-minimal.css')}}" />
<!-- using owl-carousel slider images  -->
<link rel="stylesheet" href="{{asset('front/vendors/owl.theme.default.min.css')}}" />
<!--  using google web fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700"
  rel="stylesheet"
/>
<link
  href="https://fonts.googleapis.com/css?family=Luckiest+Guy"
  rel="stylesheet"
/>
<!-- Remix icon (LIBRARY OF ICONS) -->
{{-- <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"> --}}

<script>
  // avoid FART (Flash of inAccurate coloR Theme)
  const HtmlClass = localStorage.getItem('dark-mode') === "true" ? "dark-mode" : null;

  document.documentElement.classList.add(HtmlClass);
</script>

@if ($setting->pixel_code)
    {!! $setting->pixel_code !!}
@endif

@if ($setting->tags_manager)
    {!! $setting->tags_manager !!}
@endif
<!-- CSS Style -->
@stack('header-scripts')
