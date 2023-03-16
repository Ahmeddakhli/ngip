@extends('8x.layouts.main')
@section('title', trans('inventory::inventory.create_project'))

@push('header-scripts')
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,700|Montserrat:300,400,500,600,700|Source+Code+Pro&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/image-uploader.min.css?ver=' . env('FILES_VER')) }}" />
    @livewireStyles
    <link href="{{ URL::asset('front/assets/wizard.css') }}" rel="stylesheet" id="bootstrap-css">

    @endpush

@section('content')
    @include('inventory::projects.create-content')
@endsection

@push('footer-scripts')
    @include('inventory::projects.create-scripts')
    @livewireScripts

@endpush
