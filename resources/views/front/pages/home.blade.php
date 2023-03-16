@extends('front.layouts.main')

@push('header-scripts')
@endpush

@php
$page_name = 'home';
@endphp
@foreach($seo as $seo_home)
      @if($seo_home->page == 'home')
            @include('front.components.meta',['meta' => $seo_home])
      @break
      @endif
@endforeach
@section('content')


    <!-- START BANNER -->
      @if (count($sliders))
        @include('front.partials.home.slider')
      @endif
      @include('front.partials.home.projects')
      @include('front.partials.home.units')

      @include('front.partials.home.blogs')
      <!--  START PROJECTS  -->
      {{-- @include('front.partials.home.developers') --}}
     @include('front.partials.home.years_experiernce')
      @include('front.partials.home.our_services')

      <!--  END PROJECTS  -->

    {{-- <!-- START DEVELOPERS -->



    <!-- END DEVELOPERS -->
    @include('front.partials.home.blogs') --}}

@endsection
@push('scripts')

@endpush
