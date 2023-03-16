@push('scripts')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0"
        nonce="BzrEAzdr"></script>
@endpush
<!-- START BREADCRUMB -->


{{--



<section class="view-blog pb-5">

    <div class="container">

        <div class="mb-4">
            @foreach ($blog->attachments as $attachment)
                @if ($loop->index == 0)
                    {{-- <div class="carousel-item @if ($loop->index == 0) active @endif" data-interval="10000"> --}}
{{-- <img class='img-fluid'
                        src="{{ $attachment->url }}"
                        alt="{{ $attachment->file_name }}"> --}}
{{-- @endif --}}
{{-- </div> --
            @endforeach
        </div>

        <div class="section-title">
            <h1 class='title h4'>
                {{ $blog->title }}
            </h1>
        </div>

        <p class='blog-notes mb-3'>
            <span class="icon-link me-3">
                <i class="ri-edit-2-line"></i>
                {{ $blog->creator->full_name }}
            </span>
            <span class="date">
                <i class="ri-calendar-line"></i>
                <span class="format-date">{{ date('d M Y', strtotime($blog->created_at)) }}</span>
            </span>
        </p>

        <div class="desc">
          {!! $blog->description !!}
        </div>
        <hr>

        <div class="share-post">
            <h4 class="text-capitalize">{{ __('main.share_with') }} : </h4>

            <div class="contacts__social my-4">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('front.single_blog', ['id' => $blog->id, 'slug' => $blog->slug]) }}"
                    class="contacts__social--link">
                    <i class="ri-facebook-line"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?text=" class="contacts__social--link twitter">
                    <i class="ri-twitter-line"></i>
                </a>
                <a href="https://www.linkedin.com/shareArticle/?mini=true&url={{ route('front.single_blog', ['id' => $blog->id, 'slug' => $blog->slug]) }}"
                    class="contacts__social--link linkedin">
                    <i class="ri-linkedin-line"></i>
                </a>
                <a href="http://pinterest.com/pin/create/bookmarklet/?url={{ route('front.single_blog', ['id' => $blog->id, 'slug' => $blog->slug]) }}"
                    class="contacts__social--link pinterest">
                    <i class="ri-pinterest-line"></i>
                </a>
            </div>
        </div>
    </div>
</section> --}}
<div class="single-news">
    <div class="container">

        <div class="go-back">
            <a href="{{ route('front.home') }}"><i class="fa fa-home"></i>{{ __('main.home_title') }}</a>
            <span class='parent'><i class="breadcrumb-arrow"></i>{{ __('blog::blog.blogs') }}</span>
            <span><i class="breadcrumb-arrow"></i>{{ $blog->title }}</span>
        </div>

        <div class="single-news-content">
            <img src="{{ $blog->attachments[0]->url? $blog->attachments[0]->url:asset('front/assets/blogs/2.jpg') }}" alt="" style="width: 100%">

        <nav class="menuShare">
            <input type="checkbox" class="menu-open-share" name="menu-open-share" id="menu-open-share" />
            <label class="menu-open-button-share" for="menu-open-share">
                <i class="fa fa-share-alt share-icon"></i>
            </label>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('front.single_blog', ['id' => $blog->id, 'slug' => $blog->slug]) }}"
                class="menu-item-share facebook"><i class="fab fa-facebook-f"></i></a>
            <a href='#' class="menu-item-share google"><i class="fab fa-google-plus-g"></i></a>
            <a href="https://twitter.com/intent/tweet?text=" class="contacts__social--link twitter"
                class="menu-item-share twitter"><i class="fab fa-twitter"></i></a>
            <a href='#' class="menu-item-share youtube"><i class="fab fa-youtube"></i></a>
            <a href="https://www.linkedin.com/shareArticle/?mini=true&url={{ route('front.single_blog', ['id' => $blog->id, 'slug' => $blog->slug]) }}"
                class="menu-item-share linkedin"><i class="fab fa-linkedin-in"></i></a>
        </nav>

        <p>{{ $blog->description }}</p>

        <div class="post-author">
            <div class="auther-img"><img src="{{ $blog->creator->image }}" alt=""></div>
            <div class="auther-content">
                <h4>{{ $blog->creator->full_name }}</h4>
            </div>
        </div> <!-- close post-author -->
    </div> <!-- close single-news-content -->
</div> <!-- close container -->
</div> <!-- close single-news -->
