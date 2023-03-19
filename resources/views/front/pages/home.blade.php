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

  <div class="scroll wow bounce" data-wow-duration="1.5s" data-wow-iteration="3">
    <!-- open scroll -->
    <div class="chevron">
      <!-- open chevron -->
      <ul>
        <li>
          <a href="#"><span></span></a>
        </li>
        <li>
          <a href="#our-features"><span></span></a>
        </li>
        <li>
          <a href="#news"><span></span></a>
        </li>
        <li>
          <a href="#featured"><span></span></a>
        </li>
        <li>
          <a href="#srevices"><span></span></a>
        </li>
        <li>
          <a href="#footer" class="active"><span></span></a>
        </li>
      </ul>
    </div>
    <!-- close chevron -->

    <div class="scrolldown">
      <!-- open scrolldown -->
      <a class="down btn"> <span class="text">{{ __('main.scroll') }}</span></a>
    </div>
    <!-- close scrolldown -->
  </div>

@endsection
@push('scripts')

@endpush
