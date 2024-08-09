@extends('master')
@php
    $topBannerImage = \App\Http\Controllers\BannersController::getByPage($page->id);
@endphp
@section('content')
    @if($topBannerImage)
        <div class="banner-main" id="main-banner-section">
            <img style="width: 100vw; height: 500px" src="{{$topBannerImage}}">
        </div>
    @endif
@endsection
@section('content')
    <div class="container">
        <div class="page-content__wrap">
            {!! $page->body !!}
        </div>
    </div>
@endsection
