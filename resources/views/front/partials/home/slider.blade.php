{{-- <!-- hero-banner --->
<div class='hero-banner'>
    <div class="hero-banner__img">
        @foreach ($sliders as $slider)
            <img src="{{ URL::asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}" />
            @break
        @endforeach
    </div>

    <!-- filter-holder --->
    <div class="filter-holder hero-banner__filter">
        @include('front.components.search-box')

    </div>

</div> --}}
<div class="swiper-container" >
    <!-- open swiper-container -->
    <div class="swiper-wrapper cover-wrapper">
        <!-- open swiper-wrapper -->


        @foreach ($sliders as $slider)
            <div class="swiper-slide slider-image">
                <div class="ovelay"></div>

                {{-- <a href="{{$slider->link}}" class="img"> --}}
                <img src="{{ URL::asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}">
             {{-- <div class="project-name">
                <a href="{{$slider->link}}"> {{ $slider->title }}</a>
              </div> --}}

            </div>
        @endforeach
    </div>
    <!-- close swiper-wrapper -->
    <!-- Add Arrows -->
    <!-- <div class="swiper-button-next swiper-button-white swiper-button-hidden"></div>
              <div class="swiper-button-prev swiper-button-white"></div> -->

</div>

<div class="search">
    <!-- open search -->
    <form class="search-form" action=" {{ isset($url) ? $url : route('front.properties') }}" method="GET">
        @csrf

        <div class="row wow bounceIn" data-wow-duration="1s">
        <!-- open row -->
        <div class="search-head-bar">
          <input type="search" name="q" value="{{request('q')}}"  required placeholder="{{ __('main.search') }}" class="focus-hero" />
          <div class="row wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s">
            <!-- open row -->
            <input type="submit" value="{{ __('main.search') }}" />
        </div>
        </div>
      </div>
    </form>
  </div>
