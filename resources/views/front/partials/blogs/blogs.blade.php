<div class="latest-news blog" id="news">
    <!-- open latest-news -->
    <div class="container">
        <!-- open container -->
        <div class="flex-items">
            <div class="go-back"><a href="{{ route('front.home') }}"><i
                        class="fa fa-home"></i>{{ __('main.home_title') }}</a>
                <span><i class="breadcrumb-arrow"></i>{{ __('blog::blog.blogs') }}</span>
            </div>

        </div> <!-- flex-items -->
        <h2 class="caption" class="capitalize">
            <a href="#">{{ __('blog::blog.blogs') }}</a>
        </h2>

        <div class="flex-box">
            <!-- open flex-box -->

            @foreach ($blogs as $blog)
                @include('front.components.blog', ['blog' => $blog])
            @endforeach

        </div> <!-- close flex-box -->
    </div> <!-- close container -->
    <div class="pagination wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="150">
        @if ($blogs->hasPages())
            {{ $blogs->appends(request()->input())->links('front.partials.primary.pagination') }}
        @endif
    </div> <!-- close pagination -->
</div> <!-- close latest-news  -->

@push('scripts')
    <script>
        function getCategoryBlogs(section, url) {
            $(`#${section}`).block({
                overlayColor: "#000000",
                type: "loader",
                state: "success",
                message: "<img src='{{ URL::asset('front/images/loader.gif') }}'/>"
            });
            // Send Sell Request
            $.ajax({
                url: url,
                method: 'GET',
            }).done(function(response) {
                // Un Block UI
                $(`#${section}`).empty().html(response);

                $(`#${section}`).unblock();

            }).fail(function(xhr, error_text, statusText) {
                // Un Block UI
                $(`#${section}`).unblock();
            });
        }
    </script>
    <script>
        $(document).on('click', '.page-link', function(e) {
            e.preventDefault();
            var url = $(this).attr('href');
            var section = $(this).closest('.tab-pane').attr('id');
            getCategoryBlogs(section, url);
        });
    </script>
@endpush

{{-- <div class="latest-news blog" id="news"> <!-- open latest-news -->
    <div class="container">	<!-- open container -->
        <div class="flex-items">
            <div class="go-back">
                <nav aria-label="">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('front.home') }}">{{ __('main.home_title') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('blog::blog.blogs') }}</li>
                        </ol>
                    </div>
                </nav>
            </div>

        </div> <!-- flex-items -->
        <h2 class="caption" class="capitalize">
            <a href="#">Latest News</a>
        </h2>
        <div class="flex-box">	<!-- open flex-box -->

            <div class="news wow fadeInUp blog-news" data-wow-duration="1.5s" data-wow-offset="200"> <!-- open news -->
                <div class="image">
                    <a href="./single-blog.html"> <img src="img/home3.jpg" alt="" /> </a>
                </div>
                <div class="details"> <!-- open details -->
                    <h3 class="capitalize">
                        <a href="./single-blog.html"> Housing Confidence Hits Record High As Prices Skyrocket </a>
                    </h3>
                    <div class="icons">	<!-- open icons -->
                        <span><i class="fas fa-user"></i>Amanda Sayfried</span>
                        <span><i class="far fa-clock"></i>25, AUG 2019</span>
                    </div> <!-- close icons -->
                    <p>Integer luctus diam ac scerisque consectetur. Vimus dotnetact euismod lacus sit amet. Aenean interdus mid
                        vitae maximus...</p> <a href="./single-blog.html">More Details &nbsp;
                            <i class="fas fa-chevron-right"></i>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                </div>	<!-- close details -->
            </div>	<!-- close news -->
        </div>	<!-- close flex-box -->
    </div>	<!-- close container -->
    <div class="pagination wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="150">
        <ul>
            <li> <a href="#"><i></i></a>
            </li>
            <li><a href="#">1</a>
            </li>
            <li><a href="#">2</a>
            </li>
            <li><a href="#">3</a>
            </li>
            <li> <a href="#"><i></i></a>
            </li>
        </ul>
    </div> <!-- close pagination -->
</div> <!-- close latest-news  --> --}}
