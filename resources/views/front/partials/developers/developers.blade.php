

<div class="developers">
    {{-- <link rel="stylesheet" href="{{ URL::asset('front/css/bootstrap.min.css') }}?ver={{ env('FILES_VER') }}"> --}}

    <div class="container">
        <div class="go-back">
            <a href="{{ route('front.home') }}"><i class="fa fa-home"></i>{{ __('main.home_title') }}</a>
            <span><i class="breadcrumb-arrow"></i>{{ __('inventory::inventory.developers') }}</span>
        </div>

        <div class="flex-box">
            @foreach ($developers as $developer)
            @include('front.components.developer', ['developer' => $developer])
        @endforeach
        </div> <!-- close flex-box -->
        @if($developers->hasPages())
        {{$developers->links('front.partials.primary.pagination')}}
      @endif
    </div> <!-- close container -->
</div> <!-- close developers -->
@push('scripts')
<script
      id="loading"
      src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"
    ></script>
    <script src="{{ asset('js/removeloading.js') }}"></script>
	<script src="{{ asset('js/ToggleDark.js') }}"></script>
    <script src="{{ asset('js/ToggleLang.js') }}"></script>
@endpush

