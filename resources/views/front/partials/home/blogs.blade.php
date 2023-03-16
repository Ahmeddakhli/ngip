{{-- @if (count($blogs))
    <section class="section blogs-holder">
        <div class="container">
          <div class="section-title" data-aos="fade">
            <h2 class="title">{{__('main.blog')}}</h2>
          </div>
          <div class="swiper blogs-slider">

            <div class="swiper-wrapper mb-5">
                @php
                $current = 0;
                $next = $current+1;
            @endphp
            @for ($i = 0; $i < count($blogs); $i++)
                @if (array_key_exists($current, $blogs))
                    <div class="swiper-slide">
                        <div class="vstack gap-4">
                            @include('front.components.blog', ['blog' => $blogs[$current]])
                            {{-- @if (array_key_exists($next, $blogs))
                                @include('front.components.blog', ['blog' => $blogs[$next]])
                            @endif --
                        </div>
                    </div>
                @endif
                @php
                    $current = $next+1;
                    $next = $current+1;
                @endphp
            @endfor
            </div>
            <div class="swiper-pagination"></div>
            
          </div>
        </div>
      </section>
@endif --}}
@if (count($blogs))
    <div class="latest-news" id="news">
        <!-- open latest-news -->
        <div class="container">
            <!-- open container -->
            <h2 class="caption"><a href="#">{{ __('main.blog') }}</a></h2>
            <div class="flex-box">
                <!-- open flex-box -->
                @for ($i = 0; $i < count($blogs); $i++)
                    @include('front.components.blog', ['blog' => $blogs[$i]])
                    @if ($i == 2)
                    @break
                    @endif
            @endfor
            <!-- close news -->
        </div>
        <!-- close flex-box -->
    </div>
    <!-- close container -->
</div>
@endif
