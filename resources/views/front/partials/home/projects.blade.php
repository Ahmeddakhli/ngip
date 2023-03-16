@if (count($projects))
    <div class="features" id="our-features">
        <!-- open features -->
        <div class="container">
            <!-- open container -->
            <h2><a href="#">{{ __('main.featured_projects') }}</a></h2>

            <div class="swiper-projects">
                <div class="swiper-wrapper">
                    @foreach ($projects as $project)
                    @include('front.components.project', ['project' => $project])

                    @endforeach

                </div>
            </div>
            <!-- close owl-carousel -->
        </div>
        <!-- close container -->
    </div>
@endif

@push('scripts')
@endpush
