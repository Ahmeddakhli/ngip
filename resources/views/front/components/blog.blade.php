{{-- <div class='blog'>
  <div class="row g-0">
    <div class="col-sm-5">
      <a href="{{route('front.single_blog',['id' => $blog->id,'slug' =>$blog->slug])}}" class="blog__image" target="_blank" rel="noopener" noreferrer>
        @if ($blog->attachments && isset($blog->attachments[0]))
        <img src="{{$blog->attachments[0]->url}}" alt="{{$blog->attachments[0]->file_name}}" />
        @else
        <img src="{{URL::asset('front/img/logo_1.png')}}" alt="placeholder image" />
        @endif
      </a>
    </div>

    <div class="col-sm-7">
      <div class="blog__info">
        <div class="blog__content">
          <h5 class='blog-title text-capitalize'>
            <a href="{{route('front.single_blog',['id' => $blog->id,'slug' =>$blog->slug])}}" title="{{ $blog->title}}" target="_blank" rel="noopener" noreferrer>
              {{ $blog->title}}
            </a>
          </h5>
          <p>
            <span class="icon-link me-3">
              <i class="ri-edit-2-line"></i>
              <span class="author">{{$blog->creator->full_name}}</span>
            </span>
            {{-- <span class="icon-link">
              <i class="ri-message-2-line"></i>
              <span class="msg-count">${attr("msg")}</span>
            </span> --
</p>
</div>
<div class="text-end">
    <a href="{{ route('front.single_blog', ['id' => $blog->id, 'slug' => $blog->slug]) }}"
        class="link-primary text-decoration-underline mt-3" target="_blank" rel="noopener" noreferrer>Read more...</a>
</div>
</div>
</div>
</div>
</div> --}}
<div class="news wow rotateInUpLeft" data-wow-duration="1s" data-wow-offset="200"
    style="visibility: visible; animation-duration: 1s; animation-name: rotateInUpLeft;">
    <!-- open news -->
    <div class="image">
        <a href="{{ route('front.single_blog', ['id' => $blog->id, 'slug' => $blog->slug]) }}">
            @if ($blog->attachments && isset($blog->attachments[0]))
                <img src="{{ $blog->attachments[0]->url }}" alt="{{ $blog->attachments[0]->file_name }}" />
            @else
                <img src="{{ asset('front/img/home1.jpg') }}" alt="placeholder image" />
            @endif
        </a>
    </div>
    <div class="details">
        <!-- open details -->
        <h3 class="capitalize">
            <a href="{{ route('front.single_blog', ['id' => $blog->id, 'slug' => $blog->slug]) }}">
                {{ $blog->title }}</a>
        </h3>
        <div class="icons">
            <!-- open icons -->
            <span><i class="fas fa-user"></i>{{ $blog->creator->full_name }}</span>
            <span><i class="far fa-clock"></i>{{ $blog->created_at }}</span>
        </div>
        <!-- close icons -->
        <p>{!! $blog->description !!} </p>

        <a href="{{ route('front.single_blog', ['id' => $blog->id, 'slug' => $blog->slug]) }}"
            class="link-primary text-decoration-underline mt-3" target="_blank" rel="noopener" noreferrer>Read more...
            <i class="fas fa-chevron-right"></i>
            <i class="fas fa-chevron-right"></i></a>
    </div>
    <!-- close details -->
</div>
