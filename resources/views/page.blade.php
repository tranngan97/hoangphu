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
    $topBannerImage = \App\Http\Controllers\BannersController::getByPage($page->id);
@endphp
@section('main-banner')
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
