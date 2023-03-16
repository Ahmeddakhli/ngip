 {{-- @if (count($units))
     <!-- units-holder -->
     <section class="section units-holder">
         <div class="container">
             <div class="section-title" data-aos="fade">
                 <h2 class="title">{{__('main.featured_units')}}</h2>
             </div>
             <div class="swiper units-slider">
                 <div class="swiper-pagination" data-aos="fade" data-aos-delay="100"></div>

                 <div class="swiper-wrapper py-3 mt-5">
                     @foreach ($units as $unit)
                         <div class='swiper-slide'>
                             <div class="h-100" data-aos="fade" data-aos-delay="0">
                                 @include('front.components.unit', ['unit' => $unit])
                             </div>
                         </div>
                     @endforeach
                 </div>

                 <div class="swiper-button-next units-next-btn"></div>
                 <div class="swiper-button-prev units-prev-btn"></div>
             </div>
         </div>
     </section>

 @endif
 @push('scripts')
 @endpush --}}
 @if (count($units))
     <div class="featured-properties" id="featured">
         <!-- open featured-properties -->
         <div class="container">
             <!-- open container -->
             <h2 class="capitalize"><a href="#">{{ __('main.featured_units') }}</a></h2>
             <div class="flex-box">
                 <!-- open flex-box -->
                 @for ($i = 0; $i < 3; $i++)
                     @include('front.components.unit', ['unit' => $units[$i]])
                 @endfor

                 <!-- close feature-item -->
             </div>
             <!-- close flex-box -->
             <div class="btn-featured">
                 <!-- open btn-featured -->
                 <a href="{{ route('front.properties') }}">
                     <p> {{ __('main.all_properties') }}</p>
                     <div class="hoverBtn"></div>
                     <div class="hoverBtn-bottom"></div>
                 </a>
             </div>
             <!-- close btn-featured -->
         </div>
         <!-- close container -->
     </div>
 @endif
