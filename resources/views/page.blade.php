@extends('master')
@section('content')
    <div class="container pt-5">
        <h1>
            {{ $page->title }}
        </h1>
        <div class="page-content__wrap">
            {!! $page->body !!}
        </div>
    </div>
@endsection
