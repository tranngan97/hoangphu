@extends('master')
@section('description')
    <title>{{$page->title}}</title>
@endsection
@section('description')
    <meta name="description" content="{{$page->meta_description}}"/>
@endsection
@section('keywords')
    <meta name="keywords" content="{{$page->meta_keywords}}"/>
@endsection
@php
    $topBannerImages = \App\Http\Controllers\BannersController::getByPage($page->id);
    $i = 0;
@endphp
@section('main-banner')
    <div class="main-banner">
        @if($topBannerImages && count($topBannerImages) < 2)
            <div class="banner-main" id="main-banner-section">
                <img style="width: 100vw; height: 500px" src="{{$topBannerImages[0]}}">
            </div>
        @endif
        @if($topBannerImages && count($topBannerImages) > 1)
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" >
                <div class="carousel-inner">
                    @foreach($topBannerImages as $topBannerImage)
                        <div class="carousel-item @if($i==1) active @endif" data-interval="100">
                            <img src="{{URL::to($topBannerImage)}}" class="d-block w-100">
                        </div>
                        @php $i++ @endphp
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        @endif
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="page-content__wrap">
            {!! $page->body !!}
        </div>
    </div>
@endsection
